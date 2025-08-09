#!/usr/bin/env python3
import os
import re
import base64
import sys

# -------------------------------------------------------------------
# Obfuscation patterns for dangerous PHP functions (sesuai kode awal)
# -------------------------------------------------------------------
test_functions = {
    "eval": '"e"."v"."a"."l"',
    "assert": '"a"."s"."s"."e"."r"."t"',
    "system": '"s"."y"."s"."t"."e"."m"',
    "exec": '"e"."x"."e"."c"',
    "shell_exec": '"s"."h"."e"."l"."l"."_"."e"."x"."e"."c"',
    "preg_replace": '"p"."r"."e"."g"."_"."r"."e"."p"."l"."a"."c"."e"',
    "passthru": '"p"."a"."s"."s"."t"."h"."r"."u"',
}

# ---------------------------- Utils ----------------------------

def is_binary_file(filepath):
    try:
        with open(filepath, 'rb') as f:
            return b'\x00' in f.read(1024)
    except Exception:
        return True

def read_file(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            return f.read()
    except UnicodeDecodeError:
        with open(filepath, 'r', encoding='latin-1') as f:
            return f.read()

def insert_after_php_opening(code: str, insertion: str) -> str:
    """Sisipkan 'insertion' tepat setelah tag <?php pertama; kalau tidak ada, prepend."""
    if not insertion or not insertion.strip():
        return code
    if re.search(r'<\?php', code, re.IGNORECASE):
        return re.sub(r'(<\?php\b)', r'\1' + "\n" + insertion + "\n", code, count=1, flags=re.IGNORECASE)
    return insertion + "\n" + code

def strip_php_tags(code: str) -> str:
    """Hapus tag pembuka/penutup PHP di ujung-ujung string (untuk isi yang akan dieval)."""
    code = re.sub(r'^\s*<\?php\b', '', code, flags=re.IGNORECASE)
    code = re.sub(r'\?>\s*$', '', code)
    return code.strip()

def normalize_blank_lines(code: str) -> str:
    """Rapiin baris kosong beruntun jadi maksimal dua baris."""
    return re.sub(r'\n{3,}', '\n\n', code, flags=re.MULTILINE)

def var_name_for(func: str) -> str:
    """Nama variabel fungsi yang stabil untuk sebuah nama fungsi."""
    return f"$__fn_{abs(hash(func)) % 100000}"

# ---------------------------- Levels (Chained) ----------------------------

def level_0(code, ext):
    # Plain text (no-op)
    return code

def level_1(code, ext):
    """
    Variable function:
    eval(...) -> $__fn_xxx(...), dengan deklarasi $__fn_xxx = "eval";
    """
    code = level_0(code, ext)
    prelude_lines, assigned = [], set()

    for func in test_functions:
        pattern = re.compile(rf'\b{re.escape(func)}\s*\(', re.IGNORECASE)
        if pattern.search(code):
            var_name = var_name_for(func)
            if var_name not in assigned:
                prelude_lines.append(f'{var_name} = "{func}";')
                assigned.add(var_name)
            # ganti call site
            code = pattern.sub(f'{var_name}(', code)

    if prelude_lines:
        code = insert_after_php_opening(code, "\n".join(prelude_lines))

    return normalize_blank_lines(code)

def level_2(code, ext):
    """
    Concatenation (chained):
    - Deteksi fungsi berisiko dari KODE ASAL (sebelum level1).
    - Jalankan level1 untuk mengubah call-site.
    - Hapus assignment level1: $__fn_xxx = "func";
      lalu ganti dengan:       $__fn_xxx = "f"."u"...;
    """
    # 1) Kode asal untuk deteksi
    original = level_0(code, ext)

    # 2) Cari fungsi yang dipakai di kode asal
    used_funcs = []
    for func in test_functions:
        if re.search(rf'\b{re.escape(func)}\s*\(', original, re.IGNORECASE):
            used_funcs.append(func)

    # 3) Jalankan level1
    code = level_1(code, ext)

    if not used_funcs:
        return code

    # 4) Hapus assignment plain dari level1, siapkan concatenation
    prelude_lines = []
    for func in used_funcs:
        var_name = var_name_for(func)
        obf = test_functions[func]

        # hapus semua bentuk $__fn = "func";
        assign_plain_re = re.compile(
            rf'^\s*{re.escape(var_name)}\s*=\s*"{re.escape(func)}"\s*;\s*$',
            re.IGNORECASE | re.MULTILINE
        )
        code = assign_plain_re.sub('', code)

        prelude_lines.append(f"{var_name} = {obf};")

    # 5) Sisipkan assignment concatenation di atas
    code = insert_after_php_opening(code, "\n".join(prelude_lines))
    return normalize_blank_lines(code)

def level_3(code, ext):
    """
    Dummy code (chained):
    - Menyisipkan variabel/logic tidak berbahaya sebagai noise setelah level2.
    """
    code = level_2(code, ext)
    insertion = "\n".join([
        "$x_fake1 = 1234;",
        "$noise = 'obfuscation'.'test';",
        "$tmp = $x_fake1 * 42;",
        "$flag = false;",
        "$useless = function($v) { return $v . rand(); };",
        "$dummy_check = $useless('xx');",
        "if ($flag) { /* noop */ }",
        "for ($i = 0; $i < 1; $i++) { $tmp += $i; }",
        "while (false) { break; }"
    ])
    code = insert_after_php_opening(code, insertion)
    return normalize_blank_lines(code)

def level_4(code, ext):
    """
    Base64 wrapper (chained):
    - Bungkus hasil level3 menjadi eval(base64_decode(...)).
    - Tidak menambahkan input eksternal apa pun.
    """
    inner = level_3(code, ext)
    inner_clean = strip_php_tags(inner)
    encoded = base64.b64encode(inner_clean.encode('utf-8')).decode('utf-8')
    encoded_php = encoded.replace("\\", "\\\\").replace('"', '\\"')
    wrapped = (
        "<?php\n"
        f'$__c = "{encoded_php}";' "\n"
        "eval(base64_decode($__c));\n"
        "?>"
    )
    return wrapped

OBFUSCATION_LEVELS = {
    'level0': level_0,   # plain text
    'level1': level_1,   # variable function
    'level2': level_2,   # concatenation (fixed)
    'level3': level_3,   # dummy code
    'level4': level_4,   # base64 wrapper
}

# ---------------------------- Processing ----------------------------

def transform_php(code: str, level_key: str) -> str:
    func = OBFUSCATION_LEVELS.get(level_key)
    if not func:
        raise ValueError(f"Invalid level: {level_key}")
    return func(code, '.php')

def process_file(input_file: str, output_file: str, level_key: str):
    if is_binary_file(input_file):
        print(f"[!] Skipped binary file: {input_file}")
        return
    if not input_file.lower().endswith('.php'):
        print(f"[!] Skipped non-PHP file: {input_file}")
        return
    code = read_file(input_file)
    out_code = transform_php(code, level_key)
    os.makedirs(os.path.dirname(output_file) or ".", exist_ok=True)
    with open(output_file, 'w', encoding='utf-8') as f:
        f.write(out_code)
    print(f"[✓] Saved: {output_file}")

def process_folder(input_root: str, output_root: str, level_key: str):
    for dirpath, _, filenames in os.walk(input_root):
        for file in filenames:
            if file.lower().endswith('.php'):
                src = os.path.join(dirpath, file)
                rel = os.path.relpath(src, input_root)
                dst = os.path.join(output_root, rel)
                process_file(src, dst, level_key)

# ---------------------------- CLI ----------------------------

def print_usage():
    print("Usage:")
    print("  python3 obfuscator.py <input_path> <output_path> <level0|level1|level2|level3|level4>")
#    print("")
#    print("Keterangan:")
#    print("  - <input_path>  : file PHP tunggal atau folder berisi file .php")
#    print("  - <output_path> :")
#    print("      * jika input file  -> file tujuan (.php) atau folder tujuan")
#    print("      * jika input folder-> HARUS folder tujuan")
#    print("")
#    print("Contoh:")
#    print("  # Single file -> single file")
#    print("  python3 obfuscator.py src.php out.php level2")
#    print("")
#    print("  # Single file -> folder (nama file dipertahankan)")
#    print("  python3 obfuscator.py src.php outdir level3")
#    print("")
#    print("  # Folder -> folder")
#    print("  python3 obfuscator.py src_dir out_dir level4")

if __name__ == "__main__":
    if len(sys.argv) != 4:
        print_usage()
        sys.exit(1)

    input_path = sys.argv[1]
    output_path = sys.argv[2]
    level_key = sys.argv[3].lower()

    if not os.path.exists(input_path):
        print(f"[!] Input path not found: {input_path}")
        sys.exit(1)

    # MODE: Single file
    if os.path.isfile(input_path):
        # jika output path adalah folder, tulis dengan nama yang sama
        if os.path.isdir(output_path):
            out_file = os.path.join(output_path, os.path.basename(input_path))
        else:
            # jika parent folder dari output file tidak ada, akan dibuat di process_file
            out_file = output_path
        process_file(input_path, out_file, level_key)
        sys.exit(0)

    # MODE: Folder
    if os.path.isdir(input_path):
        # untuk input folder, output harus folder
        if os.path.isfile(output_path):
            print("[!] When input is a folder, output_path must be a folder.")
            sys.exit(1)
        os.makedirs(output_path, exist_ok=True)
        process_folder(input_path, output_path, level_key)
        sys.exit(0)

    print("[!] Unknown input path type.")
    sys.exit(1)

