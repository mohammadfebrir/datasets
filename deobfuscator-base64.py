import base64
import sys
import re

def deobfuscate_php_file(input_file, output_file):
    # Baca file PHP
    try:
        with open(input_file, 'r') as f:
            php_content = f.read()
    except FileNotFoundError:
        print(f"File {input_file} tidak ditemukan.")
        sys.exit(1)

    # Mencari string Base64 dalam file PHP menggunakan regex
    # Cari yang berbentuk $__c = "Base64String";
    match = re.search(r'\$__c\s*=\s*"([^"]+)";', php_content)

    if not match:
        print("Base64 string tidak ditemukan dalam file PHP.")
        sys.exit(1)
    
    base64_encoded = match.group(1)

    # Decode base64
    decoded_content = base64.b64decode(base64_encoded).decode('utf-8')

    # Tulis kode PHP terdekripsi ke file output
    with open(output_file, 'w') as f:
        f.write(decoded_content)

    print(f"File deobfuscated berhasil dibuat: {output_file}")

# Memeriksa apakah nama file input dan output diberikan sebagai argumen
if len(sys.argv) != 3:
    print("Penggunaan yang benar: python3 deobfuscator-base64.py <input_file> <output_file>")
    sys.exit(1)

# Mengambil argumen input dan output dari command line
input_file = sys.argv[1]
output_file = sys.argv[2]

# Panggil fungsi deobfuscate_php_file dengan nama file yang dinamis
deobfuscate_php_file(input_file, output_file)

