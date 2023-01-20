<?php
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    // check if user exist.
    $file = fopen("passwd.txt", "r");
    $finduser = false;
    while (!feof($file)) {
        $line = fgets($file);
        $array = explode(":", $line);
        if (trim($array[0]) == $_POST['user']) {
            $finduser = true;
            break;
        }
    }
    fclose($file);

    // register user or pop up message
    if ($finduser) {
        echo $_POST["user"];
        echo ' already exists! Choose a different username.';
        include 'register.html';
    } else {
        $file = fopen("passwd.txt", "a");
        fputs($file, $_POST["user"] . ":" . $_POST["pass"] . "\r\n");
        fclose($file);
        echo $_POST["user"];
        echo " Registered successfully!";
        include 'register.html';
    }
} else {
    include 'register.html';
}
?>