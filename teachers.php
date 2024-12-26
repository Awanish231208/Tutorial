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
   <title>teachers</title>

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

<section class="teachers">

   <h1 class="heading">expert teachers</h1>

   <form action="" method="post" class="search-tutor">
      <input type="text" name="search_box" placeholder="search tutors..." required maxlength="100">
      <button type="submit" class="fas fa-search" name="search_tutor"></button>
   </form>

   <div class="box-container">

      <div class="box">
         <div class="tutor">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Vishal Kumar</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>6</span></p>
         <p>total videos : <span>10</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Ajay Kumar</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>15</span></p>
         <p>total likes : <span>1008</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Aniket Kumar</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>3</span></p>
         <p>total videos : <span>18</span></p>
         <p>total likes : <span>1108</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Indresh Kumar</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>5</span></p>
         <p>total videos : <span>12</span></p>
         <p>total likes : <span>1280</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Hemant Kumar</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>2</span></p>
         <p>total videos : <span>15</span></p>
         <p>total likes : <span>1208</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Sakshi Mishra</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>17</span></p>
         <p>total likes : <span>1200</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
      </div>

      <div class="box">
         <div class="tutor">
            <img src="images/pic-8.jpg" alt="">
            <div>
               <h3>Virendra Kumar</h3>
               <span>developer</span>
            </div>
         </div>
         <p>total playlists : <span>4</span></p>
         <p>total videos : <span>16</span></p>
         <p>total likes : <span>1120</span></p>
         <a href="teacher_profile.php" class="inline-btn">view profile</a>
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