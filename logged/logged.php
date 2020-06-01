<?php
     require('../connect.php');
     $id= $_GET['id'];
     $place=$_GET['place'];
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <!-- Latest compiled and minified CSS bootstrap-3-->
      <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" /> -->

      <!-- Scroll bar css -->
      <link rel="stylesheet" href="https://unpkg.com/simplebar@latest/dist/simplebar.css" />
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

      <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet" />
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
      <link rel="stylesheet" href="css/icon-font.css" />
      <link rel="stylesheet" href="css/style.css" />
      <link rel="shortcut icon" type="image/png" href="img/favicon.png" />

      <title>Natours | Exciting tours for adventurous people</title>
   </head>

   <body>
      <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top fixed-top">
         <div class="container-fluid">
            <a class="navbar-brand" href="../index.php"><img src="img/logo_2.png" class="logo-image"/></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
               <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
               <ul class="navbar-nav ml-auto">
                  <li class="nav-item active">
                     <p class="nav-link" style="cursor:alias;" onclick="gotobottom()">About Us</p>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="../signup/signup.php">SignUp</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="../login/login.php">Log In</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="../help/help.html">Help</a>
                  </li>
               </ul>
            </div>
         </div>
      </nav>

      <?php
           $query="SELECT id,Name FROM location WHERE id='$id'";
                      if($run=mysqli_query($connect,$query)){
                              if ($run->num_rows > 0) {
                                                 if($place==0)
                                                 require('details.php');
                                                 if($place>=1)
                                                 require('room-info.php');
                                 } else {
    $error='<font color ="red" >'.'*Enter right district'.'</font>';
}
}

           if($a===1){

           }
      ?>

      <footer>
         <div class="container-fluid padding">
            <div class="row text-center">
               <div class="col-12">
                  <h1>Contacts</h1>
                  <hr class="light" />
                  <p>977-9841220293</p>
                  <p>email@myemail.com</p>
                  <p>Kathmandu, Nepal</p>
               </div>
               <div class="col-12">
                  <hr class="light" />
                  <h5>&copy; sth.tsm.com</h5>
               </div>
            </div>
         </div>
      </footer>

      <!-- ========================================================================================================= -->
      <!-- ++++++++++++++++++++++++++++++++++End+++++++++++++++++++++++++++++- -->

      <!-- jQuery library -->
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

      <!-- Popper JS -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

      <!-- Latest compiled JavaScript -->
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- Scroll bar Script -->
      <script src="https://unpkg.com/simplebar@latest/dist/simplebar.min.js"></script>

      <!-- For date and time picker -->
      <!-- <script type="text/javascript">
         $(function() {
            $("#datetimepicker6").datetimepicker();
            $("#datetimepicker7").datetimepicker({
               useCurrent: false //Important! See issue #1075
            });
            $("#datetimepicker6").on("dp.change", function(e) {
               $("#datetimepicker7")
                  .data("DateTimePicker")
                  .minDate(e.date);
            });
            $("#datetimepicker7").on("dp.change", function(e) {
               $("#datetimepicker6")
                  .data("DateTimePicker")
                  .maxDate(e.date);
            });
         });
      </script> -->

      <!-- jQuery library -->
      <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> -->

      <!-- Latest compiled JavaScript -->
      <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script> -->
   </body>
</html>
