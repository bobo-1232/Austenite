<?php

if (isset($_COOKIE['use']))   // Checking whether the session is already there or not if 
// true then header redirect it to the home page directly 
{
    header("Location:blog.php");
} else {
    include "login.html";
}

if (isset($_POST["login"]))   // it checks whether the user clicked login button or not 
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];

    if (isset($_POST["user"]) && isset($_POST["pass"])) {
        $file = fopen('passwd.txt', 'r');
        $good = false;
        while (!feof($file)) {
            $line = fgets($file);
            $array = explode(":", $line);
            if (trim($array[0]) == $_POST['user'] && trim($array[1]) == $_POST['pass']) {
                $good = true;
                break;
            }
        }

        if ($good) {
            setcookie('use', $_POST["user"], time() + 30);
            echo '<script type="text/javascript"> window.open("blog.php","_self");</script>';
            echo $_POST["user"];
            echo "Logged in successfully!";
        } else {
            echo "<span style='color:red;text-align:center;'> Invalid Username or Password! </span>";
        }
        fclose($file);
    } else {
        include 'login.html';
    }
}
?>
