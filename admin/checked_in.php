<?php include"include/connection.php"?>
<?php session_start();?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin| Checked-In Students </title>
	<meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="ContactFrom/images/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="ContactFrom/css/util.css">
	<link rel="stylesheet" type="text/css" href="ContactFrom/css/main.css">
<!--===============================================================================================-->
     <!-- For NAVbar -->
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
    
    
    <div class="card">
        <div class="card-body">

            <span class="contact100-form-title">
					Checked-In Students
            </span>
            
                <table class="table table-bordered table-dark">
                      <thead>
                        <tr>
                          <th scope="col">Reg No</th>
                          <th scope="col">Name</th>
                          <th scope="col">Hostel</th>
                          <th scope="col">Room</th>
                        </tr>
                      </thead>
                      <tbody>
     <?php
    $sqlget  = "SELECT * FROM students WHERE Status='In'";
    $sqldata = mysqli_query($connect,$sqlget);

    while($row = mysqli_fetch_array($sqldata))
    {
      $dis_id = $row['Regno'];
      $dis_name = $row['Name'];
      $dis_hostel = $row['Hostel'];
      $dis_room = $row['Room_Number'];
      echo "<tr>";
      echo "<td>$dis_id</td>";
      echo "<td>$dis_name</td>";
      echo "<td>$dis_hostel</td>";
      echo "<td>$dis_room</td>";
    }
     ?>
         </tbody>
        </table>
        
        </div>
        
    </div>
    

    <footer id="footer">
      <p>Copyright GIKI, &copy; 2020</p>
    </footer>

	

<!--===============================================================================================-->
	<script src="ContactFrom/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/bootstrap/js/popper.js"></script>
	<script src="ContactFrom/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="ContactFrom/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

</body>
</html>
