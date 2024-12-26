<?php
session_start();
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true)
{
    header("location: login.php");
    exit;
}



?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- CSS -->
    <link rel="stylesheet" href="Styles.css">    
    <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

    <title>Quiz</title>
    <style>
        
          #start-button, #restart {
    font-size: 1.5em;
    padding: 1em 1em;
    border-radius: 0.2em;
    box-shadow: 0 20px 30px rgba(0, 0, 0, 0.4);
  }
  #restart {
    margin-top: 0.9em;
  }
  #display-container {
    background-color: #ffffff;
    padding: 3.1em 1.8em;
    width: 100%;
    max-width: 70%;
    height: 70%;
    font-size: 1.5rem;
    margin: 0 auto;
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 60%;
    border-radius: 0.6em;
  }
  .container-box-quizz {
            max-width: 1000px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            padding: 10px;
            color:white;
            margin: 0.5em;
        }
        h2
        {
            padding: 10px;
            color:white;
        }
        
       
    </style>
</head>

<body>
    <div class="start-screen">
        <button id="start-button">Start</button>
    </div>
    <div id="display-container">
        <div class="header">
            <div class="number-of-count">
                <span class="number-of-question">1 of 3 questions</span>
            </div>
            <div class="timer-div">
                <img src="https://uxwing.com/wp-content/themes/uxwing/download/time-and-date/stopwatch-icon.png"
                    width="20px" />
                <span class="time-left">10s</span>
            </div>
        </div>
        <div id="container">
            <!-- questions and options will be displayed here -->
        </div>
        <button id="next-button">Next</button>
    </div>
    <div class="score-container hide">
        <div id="user-score">Demo Score</div>
        <button id="restart">Restart</button>
    </div>

    <header class="header">
   
        <section class="flex">
     
           <a href="home.php" class="logo">Mind Plus</a>
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
     <div class="container-box-quizz">
        <h1>Quiz Instructions</h1>
                <ol>
                    <h2><li>The total duration of the exam is 1 min 40 sec.</li></h2>
                    <h2><li>The clock will start ticking as soon as you begin the exam.</li></h2>
                    <h2><li>Each correct answer carries [1] marks.There is no negative marking for incorrect answers.</li></h2>
                    <h2><li>the Question will be MCQ type only which have 4 option and only one option is correct.</li></h2>
                </ol>
    </div>

    <script src="Scripts.js"></script>
     
     <!-- custom js file link  -->
     <script src="js/script.js"></script>
</body>

</html>