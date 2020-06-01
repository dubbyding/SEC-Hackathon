<?php
  require('../connect.php');
  require('../core.php');
  $error='';
  if(isset($_POST['Email'])&isset($_POST['password'])){
    if(!empty($_POST['Email'])&!empty($_POST['password'])){
      $email=$_POST['Email'];
      $password=md5($_POST['password']);
  $query="SELECT Password,EmailId FROM user WHERE Password='$password' AND Emailid='$email'";
                 if($run=mysqli_query($connect,$query)){
                              if (mysqli_num_rows($run) >= 1) {
                                                          header('Location: ../logged/logged.php?id=28&place=0');
                                 }
                                 else{
                                      $error='<br><font color=#FF0000>* Wrong Email/Password</font><br>';
                                 }

                      }
    }else{
          $error="<br><font color=#FF0000>* Enter Email/Password</font><br>";
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
        <head>
                <meta charset="ufc-8">
                <meta name="viewport" content="width=device-width, intitial-scale=1">
                <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
                <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
                <link href="logincss.css" rel="stylesheet">
                <title>Login to find your self a lovely stay | Sth.Tsm</title>
        </head>
        <body>
                <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky top">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="http://localhost/hackathon_project/"><img src="img/logo_2.png" class="logo-image"></a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarResponsive">
                                <ul class="navbar-nav ml-auto">
                                    <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/hackathon_project/sign_up/signup.php">SignUp</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link active" href="#">Log In</a>
                                    </li>
                                    <li class="nav-item">
                                            <a class="nav-link" href="http://localhost/hackathon_project/help/help.php">Help</a>
                                    </li>
                                </ul>
                            </div> 
                        </div>  
                </nav>
                <div class="centered">
                        <form class="container" name="myform" action="login.php" method="POST">
                        <h1 style="text-align: center; color:white;">Login</h1> <?php echo $error;?>
                          <label for="name">Username</label><br>
                           <input type="text" name="Email" id="name" style="width: 100%;padding: 15px;margin: 5px 0 22px 0;border: none;background: #f1f1f1;"  placeholder="Email" required><br>
                            <label for="password"><b>Password</b></label>
                          <input id="password" type="password" name="password" placeholder="Your Password "   required>
                          <p style="color: black;"><b style="color: snow;">Login With</b></p>
                          <div class="col-12 social padding">
                                <a href="#"><i class="fab fa-facebook"></i></a>
                                <a href="#"><i class="fab fa-google-plus-g"></i></a>
                            </div> 
                            <br> 
                          <input type="submit"  value="Login">
                        
                        </form>
                </div>
        </body>
</html>