import base64
import sys
import os

def read_file(filepath):
    try:
        with open(filepath, 'r', encoding='utf-8') as f:
            return f.read()
    except UnicodeDecodeError:
        with open(filepath, 'r', encoding='latin-1') as f:
            return f.read()

def level_7(code):
    encoded = base64.b64encode(code.encode('utf-8')).decode('utf-8')
    return (
        "<?php\n"
        '$f = "e"."v"."a"."l";\n'
        '$c = base64_decode("' + encoded + '");\n'
        '$f($c);\n'
        "?>"
    )

if __name__ == "__main__":
    if len(sys.argv) != 3:
        print("Usage: python3 obfuscator-base64.py <input_file.php> <output_file.php>")
        sys.exit(1)

    input_file = sys.argv[1]
    output_file = sys.argv[2]

    if not os.path.isfile(input_file):
        print(f"[!] Input file does not exist: {input_file}")
        sys.exit(1)

    code = read_file(input_file)
    obfuscated = level_7(code)

    with open(output_file, 'w', encoding='utf-8') as f:
        f.write(obfuscated)

    print(f"[✓] Obfuscated file saved to: {output_file}")

