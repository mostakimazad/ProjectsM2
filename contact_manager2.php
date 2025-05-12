<?php

// Contact variables
$name1 = "";
$phone1 = "";
$name2 = "";
$phone2 = "";

while (true) {
    echo "\n------ Contact Management App ------\n";
    echo "1. Add Contact\n";
    echo "2. View Contacts\n";
    echo "3. Exit\n";
    echo "Choose option (1-3): ";
    $choice = trim(fgets(STDIN));

    if ($choice == '1') {
        if ($name1 != "" && $name2 != "") {
            echo "⚠️  Only 2 contacts allowed.\n";
        } else {
            echo "Enter name: ";
            $name = trim(fgets(STDIN));
            echo "Enter phone: ";
            $phone = trim(fgets(STDIN));

            if ($name1 == "") {
                $name1 = $name;
                $phone1 = $phone;
            } else {
                $name2 = $name;
                $phone2 = $phone;
            }

            echo "✅ Contact saved.\n";
        }
    } elseif ($choice == '2') {
        echo "\n--- Saved Contacts ---\n";
        if ($name1 == "" && $name2 == "") {
            echo "⚠️  No contacts saved.\n";
        } else {
            if ($name1 != ""){           
                echo "Contact 1: $name1 - $phone1\n";
            }
            if ($name2 != ""){ 
                echo "Contact 2: $name2 - $phone2\n";
            }
        }
    } elseif ($choice == '3') {
        echo "OK Exit👋 Goodbye!\n";
        break;
    } else {
        echo "❌ Invalid choice. ❌ \n";
    }
}
?>
