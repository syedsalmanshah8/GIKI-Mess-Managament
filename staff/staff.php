<?php include"include/connection.php"?>
<?php session_start();?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Staff | Dashboard</title>
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
          <a class="navbar-brand" href="staff.php">GIKI Central Mess</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="staff.php">Home</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Staff</a></li>
            <li><a href="staff_change_pwd.php">Change Password</a></li>
            <li><a href="staff logout.php">Logout <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
              
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    
    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active"></li>
            
        </ol>
      </div>
    </section>
      


    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-lg-5">
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Overview</h3>
              </div>
              <div class="panel-body">

                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h2>
                    <h4><a href="staff_view_students.php">View Students</a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></h2>
                    <h4><a href="staff_view_complaints.php">View Complaints & Suggestions </a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> </h2>
                    <h4><a href="staff_view_checked_in_students.php">View Checked-In Students </a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></h2>
                    <h4><a href="staff_view_checked_out_students.php">View Checked-Out Students </a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span></h2>
                    <h4> <a href="staff_view_mess_menu.php">View Mess Menu</a> </h4>
                  </div>
                  </div>
              </div>
              </div>


          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright GIKI, &copy; 2020</p>
    </footer>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
