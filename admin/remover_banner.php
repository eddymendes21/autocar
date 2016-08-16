<?php include "../sql/db.php" ?>
<?php include "../sql/functions.php"; ?>
<?php session_start(); ?>

<?php 
    if(isset($_POST['submit'])){
        remover_banner();
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

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../assets/images/favicon.ico">

    <title>Delcar Rent-A-Car</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
       <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">DELCAR</a>
            </div>
            <!-- Top Menu Items -->
            <a href="../index.php" style="float:right; margin-top:10px; margin-right:5px;" data-toggle="tooltip" title="Site Principal"><i class="fa fa-fw fa-home" style="font-size:30px;" ></i></a>
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> <?php echo $_SESSION['username']; ?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="register.php"><i class="fa fa-fw fa-pencil-square-o"></i> Utilizador</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../sql/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                        
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo6"><i class="fa fa-fw fa-list-ul"></i> Banner <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo6" class="collapse">
                            <li>
                                <a href="inserir_banner.php">Inserir Banner</a>
                                <a href="update_banner.php">Actualizar Banner</a>
                                <a href="remover_banner.php">Remover Banner</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-home"></i> Sobre Nós <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="sobrenos.php">Actualizar Conteudo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-list-ul"></i> Serviço <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="update_servico.php">Alterar Conteudo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo2"><i class="fa fa-fw fa-car"></i> Lista de Carro <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo2" class="collapse">
                            <li>
                                <a href="inserir_veiculo.php">Inserir Veiculo</a>
                            </li>
                            <li>
                                <a href="update_veiculo.php">Actualizar Veiculo</a>
                            </li>
                            <li>
                                <a href="remover_veiculo.php">Remover Veiculo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-list-ul"></i> Contacto <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="update_contacto.php">Actualizar Contacto</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Remover Banner
                            <small>Delcar</small>
                        </h1>
                        <ol class="breadcrumb">
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="index.php">Entrar</a>
                            </li>
                            <li>
                                <i class="fa fa-dashboard"></i>  <a href="admin.php">Home</a>
                            </li>
                            <li >
                                <i class="fa fa-file"></i> Banner
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Remover Banner
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               <div class="row">
                   <div class="col-md-3 visible-lg">
                        <img style="margin-bottom:10px; height:auto;" class="img-responsive" src="car.jpg">
                   </div>

                   <div class="col-md-6">
                       <form action="remover_banner.php" method="post" >

                             <br>
                            <div class="form-group">
                                <select name="id">
                                    <?php ShowAllBanner(); ?>  
                                </select>
                            </div>
                            <br>
                            <input type="submit" name="submit">
                       </form>
                   </div>

                   <div class="col-md-3 visible-lg">
                       <img style="margin-top:10px; margin-bottom: 10px; height:auto; " class="img-responsive" src="car.jpg">
                   </div>
               </div>

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
