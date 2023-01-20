<?php

if (isset($_REQUEST['subject']))  {

    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $country = $_REQUEST['country'];
    $message = $_REQUEST['subject'];
    $suggestion = $firstname . " " . $lastname . " from " . $country . " suggests: " . $message . "\n";
    echo $suggestion;

    $fp = fopen('suggestions.txt', 'a'); 
    fwrite($fp, $suggestion);  
    fclose($fp);
}
?>