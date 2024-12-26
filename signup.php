<?php
$showAlert=false;
$showError=false;
if($_SERVER["REQUEST_METHOD"]=="POST")
{
include 'partials/_dbconnect.php';
$username=$_POST["username"];
$password=$_POST["Password"];
$cpassword=$_POST["cPassword"];
$exists=false;
if(($password==$cpassword) && $exists==false)
{
  $sql="INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp())";
  $result=mysqli_query($conn,$sql);
  if($result)
  {
    $showAlert=true;

  }

}
else{
    $showError="passwords do not match";
}

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp</title>

    
</head>
<body>
    <?php require 'partials/_nav.php' ?>

    <?php
    if($showAlert){
    echo ' <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>success!</strong> your account is now created and you can login
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div> ';
    }
    if($showError){
        echo ' <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>Error!</strong>'. $showError .'
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div> ';
        }
        
    ?>


     <div class="container" style="padding:2rem 0;">
     <h1 class="text-center">SignUp to our Mind Plus</h1>
     <center>
     <form action="/tutorial/signup.php" method="post">
                <div class="form-group col-md-6">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                </div>
                <div class="form-group col-md-6">
                    <label for="Password">Password</label>
                    <input type="password" class="form-control" id="Password" name="Password">
                </div>
                <div class="form-group col-md-6">
                    <label for="cPassword">Confirm Password</label>
                    <input type="password" class="form-control" id="cPassword" name="cPassword">
                    <small id="emailHelp" class="form-text text-muted">Make sure to type the same password</small>
                </div>
                <button type="submit" class="btn btn-primary col-md-6">SignUp</button>
</form>
</center>
     </div>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
</body>
</html>