<?php include "sql/db.php"; ?>
<?php include "sql/functions.php"; ?>
<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="en-US">

<!-- Mirrored from torchtemplates.net/html/autocar/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 17:57:40 GMT -->
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
											<h2>Reserva</h2>
											<span><strong>DELCAR</strong> Rent-A-Car</span>
										</div>
										<div class="go-back col-md-4 col-sm-4">
											<p><a href="index.php">Home</a> / <em> Reserva</em></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="blog-page">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="blog-grid-post">
									<div class="row">

									 <div class="col-md-12">
                        <form class="form-horizontal" action="process_reservation.php" name="reserva" method="post" autocomplete="off" role="form" style="border: #146eb4 1px solid; padding: 15px 15px">
                          <div class="form-group">
                            <label for="marca" class="col-sm-2 control-label" style="text-align: left">Marca do Veiculo <span style="color: #CC0000">*</span></label>
                            <div class="col-sm-3">
                                <select class="form-control" id="marca" name="marca" required="required">
                                    <option disabled selected value> Selecione uma opção </option>
                                    <option>Toyota</option>
                                    <option>Ford</option>
                                    <option>VolksWagen</option>
                                    <option>Seat</option>
                                    <option>Renault</option>
                                    <option>Daihatsu</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="min" class="col-sm-2 control-label" style="text-align: left">Preço Minimo<span style="color: #CC0000">*</span></label>
                            <div class="col-sm-3">
                                <select class="form-control" id="min" name="min" required="required">
                                    <option disabled selected value> Selecione uma opção </option>
                                      <option>$4.000</option>
                                      <option>$5.000</option>
                                      <option>$6.000</option>
                                      <option>$7.000</option>
                                      <option>$8.000</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="max" class="col-sm-2 control-label" style="text-align: left">Preço Maximo <span style="color: #CC0000">*</span></label>
                            <div class="col-sm-3">
                                <select class="form-control" id="max" name="max" required="required">
                                    <option disabled selected value> Selecione uma opção </option>
                                    <option>$5.000</option>
                                    <option>$6.000</option>
                                    <option>$7.000</option>
                                    <option>$8.000</option>
                                    <option>$9.000</option>
                                    <option>$10.000</option>
                                </select>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nome" class="col-sm-2 control-label" style="text-align: left">Nome <span style="color: #CC0000">*</span></label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="name" name="name" placeholder="" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="apelido" class="col-sm-2 control-label" style="text-align: left">Apelido <span style="color: #CC0000">*</span></label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="surname" name="surname" placeholder="" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="email" class="col-sm-2 control-label" style="text-align: left">Email <span style="color: #CC0000">*</span></label>
                            <div class="col-sm-5">
                              <input type="email" class="form-control" id="email" name="email" placeholder="" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="num_doc" class="col-sm-2 control-label" style="text-align: left">Nº de documento </label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="num_doc" name="num_doc" placeholder="" >
                              <p class="help-block">Pode indicar o nº de BI ou de Passaporte</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="telefone" class="col-sm-2 control-label" style="text-align: left">Telefone <span style="color: #CC0000">*</span></label>
                            <div class="col-sm-5">
                              <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="endereco" class="col-sm-2 control-label" style="text-align: left">Endereço <span style="color: #CC0000">*</span></label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="address" name="address" placeholder="" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="pais_origem" class="col-sm-2 control-label" style="text-align: left">País de Origem<span style="color: #CC0000">*</span></label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="origin_country" name="origin_country" placeholder="" required="required" >
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="nacionalidade" class="col-sm-2 control-label" style="text-align: left">Nacionalidade<span style="color: #CC0000">*</span></label>
                            <div class="col-sm-5">
                              <input type="text" class="form-control" id="nationality" name="nationality" placeholder="" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                            <label for="info" class="col-sm-2 control-label" style="text-align: left">Informações adicionais</label>
                            <div class="col-sm-5">
                                <textarea class="form-control" id="info" name="info" rows="4" placeholder=""></textarea>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <p style="color: #CC0000">*Campos de preenchimento obrigatório.</p>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                              <button type="submit" name="submit" class="btn btn-primary">Reservar</button>
                            </div>
                          </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
										
									</div>
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
 $(document).ready(function() {
   var name = sessionStorage.getItem("brand");
   document.getElementById("marca").value = name;

   var phone = sessionStorage.getItem("minprice");
    document.getElementById("min").value = phone;

   var email = sessionStorage.getItem("maxprice");
   document.getElementById("max").value = email;


   //destroy
   sessionStorage.removeItem("clientName");
   sessionStorage.removeItem("clientPhone");
   sessionStorage.removeItem("clientRooms");
});
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

<!-- Mirrored from torchtemplates.net/html/autocar/blog-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Jul 2016 17:57:54 GMT -->
</html>