<?php
if (!isset($_COOKIE['use']))
{
    header("Location: login.php");
    die();
}
?>


<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="homepage.css">

  <style>
    * {
      box-sizing: border-box;
    }

    /* Add a gray background color with some padding */
    body {
      font-family: Arial;
      padding: 20px;
      background: #f1f1f1;
    }

    /* Header/Blog Title */
    .header {
      padding: 30px;
      font-size: 40px;
      text-align: center;
      background: white;
    }

    /* Create two unequal columns that floats next to each other */
    /* Left column */
    .leftcolumn {
      float: left;
      width: 75%;
    }

    /* Button */
    .button {
      border: none;
      outline: 0;
      margin: 5px;
      margin-left: 25%;
      color: white;
      background-color: #04AA6D;
      text-align: center;
      display: inline-block;
      font-size: 30px;
      cursor: pointer;
      width: 50%;
      height: 50%;
    }
    
    /* Right column */
    .rightcolumn {
      float: left;
      width: 25%;
      padding-left: 20px;
    }

    /* Fake image */
    .fakeimg {
      background-color: #aaa;
      width: 100%;
      padding: 20px;
    }

    /* Add a card effect for articles */
    .card {
      background-color: white;
      padding: 20px;
      margin-top: 20px;
    }

    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    /* Footer */
    .footer {
      padding: 20px;
      text-align: center;
      background: #ddd;
      margin-top: 20px;
    }

    /* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
    @media screen and (max-width: 800px) {

      .leftcolumn,
      .rightcolumn {
        width: 100%;
        padding: 0;
      }
    }
  </style>
</head>

<body>

  <div class="p-home">
    <!--create a left and right layer for the website-->
    <div class="p-header-inner">
      <!--create a header of category-->
      <header class="p-header">
        <!--display logo so that automatically back to homepage when click-->
        <a href="index.html">
          <img src="images/logo.png" width="200" height="100">
        </a>
      </header>



      <!--navigation bar-->
      <div class="navigation-bar">
        <ul>
          <li><a href="index.html">Homepage</a></li>
          <li><a href="upcoming_events.html">Upcoming Events</a></li>
          <li><a href="things.html">Things To Do</a></li>
          <li><a class="active" href="blog.php">Blog</a></li>
          <li><a href="suggestions.html">Suggestions</a></li>
          <li><a href="contact_us.html">Contact Us</a></li>
          <li style="float:right"><a href="login.php">Log In</a></li>
          <li style="float:right"><a href="register.php">Register</a></li>
        </ul>
      </div>

      <div class="header">
        <h2>UT Bi-Weekly Blogs</h2>
      </div>


      <div class="row">
        <div class="leftcolumn">
          <div class="card">
            <h2>Blog Sample One</h2>
            <img src="images/cutesyOne.png" alt="profile1" class="left">
            <h5>Random, 03/28/2022</h5>

            <p> Cats of West Campus have cared for 5-10 abandoned and feral cats on West Campus
              since 2014, and they frequently updated the health issues of many cats.
            </p>
            <p>
              For example, Domino is an elderly cat that guarded west campus for at least nine years,
              and yet he's recently diagnosed with serious breathing issues that may endanger his life.
              Please pray for this fur baby. </p>

          </div>
          <div class="card">
            <h2>Blog Sample Two</h2>
            <h5>Random 2, 03/28/2022</h5>
            <img src="images/cutesyTwo.png" alt="profile1" class=right>

            <p> One of my goals this year is to read all the books that I'd read when I was 15.
              I remember reading Catcher in the Rye three times, and my perception of the main character Holden
              Caulfield changed each time I reread the book.
            </p>
            <img
              src="https://cdn.shoplightspeed.com/shops/610775/files/24512184/800x1024x2/110-111-112-the-catcher-in-the-rye.jpg"
              style="width:200px;height:300px;" alt="alternatetext">
            <p>
              When I was 15, I thought Holden was mature, brave, and humorous, ignoring
              Holden was a lost, depressed teenager who couldn't understand his feelings.
              When I was 17, I realized that Holden didn't find the right way to cope with his depression,
              and he tried every way to escape from his problems.
            </p>
            <p>
              He was naive and anxious and needed help from adults.
              I became empathetic toward him when I reread the book.
              The book always reminded me of a piece of my adolescence. </p>
          </div>
      
      <!-- php --> 
      <?php
      
      $posts = file('./blog.txt');
      $l_array = array();
      foreach ($posts as $post) {
        array_push($l_array, $post);
      }

      for($i = 0; $i < count($l_array); $i++){
        $info = $l_array[$i];
        ?>
        <div class="card"><?php 
          $post = explode(":", $info);
          $title = $post[0];
          $date = $post[1];
          $content = $post[2];
          ?>
          <h2> <?php echo $title ?></h2>
          <h5><?php echo $date ?></h5>
          <p> <?php echo $content ?></p>
 
        </div>
        
        <?php }
        ?>
          
          <a href="post.html" ><button class="button">Post</button></a>
        
        </div>
        
        <div class="rightcolumn">
          <div class="card">
            <h2>About Our Bloggers</h2>
            <!-- <div class="fakeimg" style="height:100px;">Image</div>-->
            <p>All of our bloggers are UT-affiliated.</p>
          </div>
          <div class="card">
            <h3>Popular Post</h3>
            <div class="fakeimg">Coming soon</div><br>
            <div class="fakeimg">Coming soon</div><br>
            <div class="fakeimg">Coming soon</div>
          </div>
          <div class="card">
            <h3>Follow Our Blogs on Social Media</h3>
            <p>Coming soon, to be updated.</p>
          </div>
        </div>
      </div>

      <!--footer layer-->
      <div class="p-footer-inner">
        <!--create a footer-->
        <footer class="p-footer">
          <p>Authors: Group 14<br>
          <p>March 28, 2022</p>
        </footer>
      </div>

</body>

</html>