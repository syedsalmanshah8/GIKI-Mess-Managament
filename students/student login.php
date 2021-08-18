<?php include"include/connection.php"?>
<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Student | Account Login</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
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
          <a class="navbar-brand" href="#">GIKI Mess</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Student <small>Account Login</small></h1>
          </div>
        </div>
      </div>
    </header>

    <?php
    if(isset($_POST['submit']))
    {
      $id=$_POST['id'];
      $pwd=$_POST['pwd'];

      $query = "SELECT * FROM students WHERE Regno='$id' AND Password ='$pwd'";
      $result = mysqli_query($connect,$query);


        if(mysqli_num_rows($result) == 0)
        {
          echo "Invaid id or password";
        }
        else
        {
          echo"Valid entry";
          header("Location:student.php");
        }

    }
  ?>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form method="post" class="">
                  <div class="form-group">
                    <label>Reg.no</label>
                    <input type="text" name="id" class="form-control" placeholder="Enter regno" required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pwd" class="form-control" placeholder="Password"required>
                  </div>
                  <div class="form-group">
                  <input type="submit" name="submit"  class="btn btn-primary" value="login">
                </div>
              </form>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright GIKI, &copy; 2020</p>
    </footer>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
