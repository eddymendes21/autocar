<?php include "../sql/db.php" ?>
<?php include "../sql/functions.php"; ?>
<?php session_start(); ?>
<?php 
    if(isset($_POST['submit'])){
        sign_in();
}
?>
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from mydesignsforweb.com/alpha/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2016 12:03:22 GMT -->
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
				  <a class="navbar-brand top-navbar-brand" href="#"><img class="img-responsive" src="images/logo.png"></a>
				</div>
				<ul class="nav navbar-nav navbar-right bigger-130 hidden-xs">
					<li><a href="#"><i class="fa fa-google"></i></a></li>
					<li><a href="#"><i class="fa fa-facebook"></i></a></li>
					<li><a href="admin.php"><i class="fa fa-twitter"></i></a></li>
				</ul>
			  </div>
			</nav>
		</header>
		<section id="form" class="animated fadeInDown">
			<div class="container">    
				<div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
					<div class="panel white-alpha-90" >
						<div class="panel-heading">
							<div class="panel-title text-center"><h2>Sign In to <span class="text-primary">Delcar</span></h2></div>
						</div>     
						<div class="panel-body" >
							<div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
								<form action="index.php" id="loginform" class="form-horizontal" role="form" method="POST">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input id="login-username" type="text" class="form-control" name="username" value="" placeholder="username or email" required="required">                                        
								</div>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input id="login-password" type="password" class="form-control" name="password" placeholder="password" required="required">
								</div>
								<div class="input-group col-xs-12 text-center login-action">
								  <div class="checkbox">
									<label>
									  <input id="login-remember" type="checkbox" name="remember" value="1" style="margin-top: 10px;"> Remember me &nbsp;
									  <input type="submit" name="submit">
									</label>
								  </div>
								</div>
								<div style="margin-top:10px" class="form-group">
									<div class="col-sm-12 controls"></div>
								</div>
							</form>     
						</div>                     
					</div>  
				</div>
			</div>
		</section>
		<footer>
			
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
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-53918379-1', 'auto');
	  ga('send', 'pageview');

	</script>
  </body>

<!-- Mirrored from mydesignsforweb.com/alpha/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2016 12:03:34 GMT -->
</html>