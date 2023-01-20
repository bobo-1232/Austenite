<?php

if (isset($_COOKIE['use']))   // Checking whether the session is already there or not if 
// true then header redirect it to the home page directly 
{
    session_start();
    
    header("Location:blog.php");
} else {
    include "login.html";
}

if (isset($_POST["login"]))   // it checks whether the user clicked login button or not 
{
    $username = $_POST['username'];
    //echo "$username";
    $password = $_POST['password'];
    //echo "$password";

    
    $sever = "spring-2022.cs.utexas.edu";
    $user = "cs329e_bulko_vtv235";
    $pwd = "tie3Rotten7Chorus";
    $dbName = "cs329e_bulko_vtv235";
    
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

    $command = "SELECT * FROM user WHERE username = '$username';";
    $result = $db->query($command);

    $rownum = $result->num_rows;

    if($rownum == 0){
        echo "Invalid Username or Password!";
    } else{
        $command = "SELECT userid, password from user WHERE username = '$username';";
        $result = $db->query($command);

        $row = mysqli_fetch_array($result);
        $vpass = $row['password'];
        //echo "<td>" . $row['ID'] . "</td>";

        if($vpass != $password){
            //echo "<td>" . $row['userid'] . "</td>";
            echo "<span style='color:red;text-align:center;'>Invalid Username or Password!";
        } else{
            setcookie('use', $username, time() + 3600);
            echo '<script type="text/javascript"> window.open("blog.php","_self");</script>';
            session_start();
            $_SESSION['id'] = $row['userid'];
            
        }
    }

} 

?>
