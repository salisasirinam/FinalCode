<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>&forall; Cake Shop</title>
	</head>
	<body>
		<nav class="navbar navbar-fixed-top navbar-inverse">
	        <div class="container-fluid">
	          <!-- Brand and toggle get grouped for better mobile display -->
	          <div class="navbar-header">
	            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	              <span class="sr-only">Toggle navigation</span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	              <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand name" href="#"><span style="color: white">Cake Shop</span></a>
	          </div>

	          <!-- Collect the nav links, forms, and other content for toggling -->
	          <!-- /.navbar-collapse -->
	        </div><!-- /.container-fluid -->
	    </nav>

		<div class="container mainContainer">
			<center>
				<img src="images/logo.jpg" class="img-circle" width="350" height="350" style="margin-top: 20px" />
		    	<h1>Login</h1>
		    </center>
		    <div class="row">
		    	<div class="col-md-3"></div>
			    <div class="col-md-6">
			    <?php 
			      session_start();
			      if(!empty($_SESSION['errMsg'])){
		  			echo "<div class='alert alert-danger'>".$_SESSION['errMsg']."</div>";
		  			session_unset();
		  		  }
		  		?>
			    </div>
			</div>

		    <div class="row">
		      <div class="col-sm-4 col-sm-offset-4">

		        <form method="POST" action="loginAction.php"> 
		          <div class="form-group"><input type="text" id="username" name="username" class="form-control" placeholder="Username"></div>
		          <div class="form-group"><input type="password" id="password" name="password" class="form-control" placeholder="Password"></div>
		          <div class="form-group">
		          	
		          		<button type="submit" class="col-sm-12 btn btn-primary">Login</button>
		       
		          	
		          </div>
		        </form>

		      </div>
		    </div>
		    <br>
		    <br>
		    
		    <hr>

		    <footer> <center>9PM3BtoGS &copy; Cake Shop</center></footer>
	  	</div>
		<!-- Javascript -->
		<script src="https://code.jquery.com/jquery-3.2.1.min.js"   integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="   crossorigin="anonymous"></script>

		<script src="https://use.fontawesome.com/87d2feb52a.js"></script>

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

		<!-- Latest compiled and minified JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<script src="js/owner.js" type="text/Javascript"></script>

		<!-- CSS -->
		<link rel="stylesheet" href="css/inventory.css">
	</body>
</html>