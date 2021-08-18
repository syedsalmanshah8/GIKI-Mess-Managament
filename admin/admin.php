<?php include"include/connection.php"?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin | Dashboard</title>
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
          <a class="navbar-brand" href="admin.php">GIKI Central Mess</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="admin.php">Home</a></li>
            
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Admin</a></li>
            <li><a href="admin_change_pwd.php">Change Password</a></li>
            <li><a href="admin logout.php">Logout <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span></a></li>
              
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
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
                    <h4> <a href="add_student.php">Add Students</a> </h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h2>
                    <h4><a href="view_students.php">View Students</a></h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></h2>
                    <h4><a href="drop_student.php">Drop Students</a></h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-stats" aria-hidden="true"></span></h2>
                    <h4><a href="student_bill.php">Modify Student Mess Bill</a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-cutlery" aria-hidden="true"></span></h2>
                    <h4><a href="mess_menu.php">Modify Mess Menu</a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-comment" aria-hidden="true"></span></h2>
                    <h4><a href="view_complaint.php">View Complaints & Suggestions </a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2> <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span> </h2>
                    <h4><a href="checked_in.php">View Checked-In Students </a></h4>
                  </div>
                </div>
                  <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></h2>
                    <h4><a href="checked_out.php">View Checked-Out Students </a></h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span></h2>
                    <h4><a href="admin_view_mess_staff.php">View Mess-Staff </a></h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span></h2>
                    <h4><a href="admin_add_mess_staff.php">Add Mess-Staff </a></h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></h2>
                    <h4><a href="admin_delete_mess_staff.php">Drop Mess-Staff </a></h4>
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
