<?php include"include/connection.php"?>
<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Account Setting</title>
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
          <a class="navbar-brand" href="admin.php">GIKI Mess</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">

        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="text-center"> Admin <small>Account Password Renew</small></h1>
          </div>
        </div>
      </div>
    </header> 

  <?php
    if(isset($_POST['submit']))
    {
      $id=$_POST['id'];
      $pwd=$_POST['pwd'];
      $new_pwd=$_POST['new_pwd'];

      $query = " UPDATE admin SET Password='$new_pwd' WHERE AdminId='$id' AND Password='$pwd' " ;
      $result = mysqli_query($connect,$query);
 
    }
  ?>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-md-offset-4">
            <form  class="" method="post">
                  <div class="form-group">
                    <label>ID</label>
                    <input type="number" name="id" class="form-control" placeholder="Enter Id"  required>
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="pwd"  class="form-control" placeholder="Password"  required>
                  </div>
                   <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name="new_pwd"  class="form-control" placeholder="New Password"  required>
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


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
