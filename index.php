<?php
        require('core.php');
        require ('connect.php');
        $time=time();
        $year=date('Y m d',$time);
        $error=NULL;
        if(isset($_GET['location'])){
          $name=$_GET['location'];
          if(!empty($_GET['location'])){

                      $query="SELECT id,Name FROM location WHERE Name='$name'";
                      if($run=mysqli_query($connect,$query)){
                              if ($run->num_rows > 0) {
                                 while($row = $run->fetch_assoc()) {
                                            $id=$row["id"];
                                            header('Location: logged/logged.php?id='.$id.'&place=0');
                                 }
                                 } else {
    $error='<font color ="red" >'.'*Enter right district'.'</font>';
}
}

          }

        }
        if(isset($_GET['checkin'])&isset($_GET['checkout'])){
             $file=fopen('check.txt','w');
             $checkin= $_GET['checkin'];
             $checkout=$_GET['checkout'];
             fwrite($file,$id."\n".$checkin."\n".$checkout);
        }
        $connect->close();

?>
<!Doctype html>
<html lang="en">
    <head>
        <meta charset="ufc-8">
        <meta name="viewport" content="width=device-width, intitial-scale=1">
        <script>
        function gotobottom()
        {
            window.scrollTo(0,document.body.scrollHeight);
        }
        </script>
        <title>Sth.Tsm |Feel Like Home By Living in Home </title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
        <link href="style.css" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#"><img src="img/logo_2.png" class="logo-image"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                       <p class="nav-link" style="cursor:alias;" onclick="gotobottom()"> About Us</p>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="sign_up/signup.php">SignUp</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="login/login.php">Log In</a>
                    </li>
                    <li class="nav-item">
                            <a class="nav-link" href="help/help.php">Help</a>
                    </li>
                </ul>
            </div> 
        </div>  
        </nav>
        <div id="slider" class="carousel slide" data-ride="carousel" style="width:100%; height: 110%;">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/Nepal-Bhaktapur-copy-e15409672491912.jpg">
                        <div class="centered" >
                            <form class="container" action="<?php echo $currentFile?>" method="GET">
                                <h1>Select Location</h1>
                                <lable for="location"><b>Location(District)</b></lable><br>
                                <input type="text" placeholder="Enter Location:District" name="location" autocomplete="off" required><?php echo $error;?><br>
                                <lable for="checkin"><b>Check In</b></lable><br>
                                <input type="date" placeholder="YYYY/MM/DD" name="checkin" min="<?php echo $date;?>"><br>
                                <lable for="checkout"><b>Check Out</b></lable><br>
                                <input type="date" placeholder="YYYY/MM/DD" name="checkout" min="<?php echo $date+5;?>"><br>
                                <button type="submit" class="btn">Submit</button>
                        </form>
                        </div>
                    </div>
                </div>
        </div>
        <div class="container1">
                <div class="text-block"> 
                  <h1 class="h1">Want to have a wonderful Stay<br> With real peoples and loving hearts ? </h1> <br> <br>
                </div>
              </div>
        <div class="container-fluid padding">
                <div class="row text-center padding">
                    <div class="col-12 connect">
                        <br>
                        <h2 style="margin-top: 1%;font-style: oblique;font-family: cursive;"> <b> Connect with us.</b></h2>
                    </div>
                    <div class="col-12 social padding">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                    </div> 
                </div>
            </div>
       <footer>
           <div class="container-fluid padding">
               <div class="row text-center">
                   <div class="col-12">
                       <h1>Contacts</h1>
                       <hr class="light">
                       <p>977-9841220293</p>
                       <p>email@myemail.com</p>
                       <p>Kathmandu, Nepal</p>
                   </div>
                   <div class="col-12">
                       <hr class="light">
                       <h5>&copy; sth.tsm.com</h5>
                   </div>
               </div>
           </div>
       </footer>
    </body>
</html>