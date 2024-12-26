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
   <title>watch</title>

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

<section class="watch-video">

   <div class="video-container">
      <div class="video">
         <video src="images/vid-1.mp4" controls poster="images/post-1-1.png" id="video"></video>
      </div>
      <h3 class="title">complete HTML tutorial (part 01)</h3>
      <div class="info">
         <p class="date"><i class="fas fa-calendar"></i><span>22-10-2022</span></p>
         <p class="date"><i class="fas fa-heart"></i><span>44 likes</span></p>
      </div>
      <div class="tutor">
         <img src="images/pic-2.jpg" alt="">
         <div>
            <h3>Vishal Kumar</h3>
            <span>developer</span>
         </div>
      </div>
      <form action="" method="post" class="flex">
         <a href="playlist.php" class="inline-btn">view playlist</a>
         <button><i class="far fa-heart"></i><span>like</span></button>
      </form>
      <p class="description">
      Well organized and easy to understand Web building tutorials in HTML with lots of examples.
      </p>
   </div>

</section>

<section class="comments">

   <h1 class="heading">5 comments</h1>

   <form id="commentForm" class="add-comment">
      <h3>add comments</h3>
      <textarea name="comment_box" placeholder="enter your comment" required maxlength="1000" cols="30" rows="10"></textarea>
      <input type="submit" value="add comment" class="inline-btn" name="add_comment">
   </form>

   <h1 class="heading">user comments</h1>

   <div class="box-container">

      <div class="box">
         <div class="user">
            <img src="images/pic-1.jpg" alt="">
            <div>
               <h3>shaikh anas</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">this is a comment form shaikh anas</div>
         <form action="" class="flex-btn">
            <input type="submit" value="edit comment" name="edit_comment" class="inline-option-btn">
            <input type="submit" value="delete comment" name="delete_comment" class="inline-delete-btn">
         </form>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Sunil</h3>
               <span>22-10-2022</span>
            </div>
         </div>
         <div class="comment-box">awesome tutorial!
            keep going!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Salman</h3>
               <span>27-10-2023</span>
            </div>
         </div>
         <div class="comment-box">amazing way of teaching!
            thank you so much!
         </div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Ankit</h3>
               <span>25-10-2023</span>
            </div>
         </div>
         <div class="comment-box">loved it, thanks for the tutorial!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Dinesh</h3>
               <span>22-10-2023</span>
            </div>
         </div>
         <div class="comment-box">this is what I have been looking for! thank you so much!</div>
      </div>

      <div class="box">
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Krishna</h3>
               <span>24-10-2023</span>
            </div>
         </div>
         <div class="comment-box">thanks for the tutorial!

            how to download source code file?
         </div>
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