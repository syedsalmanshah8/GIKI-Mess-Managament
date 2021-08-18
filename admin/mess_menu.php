<?php include"include/connection.php"?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Mess Menu</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
      
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <script  src="ContactFrom\vendor\jquery\jquery-3.2.1.min.js"></script>
    <script src="js\bootstable.min.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="admin.php">GIKI Central Mess</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php">Home</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Admin</a></li>
            <li><a href="admin logout.php">Logout <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
<?php
   if(isset($_POST['submit']))
   {
    $day=$_POST['day'];
    $break=$_POST['break'];
    $lunch=$_POST['lunch'];
    $din=$_POST['din'];
  
    $query= "INSERT INTO mess_menu(Day,Breakfast,Lunch,Dinner) VALUES ('$day','$break','$lunch','$din')";
    $result=mysqli_query($connect,$query);
    echo"entry added";

   }
?>


          <div class="container-contact100">
    <div class="wrap-contact100">
      <form class="contact100-form validate-form" method="post">
        <span class="contact100-form-title">
         Modify Mess Menu
        </span>

        <div class="wrap-input100 validate-input" >
          <input class="input100"  type="text" name="day" placeholder="Day" required>
          <label class="label-input100" >
            <span class="lnr lnr-user"></span>
          </label>
        </div>

                
                <div class="wrap-input100 validate-input" >
          <input class="input100" type="text" name="break" placeholder="Breakfast"  required>
          <label class="label-input100" >
            <span class="lnr lnr-user"></span>
          </label>
        </div>
                
                <div class="wrap-input100 validate-input" >
          <input class="input100"  type="text" name="lunch" placeholder="Lunch"  required>
          <label class="label-input100" >
            <span class="lnr lnr-user"></span>
          </label>
        </div>
                
                <div class="wrap-input100 validate-input" >
          <input class="input100"  type="text" name="din" placeholder="Dinner" required>
          <label class="label-input100">
            <span class="lnr lnr-user"></span>
          </label>
        </div>
         <div class="container-contact100-form-btn">
          <div class="wrap-contact100-form-btn">
            <div class="contact100-form-bgbtn"></div>
            <button class="contact100-form-btn" name="submit">
              Submit
            </button>
          </div>
        </div>
      </form>
    </div>
  </div>



      <footer id="footer">
      <p>Copyright GIKI, &copy; 2020</p>
        </footer>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
