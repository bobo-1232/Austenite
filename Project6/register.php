<?php
//include 'register.html';

//setting up  readldb


$sever = "spring-2022.cs.utexas.edu";
$user = "cs329e_bulko_vtv235";
$pwd = "tie3Rotten7Chorus";
$dbName = "cs329e_bulko_vtv235";

//echo "2";
/*
$sever = 'localhost';
$user = 'root';
$pwd = '';
$dbName = "cs329e_bulko_vtv235";
*/

$db = new mysqli($sever, $user, $pwd, $dbName);

if ($db->connect_errno){
    die('Connect Error: '. $db->connect_errno . ":" . $db->connect_error);
}

$fname = $_GET['fname'];
//echo '$fname';

$lname = $_GET['lname'];
//echo '$lname';

$username = $_GET['username'];
$password = $_GET['password'];


// register user or pop up message
$command = "SELECT * FROM user WHERE username = '$username';";
$result = $db->query($command);
$rownum = $result->num_rows;

if ($rownum > 0){
    echo "Username existed. Try different!";
} else {
    $command = "INSERT INTO user VALUES (DEFAULT, '$fname', '$lname', '$username', '$password');";
    $result = $db->query($command);
    echo "New user registered. Please Login";

}


?>