<?php include "sql/db.php" ?>
<?php include "sql/functions.php"; ?>

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from torchtemplates.net/html/autocar/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 17:58:18 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="icon" href="assets/images/favicon.ico">

	<title>Delcar Rent-A-Car</title>


	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>

	

	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/simple-line-icons.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/css/autocar.css">

	<link rel="stylesheet" href="assets/rs-plugin/css/settings.css">

	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->

	<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-81807682-4', 'auto');
  ga('send', 'pageview');

</script>

</head>
<body>

	
	<div class="sidebar-menu-container" id="sidebar-menu-container">

		<div class="sidebar-menu-push">

			<div class="sidebar-menu-overlay"></div>

			<div class="sidebar-menu-inner">
				
				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="container clearfix">
							<div class="logo">
								<a href="index.php"><img class="img-responsive" src="assets/images/logo.png"></a>
							</div>
							<div class="header-right-toggle pull-right hidden-md hidden-lg">
								<a href="javascript:void(0)" class="side-menu-button"><i class="fa fa-bars"></i></a>
							</div>
							<nav class="main-navigation pull-right hidden-xs hidden-sm">
								<ul>
									<li><a href="index.php">Home</a></li>
									<li><a href="about.php">Serviços</a></li>
									<li><a href="lista_carro.php" >Frota</a></li>
									<li><a href="reserva.php">Reserva</a></li>
									<li><a href="contact.php">Contacto</a></li>
									<li><div id="google_translate_element" ></div></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>

				<div class="page-heading">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="heading-content-bg">
									<div class="row">
										<div class="heading-content col-md-8 col-sm-8">
											<h2>Contacto</h2>
											<span><strong>DELCAR</strong> Rent-A-Car</span>
										</div>
										<div class="go-back col-md-4 col-sm-4">
											<p><a href="index.php">Home</a> / <em> Contacto</em></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="contact-us">
					<div class="contact-map" style="height: 480px;"></div>
				</div>

				<div class="contact-content">
					<div class="container">
						<div class="row">
							<div class="col-md-8">
								<div class="send-message">
									<div class="sep-section-heading">
										<h2>Envie-nos Uma Mensagem</h2>
									</div>
									<form id="contact_form" action="enviar_mensagem.php" method="POST" autocomplete="on" enctype="multipart/form-data">
										<div class="row">
											<div class=" col-md-3 col-sm-4 col-xs-6">
												<input type="text" class="blog-search-field" name="nome" placeholder="Nome..." value="">
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<input type="text" class="blog-search-field" name="email" placeholder="Email..." value="">
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<input type="text" class="blog-search-field" name="assunto" placeholder="Assunto..." value="">
											</div>
											<div class="col-md-3 col-sm-4 col-xs-6">
												<input type="number" class="subject" name="telefone" placeholder="Telefone..." value="">
											</div>
										</div>
										<div class="row">
											<div class="col-md-12 col-sm-12">
												<textarea id="message" class="input" name="mensagem" placeholder="Messagem..."></textarea>
											</div>
										</div>
										<div class="row">
											<div class="submit-coment col-md-12">
												<div class="primary-button">
													<button type="submit" name="submit" class="btn btn-primary">Reservar</button>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-4">
								<div class="sep-section-heading">
									<h2>Contactos</h2>
								</div>
								<div class="contact-info">
									<?php carregar_contacto(); ?>
								</div>
							</div>
						</div>
					</div>
				</div>

			

				<div class="sub-footer">
					<div class="container">
						<div class="row">
							<div class="pre-header">
								<div class="col-md-6 hidden-xs">
									<div class="left-info">
										<p>Copyright 2016. Powered by: <em>Prime Consulting</em></p>
									</div>
								</div>
								<div class="col-md-6 ">
									<div class="right-info">
										<ul>
											<li>
												<a href="#"><i class="fa fa-facebook"></i></a>
												<a href="#"><i class="fa fa-twitter"></i></a>
												<a href="#"><i class="fa fa-behance"></i></a>
												<a href="#"><i class="fa fa-google"></i></a>
												<a href="#"><i class="fa fa-pinterest"></i></a>
											</li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				

				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

		<nav class="sidebar-menu slide-from-left">
			<div class="nano">
				<div class="content">
					<nav class="responsive-menu">
						<ul>
							<li><a href="index.php">Home</a></li>
							<li><a href="about.php">Serviços</a></li>
							<li><a href="lista_carro.php" >Lista de Carros</a></li>
							<li><a href="reserva.php">Reserva</a></li>
							<li><a href="contact.php">Contacto</a></li>
							<li><div id="google_translate_element" ></div></li>
						</ul>
					</nav>
				</div>
			</div>
		</nav>

	</div>


	

	<script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>

	<!-- Google Map -->
    <script src="http://maps.google.com/maps/api/js?sensor=true&key=AIzaSyA9jLsorbF1d-5bQIo2cVHC8NmJmHL1FF4"></script>
    <script src="assets/js/jquery.gmap3.min.js"></script>

	<!-- Google Map Init-->
    <script type="text/javascript">
        jQuery(function($){
            $('.contact-map').gmap3({
                marker:{
                    address: '14.911139, -23.518201' 
                },
                    map:{
                    options:{
                    zoom: 15,
                    scrollwheel: false,
                    streetViewControl : true
                    }
                }
            });
        });
    </script>

    <script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'pt',
        includedLanguages: 'ca,da,de,el,en,es,fr,ip,ja,ko,nl,pl,pt,ru,sv,tl',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      }, 'google_translate_element');
    }
    </script>
<script src="http://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
<style>
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value span{color:#000}
    div#google_translate_element div.goog-te-gadget-simple{background-color:transparent;}
    div#google_translate_element div.goog-te-gadget-simple{border-left: 0px;}
    div#google_translate_element div.goog-te-gadget-simple{border-right: 0px;}
    div#google_translate_element div.goog-te-gadget-simple{border-bottom: 0px;}
    div#google_translate_element div.goog-te-gadget-simple{border-top: 0px; display: inline;}
    div#google_translate_element div.goog-te-gadget-simple a.goog-te-menu-value{display: inline;}
   .goog-te-banner-frame.skiptranslate {display: none !important;}
    body{margin-top: 0px;}
</style>​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​​

</body>

<!-- Mirrored from torchtemplates.net/html/autocar/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 17:58:18 GMT -->
</html>