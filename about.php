
<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}

if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
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

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Mind Plus offers a wide range of services and products for beginners and professionals,helping millions of people everyday to learn and master new skills. Here we provide courses for different coding languages like HTML, CSS, Javascript as well as you get comprehensive notes for each of them. Here we have quizzes for you to check and master your skill that you will be learning. More than 10000 students are already taken our courses and got very good placemnts in renowned companies.    </p>
         <a href="courses.php" class="inline-btn">our courses</a>
         <?php if(isset($username)): ?>
            <p>Welcome, <?php echo $username; ?>!</p>
         <?php endif; ?>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+10k</h3>
            <p>online courses</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+40k</h3>
            <p>brilliant students</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+2k</h3>
            <p>expert tutors</p>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <p>job placement</p>
         </div>
      </div>

   </div>

</section> 

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>This website helped me to achieve a very good job at Amazon and I have been working here from last 1 year. I highly recommend other people to try this.</p>
         <div class="student">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Sudhanshu Dviwedi </h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Heyyyy what a nice plateform and the teachers are really osmm. I am learn till 3 hours continously without getting bored.</p>
         <div class="student">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Carolyn Sandra</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Big fan of Vishal Sir. His way of teaching the coding language is just outstanding. I wish I would have get this type of teacher in my college.</p>
         <div class="student">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Aayush</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>Thank you Mind Plus for providing such a good plateform. Now I am building my confidence and hope that will get my dream job soon.</p>
         <div class="student">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Masood Azhar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>I saw your Demo lectures. They are really nice but one request is from my side please reduce the cost of courses so that students like us can also afford. </p>
         <div class="student">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Manohar Lal</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
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