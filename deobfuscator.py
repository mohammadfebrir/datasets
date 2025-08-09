import os
import re
import sys
import base64
import codecs

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

def deobfuscate_level7(code):
    match = re.search(r'base64_decode\s*\(\s*["\']([^"\']+)["\']\)', code)
    if match:
        b64 = match.group(1)
        try:
            decoded = base64.b64decode(b64).decode('utf-8')
            return decoded
        except Exception:
            pass
    return code

def deobfuscate_level6(code):
    if 'str_rot13' in code or re.search(r'\$f\s*=\s*[\'"]s[\'"]\.', code):
        match_content = re.search(r'\$c\s*=\s*"((?:[^"\\]|\\.)*)"', code)
        if match_content:
            encoded = match_content.group(1).replace('\\"', '"')
            try:
                return codecs.decode(encoded, 'rot_13')
            except Exception:
                pass
    return code

def recover_function_string_concat(m):
    pieces = re.findall(r'"([^"]+)"', m.group(0))
    return '"' + ''.join(pieces) + '"'

def deobfuscate_level5_to_2(code):
    # Remove dummy logic and noise
    code = re.sub(r'\$fmap\s*=\s*array\s*\([^)]+\);\s*', '', code)
    code = re.sub(r'\$fmap\s*\[\s*[\'"][^\'"]+[\'"]\s*\]\s*\([^)]*\);', '', code)
    code = re.sub(r'\$(x_fake1|noise|tmp|flag|useless|dummy_check)\s*=\s*[^;]+;', '', code)
    code = re.sub(r'if\s*\([^)]*\)\s*\{[^}]*\}', '', code)
    code = re.sub(r'for\s*\([^)]*\)\s*\{[^}]*\}', '', code)
    code = re.sub(r'while\s*\([^)]*\)\s*\{[^}]*\}', '', code)
    code = re.sub(r'//\s*obf.*', '', code)

    # Join strings like "e"."v"."a"."l"
    code = re.sub(r'("([^"]+)"\s*\.\s*)+"([^"]+)"', recover_function_string_concat, code)

    # Detect and replace variable functions (with or without $)
    func_assigns = re.findall(r'(?:\$)?(\w+)\s*=\s*"(\w+)";', code)
    for varname, real_func in func_assigns:
        # Replace function calls: varname(...) → real_func(...)
        pattern = rf'\b{re.escape(varname)}\s*\('
        code = re.sub(pattern, f'{real_func}(', code)

        # Remove the original assignment: varname = "function";
        assign_pattern = rf'(?:\$)?{re.escape(varname)}\s*=\s*"{re.escape(real_func)}"\s*;\s*'
        code = re.sub(assign_pattern, '', code)

    return code

def deobfuscate(code):
    old_code = None
    while old_code != code:
        old_code = code
        code = deobfuscate_level7(code)
        code = deobfuscate_level6(code)
        code = deobfuscate_level5_to_2(code)
    return code

def process_file(filepath, input_root, output_root, output_filename=None):
    if is_binary_file(filepath):
        print(f"[!] Skipped binary file: {filepath}")
        return

    ext = os.path.splitext(filepath)[1].lower()
    if ext != '.php':
        return

    rel_path = os.path.relpath(filepath, input_root)
    out_path = os.path.join(output_root, output_filename or rel_path)

    code = read_file(filepath)
    deobf_code = deobfuscate(code)

    os.makedirs(os.path.dirname(out_path) or ".", exist_ok=True)
    with open(out_path, 'w', encoding='utf-8') as f:
        f.write(deobf_code)

    print(f"[✓] Deobfuscated: {out_path}")

def process_folder(input_root, output_root):
    for dirpath, _, filenames in os.walk(input_root):
        for file in filenames:
            if file.lower().endswith('.php'):
                process_file(os.path.join(dirpath, file), input_root, output_root)

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage:")
        print("  python3 deobfuscator.py <input_file_or_folder> <output_file_or_folder>")
        sys.exit(1)

    input_path = sys.argv[1]
    output_path = sys.argv[2]

    if os.path.isfile(input_path):
        if not output_path.endswith('.php'):
            print("[!] When input is a file, output must be a .php file")
            sys.exit(1)

        input_dir = os.path.dirname(input_path)
        output_dir = os.path.dirname(output_path) or "."
        output_name = os.path.basename(output_path)

        os.makedirs(output_dir, exist_ok=True)
        process_file(input_path, input_dir, output_dir, output_filename=output_name)

    elif os.path.isdir(input_path):
        process_folder(input_path, output_path)
    else:
        print(f"[!] Invalid path: {input_path}")

