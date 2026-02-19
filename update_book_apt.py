
import os
import glob

files = glob.glob("api/*.php")

patterns_to_replace = [
    '<a href="#" class="btn-book-appointment-doc">Book Apt.</a>',
    '<button class="btn-book-appointment-doc">Book Apt.</button>'
]

replacement = '<a href="<?php echo isset($doctor[\'slug\']) ? $doctor[\'slug\'] : $doctor[\'id\']; ?>.php#book-appointment" class="btn-book-now">Book Apt.</a>'

count = 0
for file_path in files:
    try:
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
        
        new_content = content
        replaced = False
        for pattern in patterns_to_replace:
            if pattern in new_content:
                new_content = new_content.replace(pattern, replacement)
                replaced = True
        
        if replaced:
            with open(file_path, 'w', encoding='utf-8') as f:
                f.write(new_content)
            print(f"Updated {file_path}")
            count += 1
            
    except Exception as e:
        print(f"Error reading {file_path}: {e}")

print(f"Total files updated: {count}")
