<?php include "../sql/db.php" ?>
<?php include "../sql/functions.php"; ?>

<?php session_start(); ?>



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
            <ul class="nav navbar-right top-nav">
            <a href="../index.php" style="float:left; margin-top:10px; margin-right:5px;" data-toggle="tooltip" title="Site Principal"><i class="fa fa-fw fa-play-circle-o" style="font-size:30px;" ></i></a>
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
                                <a href="all_banner.php">Actualizar Banner</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-home"></i> Sobre Nós <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="about_us.php">Actualizar Conteudo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo1"><i class="fa fa-fw fa-list-ul"></i> Serviço <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo1" class="collapse">
                            <li>
                                <a href="all_service.php">Alterar Conteudo</a>
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
                                <a href="todos_veiculos.php">Actualizar Veiculo</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo5"><i class="fa fa-fw fa-list-ul"></i> Contacto <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo5" class="collapse">
                            <li>
                                <a href="all_contact.php">Actualizar Contacto</a>
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
                            Veiculo
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
                                <i class="fa fa-file"></i> Sobre Nós
                            </li>
                            <li class="active">
                                <i class="fa fa-file"></i> Alterar Conteúdo
                            </li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
               <div class="row">

                   <div class="col-md-12">

                   <?php
                       if (isset($_GET['delete'])) {
                           # code...
                        $id = $_GET['delete'];

                        $query = "DELETE FROM veiculo WHERE id = {$id}";
                        $delete_query = mysqli_query($connection, $query);
                        if(!$delete_query){
                            die("query failed".mysqli_error($connection));
                        }else{
                            echo "<div style='text-align: center;' class='alert alert-success' role='alert'>Removido com Sucesso</div>";
                        }
                       }

                       ?>
                       <div class="table-responsive"">
                       <table class="table table-bordered table-hover">
                           <thead>
                               <tr>
                                   <th>Id</th>
                                   <th>Marca</th>
                                   <th>Modelo</th>
                                   <th>Discrição</th>
                                   <th>Preço</th>
                                   <th>Image</th>
                                </tr>
                           </thead>
                           <tbody>
                               <?php 
                                  global $connection;
                                    $sql = "SELECT * FROM veiculo";
                                    $resolt = mysqli_query($connection,$sql);
                                    if(!$resolt){
                                        die("query failed". mysqli_error($connection));
                                    }

                                    while($row = mysqli_fetch_assoc($resolt)){
                                        $db_id = $row['id'];
                                        $db_marca = $row['marca'];
                                        $db_modelo = $row['modelo'];
                                        $db_discricao = $row['discricao'];
                                        $db_preco = $row['preco'];
                                        $db_image = $row['image'];

                                        echo "<tr>";
                                        echo "<td>$db_id</td>";
                                        echo "<td>$db_marca</td>";
                                        echo "<td>$db_modelo</td>";
                                        echo "<td>$db_discricao</td>";
                                        echo "<td>$db_preco</td>";
                                        echo "<td><image width='100' src='../$db_image'></td>";
                                        echo "<td><a href='update_veiculo.php?v_id={$db_id}'>Editar</a></td>";
                                        echo "<td><a href='todos_veiculos.php?delete={$db_id}'>Delete</a></td>";
                                        echo "</tr>";
                                    }


                               ?>
                           </tbody>
                       </table>
                       </div>


                        
                            <br>
                            
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
