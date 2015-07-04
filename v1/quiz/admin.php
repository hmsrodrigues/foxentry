<?php
error_reporting(E_ERROR);
include('defined.php');
include('../predef/verify.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>DigiBoard | Admin</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.1.0/css/font-awesome.css">
<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
<div id="navbar-wrapper">
  <div class="row">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="fa fa-user fa-2x"></span>
        </button>
        <a class="navbar-brand" href="#">Foxentry</a>
      </div>

      <div class="collapse navbar-collapse" id="collapse">
        <ul class="nav navbar-nav navbar-right">
          <li>
            <a href="#"><?php echo $FirstName." ".$LastName; ?></a>
          </li>
          <li>
            <a href="logout.php"><span class="fa fa-power-off"></span>&nbsp;<p class="hidden-lg hiddeb-md hidden-sm">Log out</p></a>
          </li>
        </ul>
      </div><!-- /.navbar-collapse --> 
    </nav>
  </div>
</div>
<div id="results-wrapper">
  <div class="container">
    <div class="row">
      <div class="main-content">
        <div class="panel">
          <div class="panel-body">
          <h3>List of Active Quizzes</h3>
          <hr>
          <h4>Results</h4>
            <form action="scores.php" method="post" target="new">
                <?php echo showquizzes(); ?>
            </form>
          </div> <!-- end of panel-body -->
        </div> <!-- end of panel -->
      </div><!--  end of main content -->
    </div><!--  end of row -->
  </div><!--  end of container -->
</div> <!-- end of quiz wrapper -->
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>  
<script type="text/javascript" src="js/main.js"></script>
</body>
</html>