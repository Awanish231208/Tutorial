<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>courses</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<header class="header">
   
   <section class="flex">

      <a href="home.php" class="logo">Mind Plus</a>

      <div class="icons">
         <div id="toggle-btn" class="fas fa-sun"></div>
         <h2>
      <span>
       <?php
           // Check if the username is set in the session
           if(isset($_SESSION['username'])) {
               echo "Welcome, " . $_SESSION['username'];
           } else {
               echo "Welcome, Guest"; // Display a default message if the username is not set
           }
       ?>
   </span>
         </h2>
      </div>
   </section>

</header>   

<div class="side-bar">

   <div id="close-btn">
      <i class="fas fa-times"></i>
   </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home"></i><span>Home</span></a>
      <a href="about.php"><i class="fas fa-question"></i><span>About</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap"></i><span>Courses</span></a>
      <a href="notes.php"><i class="fas fa-book"></i><span>Notes</span></a>
      <a href="quiz.php"><i class="fas fa-question-circle"></i><span>Quiz</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user"></i><span>Teachers</span></a>
      <a href="contact.php"><i class="fas fa-headset"></i><span>Contact Us</span></a>
      <a href="logout.php"><i class="fas fa-sign-out-alt"></i><span>Logout</span></a>
   </nav>

</div>

<section class="courses">

   <h1 class="heading">our courses</h1>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div class="info">
               <h3>Vishal Kumar</h3>
               <span>21-05-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div class="info">
               <h3>Ajay Kumar</h3>
               <span>21-05-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="playlist1.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div class="info">
               <h3>Aniket Kumar</h3>
               <span>21-12-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JS tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div class="info">
               <h3>Indresh Kumar</h3>
               <span>21-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div class="info">
               <h3>Hemant Kumar</h3>
               <span>21-04-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-5.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete JQuery tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div class="info">
               <h3>Sakshi Mishra</h3>
               <span>21-10-2022</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-6.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete SASS tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div class="info">
               <h3>Virendra Kumar</h3>
               <span>14-03-2024</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-7.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete PHP tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-9.jpg" alt="">
            <div class="info">
               <h3>Himanshu Pathak</h3>
               <span>13-10-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-8.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete MySQL tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-1.jpg" alt="">
            <div class="info">
               <h3>Vivek Soni</h3>
               <span>29-12-2023</span>
            </div>
         </div>
         <div class="thumb">
            <img src="images/thumb-9.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete react tutorial</h3>
         <a href="playlist.php" class="inline-btn">view playlist</a>
      </div>

   </div>

</section>














<footer class="footer">

   <span>Mr.Awanish Kumar</span>

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>