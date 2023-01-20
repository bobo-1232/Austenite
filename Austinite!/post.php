<?php
if (isset($_REQUEST['post']))  {
  $title = $_REQUEST['title'];
  $text = $_REQUEST['post'];
  $firstname = $_REQUEST['firstname'];
  $lastname = $_REQUEST['lastname'];
  $date = date("d/m/Y");
  $name = $firstname. " " . $lastname . ", " . $date;
  $new_post = $title . ":" . $name . ":" . $text . "\n";

  $posts = fopen('blog.txt', 'a'); 
  fwrite($posts, $new_post);  
  fclose($posts);
  header('Location: blog.php');
}
?>