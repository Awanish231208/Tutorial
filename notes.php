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
   <title>notes</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .d1 {
   display: flex;
   flex-wrap: wrap;
   gap: 20px; /* Increased gap between items */
   padding: 20px;
   background-color: #f0f0f0;
   border: 1px solid #ccc;
   font-size: medium;
}

.d2, .d3, .d4, .d5, .d6, .d7, .d8, .d9 {
   width: 350px; /* Set a fixed width */
   height: 150px; /* Set a fixed height */
   padding: 20px; /* Increased padding */
   border-radius: 8px; /* More rounded corners */
   text-align: center;
   font-family: Arial, sans-serif;
   display: flex;
   align-items: center; /* Center text vertically */
   justify-content: center; /* Center text horizontally */
   transition: transform 0.3s, background-color 0.3s; /* Smooth transition */
   font-size: medium;
   font-weight: bolder;
   box-sizing: border-box; /* Ensure padding and border are included in width and height */
}

.d2 {
   background-color: #ff9999;
   color: white;
}

.d3 {
   background-color: #99ccff;
   color: white;
}

.d4 {
   background-color: #99ff99;
   color: white;
}

.d5 {
   background-color: #ffcc99;
   color: white;
}

.d6 {
   background-color: #ff99ff;
   color: white;
}

.d7 {
   background-color: #cc99ff;
   color: white;
}

.d8 {
   background-color: #99ffff;
   color: white;
}

.d9 {
   background-color: #ffff99;
   color: white;
}

.d2:hover {
   background-color: #ff6666;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

.d3:hover {
   background-color: #6699ff;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

.d4:hover {
   background-color: #66ff66;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

.d5:hover {
   background-color: #ff9966;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

.d6:hover {
   background-color: #ff66ff;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

.d7:hover {
   background-color: #9966ff;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

.d8:hover {
   background-color: #66ffff;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

.d9:hover {
   background-color: #ffff66;
   transform: scale(1.1); /* Slightly enlarge on hover */
}

   </style>

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
<div class="d1">
    <div class="d2"><a href="Notes/html.pdf">HTML</a></div>
    <div class="d3"><a href="Notes/css.pdf">Css</a></div>
    <div class="d4"><a href="Notes/javascript.pdf">JavaScript</a></div>
    <div class="d5"><a href="Notes/php.pdf">PHP</a></div>
    <div class="d6"><a href="Notes/jquery.pdf">JQuery</a></div>
    <div class="d7"><a href="#">Bootstrap</a></div>
    <div class="d8"><a href="Notes/mysql.pdf">Mysql</a></div>
    <div class="d9"><a href="Notes/react.pdf">React</a></div>

</div>

<footer class="footer">

   <span>Mr.Awanish Kumar</span>

</footer>

<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>