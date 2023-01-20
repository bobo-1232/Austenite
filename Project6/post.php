<?php
if(isset($_COOKIE['use'])){
    session_start();
    
    $userid = $_SESSION['id'];

    //setting up  readldb

    
    $sever = "spring-2022.cs.utexas.edu";
    $user = "cs329e_bulko_vtv235";
    $pwd = "tie3Rotten7Chorus";
    $dbName = "cs329e_bulko_vtv235";
    

    /*
    //Testing purpose
    $sever = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbName = "cs329e_bulko_vtv235";
    */
    $db = new mysqli($sever, $user, $pwd, $dbName);

    if ($db->connect_errno){
        die('Connect Error: '. $db->connect_errno . ":" . $db->connect_error);
    }
    } else{
    header("location: login.php");
    }

    //$fname = $_POST['fname'];
    //$lname = $_POST['lname'];
    $cat = $_POST['cat'];
    $date = date('Y-m-d'); 

    $title = $_POST['title'];

    $content = $_POST['post'];

    $command = "INSERT INTO post VALUES ('$userid', DEFAULT, '$cat', '$title', '$content', '$date')";
    $result = $db->query($command);

    if(!$result){
        die("Error");
    } else{
        header("Location:blog.php");
    }
?>