<?php include "../sql/db.php" ?>
<?php include "../sql/functions.php"; ?>
<?php session_start(); ?>
<?php 
    if(isset($_POST['submit'])){
        sign_up();
}
?>


<?php 
    if(!isset($_SESSION['tipo'])){
        header("Location:index.php");
    } else if(!isset($_SESSION['tipo'])){
        if($_SESSION['tipo'] !== 'admin') {
            header("Location:index.php");
        }
    } else {
       
    }
?>

<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from mydesignsforweb.com/alpha/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2016 12:03:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="../assets/images/favicon.ico">
    <title>Delcar Rent-A-Car</title>

    <!-- Bootstrap -->
	<script src="js/pace.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/theme.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:700,400|Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
	<link href="css/theme-loading-bar.css" rel="stylesheet" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="container" id="container" style="display:none;">
		<header>
			<!-- Main comapny header -->
			<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			  <div class="container">
				<div class="navbar-header">
				  <a class="navbar-brand top-navbar-brand" href="#"><img class="img-responsive" src="../assets/images/logo.png"></a>
				</div>
				<ul class="nav navbar-nav navbar-right bigger-130 hidden-xs">
					<li><a href="#"><i class="fa fa-google"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				</ul>
			  </div>
			</nav>
		</header>
		<section id="form">
			<div class="container"> 
				<div id="loginbox" class="mainbox col-xs-12 col-sm-6 animated zoomInDown">                    
					<div class="panel white-alpha-90" >
						<div class="panel-heading">
							<div class="panel-title text-center"><h2>Sign In to <span class="text-primary">Delcar</span></h2></div>
						</div>     
						<div class="panel-body" >
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
								<form action="register.php" id="loginform" class="form-horizontal" role="form" method="post">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input id="login-username" type="text" class="form-control" name="name" value="" placeholder="name" required="required">
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username" required="required">
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="required">
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon">@</span>
									<input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email" required="required">
								</div>
								<div class="input-group col-xs-6">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<select class="form-control" name="type">
									<option disabled selected value>Tipo de Conta</option>
									<option value="admin">Admin</option>
								</select>
								</div>
								
								<div class="input-group col-xs-12 text-center login-action">
								  <div class="checkbox">
									<label>
									  <input id="login-remember" type="checkbox" name="remember" value="1" style="margin-top: 10px;"> I agree to terms and conditions &nbsp;
									  <input type="submit" name="submit">
									</label>
								  </div>
								</div>
								<div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls">
									  
									</div>
								</div>
							</form>     
						</div>                     
					</div>  
				</div>
			</div>
		</section>
		<footer>
			<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
			  <div class="container text-center">
				<div class="footer-content">
				  Already registered? <a href="index.php" class="btn btn-primary"> Sign In </a>
				</div>
			  </div><!-- /.container-fluid -->
			</nav>
		</footer>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
	<script>
		Pace.on('hide', function(){
		  $("#container").fadeIn('1000');
		  $.backstretch([
				"images/1.jpg",
				"images/2.jpg"
			], {duration: 5000, fade: 1000});
		});		
	</script>
  </body>

<!-- Mirrored from mydesignsforweb.com/alpha/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2016 12:03:56 GMT -->
</html>