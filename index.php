<?php include "sql/db.php"; ?>
<?php include "sql/functions.php"; ?>
<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from torchtemplates.net/html/autocar/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 17:54:49 GMT -->
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

				<div class="slider">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<?php bnnercontent(); ?>
							</ul>
						</div>
					</div>
				</div>

				<div class="search-section">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="search-content">
								<div class="search-heading">
									<i class="fa fa-search"></i>
									<h2>Procura</h2>
								</div>
								<div class="search-form">
									<form role="form" class="wowload fadeInRight" name="theform" id="theform">
										<div class="row">
				                            <div class="col-md-3">       
				                                <div class="input-select">
				                                    <select name="brand" id="brand">
				                                        <option value="-1">Tipo de Carro</option>
				                                          	<option>Toyota</option>
						                                    <option>Ford</option>
						                                    <option>VolksWagen</option>
						                                    <option>Seat</option>
						                                    <option>Renault</option>
						                                    <option>Daihatsu</option>
				                                    </select>
				                                </div>
				                            </div>
				                            <div class="col-md-3">       
				                                <div class="input-select">
				                                    <select name="minprice" id="minprice">
				                                        <option value="-1">Min Price</option>
				                                          <option>$4.000</option>
					                                      <option>$5.000</option>
					                                      <option>$6.000</option>
					                                      <option>$7.000</option>
					                                      <option>$8.000</option>
				                                    </select>
				                                </div>
				                            </div>
				                            <div class="col-md-3">       
				                                <div class="input-select">
				                                    <select name="maxprice" id="maxprice">
				                                        <option value="-1">Max Price</option>
				                                          	<option>$5.000</option>
						                                    <option>$6.000</option>
						                                    <option>$7.000</option>
						                                    <option>$8.000</option>
						                                    <option>$9.000</option>
						                                    <option>$10.000</option>
				                                    </select>
				                                </div>
				                            </div>
				                            <div class="col-md-3">
				                            	<div class="primary-button">
				                            		<a href="reserva.php" onclick="store()" >Procurar</a>
				                            	</div>
				                            </div>
			                            </div>
									</form>
	                            </div>
							</div>
						</div>
					</div>
				</div>

				<div class="more-about-us">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="right-content" style="text-align:justify;">
									<h4>Quem Somos, o que fazemos?</h4>
									<div class="line-dec-third"></div>
									<p style="text-align:justify;">
									<?php aboutcontent(); ?>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="recent-car">
					<div class="container">
						<div class="recent-car-content">
							<div class="row">
								<div class="col-md-12">
									<div class="section-heading">
										<i class="fa fa-car"></i>
										<h2>Veiculos Recentes</h2>
										<span>Confira as novidades</span>
									</div>
								</div>
							</div>
							<div class="row">
								<?php car();?>
							</div>
						</div>
					</div>
				</div>

				
				<div class="blury-bg">
					<div class="container">
						<?php contacto(); ?>
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
							<li><a href="lista_carro.php">Veiculo</a></li>
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

	<script>
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({
        pageLanguage: 'pt',
        includedLanguages: 'ca,da,de,el,en,es,fr,ip,ja,ko,nl,pl,pt,ru,sv,tl',
        layout: google.translate.TranslateElement.InlineLayout.SIMPLE
      }, 'google_translate_element');
    }
    </script>

    <script>
  function store(){
    if (typeof(Storage) !== "undefined") {
        sessionStorage.setItem("brand", document.theform.brand.value);
        sessionStorage.setItem("minprice", document.theform.minprice.value);
        sessionStorage.setItem("maxprice", document.theform.maxprice.value);
    } else {
        alert("Sorry! No Web Storage support..")
    }
  };
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

<!-- Mirrored from torchtemplates.net/html/autocar/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 17:55:59 GMT -->
</html>