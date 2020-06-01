<?php
      require('../connect.php');
      require('../core.php');
      $error1=NULL;
      $error2=NULL;
      $error3=NULL;
      $error4=NULL;
      $error5=NULL;
      $true1=0;
      $true2=0;
      $true3=0;
      $true4=0;
      $true5=0;
      if(isset($_GET['emailid'])){
           if(empty($_GET['emailid'])){
                $error5="<br>* Enter Your Email Id";
           }
           else{
                $true1=1;
           }
      }
      if(isset($_GET['fullname'])){
           if(empty($_GET['fullname'])){
                $error1="<br>* Enter Your Name";
           }
           else{
                $true2=1;
           }
      }
      if(isset($_GET['password'])){
           if(empty($_GET['password'])){
                $error2="<br>* Enter Your Password";
           }
           else{
                $true3=1;
           }
      }
      if(isset($_GET['rpassword'])){
           if(!empty($_GET['password'])&($_GET['password']!=$_GET['rpassword'])){
                $error3="<br>* Retyped Password doesn't Match";
           }
           else{
                $true4=1;
           }
      }
      if(isset($_GET['license'])){
               if($_GET['license']==='ticked'){
                    $true5=1;
               }
      }else
      {
                         $error4= "<br>* Need to agree to terms and conditions";
      }
      if($true1===1&$true2===1&$true3===1&$true4===1&$true5===1){
        $name = $_GET['fullname'];
      $password = md5($_GET['password']);
      $email = $_GET['emailid'];
      $exist=0;
         $query="SELECT id,Name,EmailId FROM user WHERE Emailid='$email'";
                      if($run=mysqli_query($connect,$query)){
                              if (mysqli_num_rows($run) >= 1) {
                                                 $exist=1;
                                 }
                      }
      if($exist===0){
      $query="INSERT INTO `user` (`id`, `Name`, `Password`, `EmailId`) VALUES (NULL,'$name' , '$password', '$email')";
                      if($run=mysqli_query($connect,$query)){
                          header('Location: ../logged/logged.php');
                      } else {
    $error='<font color ="red" >'.'*Enter right district'.'</font>';
                      }
}else{
                            $error4='Already exists';
                      }
}


      function test_input($data) {
               $data = trim($data);
               $data = stripslashes($data);
               $data = htmlspecialchars($data);
               return $data;
      }
        $connect->close();
?>
<html lang="en">
<head>
    <meta charset="ufc-8">
    <meta name="viewport" content="width=device-width, intitial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="css/signupcss.css" type="text/css"rel="stylesheet">
    <title>Sign up to give flavor to your journey with Nepalese tradition |Sth.Tsm</title>
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky top">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/hackathon_project/"><img src="src/logo.png" style="height: 4%; width: 21%;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="sign_up/index.html">SignUp</a>
            </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://localhost/hackathon_project/login/login.php">Log in</a>
                </li>
                <li class="nav-item">
                        <a class="nav-link" href="http://localhost/hackathon_project/help/help.php">Help</a>
                </li>
            </ul>
            </div></div></nav>
   <form style="float: right;" action="<?php echo $currentFile;?>" method="GET" >
    <h1> <b style="color: snow;"> Sign Up</b></h1>
    <br>
       <div id="form1">
       <div class="fr1">
           <label for="fullname">Full Name</label><br>
       <input type="text" name="fullname" id="ro" placeholder="Name.. " autocomplete="off"><?php echo '<font color="red">'.$error1.'</font>';?><br>
       <label for="emailid">Email</label><br>
       <input type="email" name="emailid" id="ro" placeholder="Email Address" required autocomplete="off"><?php echo '<font color="red">'.$error5.'</font>';?><br>
       <label for="password">Password</label><br>
       <input type="password" name="password" id="ro" placeholder="Password" autocomplete="off"><?php echo '<font color="red">'.$error2.'</font>';?><br>
       <label for="rpassword">Repeat Password</label><br>
       <input type="password" name="rpassword" id="ro" placeholder="Password" autocomplete="off"><?php echo '<font color="red">'.$error3.'</font>';?><br></div>
       <p id="fbsign2" style="color: snow;">  Sign up using</p>
       <div class="col-12 social padding">
       <a href="#"><i class="fab fa-facebook"></i></a>
       <a href="#"><i class="fab fa-google-plus-g"></i></a>
    </div>
       <br> <br>
       <div class="cb">
       <input type="checkbox" name="license" value="ticked"> I agree to the <a href="src/terms.php"><b> Terms of Use.</b></a><?php echo '<font color="red">'.$error4.'</font>';?></div>
       <br>
       <input  type="submit" name="submit" id="submit" value="Join Up"> <div class="sign"><a href="http://localhost/hackathon_project/login/login.php">Sign in -></a></div>
       <br>

   </form>
</body>
</html>
