<?php include "db.php" ?>

<?php


//------------------------------------------------------Function Save IMG--------------------------------------------------------------------
function actualização_com_sucesso(){
    /*echo "<script language='javascript'>";
    echo "alert('Guardado com Sucesso')";
    echo "</script>";*/

    echo "<div style='text-align: center;' class='alert alert-success' role='alert'>Guardado com Sucesso</div>";
}

function removido_com_sucesso(){
    echo "<div style='text-align: center;' class='alert alert-success' role='alert'>Removido com Sucesso</div>";
}

function image(){

    $image_name = $_FILES["fileToUpload"]["name"];
    $image_type = $_FILES["fileToUpload"]["type"];
    $image_size = $_FILES["fileToUpload"]["size"];
    $image_tmp_name = $_FILES["fileToUpload"]["tmp_name"];

        $target_dir = "foto/";
        $target_file = $target_dir . basename($image_name);
        $uploadOk = 1;
        $imageFileType = pathinfo("../".$target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($image_tmp_name);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>File is not an image.</div>";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        // Check file size
        if ($image_size > 1000000) {
            echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>Sorry, your file is too large.</div>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($image_tmp_name, "../".$target_file)) {
                echo "<div style='text-align: center;' class='alert alert-success' role='alert'>Guardado com Sucesso! The file ". basename( $image_name). " has been uploaded.</div>";
                return $target_file;
            } else {
                echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>Sorry, there was an error uploading your file.</div>";
                return;
            }
        }

}


function imageBanner(){

    $image_name = $_FILES["fileToUpload"]["name"];
    $image_type = $_FILES["fileToUpload"]["type"];
    $image_size = $_FILES["fileToUpload"]["size"];
    $image_tmp_name = $_FILES["fileToUpload"]["tmp_name"];

        $target_dir = "foto/banner/";
        $target_file = $target_dir . basename($image_name);
        $uploadOk = 1;
        $imageFileType = pathinfo("../".$target_file,PATHINFO_EXTENSION);
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($image_tmp_name);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>File is not an image.</div>";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        // Check file size
        if ($image_size > 1000000) {
            echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>Sorry, your file is too large.</div>";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>Sorry, only JPG, JPEG, PNG & GIF files are allowed.</div>";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($image_tmp_name, "../".$target_file)) {
                echo "<div style='text-align: center;' class='alert alert-success' role='alert'>Guardado com Sucesso! The file ". basename( $image_name). " has been uploaded.</div>";
                return $target_file;
            } else {
                echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>Sorry, there was an error uploading your file.</div>";
                return;
            }
        }

}

//-------------------------------------------------------Start About--------------------------------------------------------------------------


function aboutcontent(){
	global $connection;
	$sqlget = "SELECT * FROM about";
	$sql = mysqli_query($connection,$sqlget);
	if(!$sql){
		die("query failed". mysqli_error($connection));
	}

	while($row = mysqli_fetch_assoc($sql)){
		$about = $row['sobre'];
		echo "<p>$about</p>";
	}
}

function update_about(){

	global $connection;
	$mensagem = $_POST['message'];
	$id = $_POST['id'];
        

        $query = "UPDATE about SET sobre ='$mensagem' WHERE id = $id ";

            $result = mysqli_query($connection, $query);
            if(!$result){
                die("query failed".mysqli_error($connection));
    } else{
        actualização_com_sucesso();
        exit(header("Location: ../admin/about_us.php"));
        
    }

 
}


//--------------------------------------------------------Fim About------------------------------------------------------------------------

//--------------------------------------------------------Service Start--------------------------------------------------------------------



function update_servico(){

    global $connection;
    $nome = $_POST['nome'];
    $mess = $_POST['mensagem'];
    $id = $_POST['id'];
        
        $query = "UPDATE servico SET nome ='$nome', conteudo = '$mess' WHERE id = $id ";

            $result = mysqli_query($connection, $query);
            if(!$result){
                die("query failed".mysqli_error($connection));
    } else{
        actualização_com_sucesso();
        exit(header("Location: ../admin/all_service.php"));
    }
}

function servicecontent($id){
    global $connection;
    $sqlget = "SELECT * FROM servico";
    $sql = mysqli_query($connection,$sqlget);
    if(!$sql){
        die("query failed". mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($sql)){
        $id_db = $row['id'];
        if ($id_db==$id) {
            $nome = $row['nome'];
            $conteudo = $row['conteudo'];
            echo "<h6>$nome</h6>
            <div class='line-dec-second'></div>
            <p>$conteudo</p>";
            
        }
    }
}


//----------------------------------------------------------------------Service End----------------------------------------------------------

//----------------------------------------------------------------------Veiculo Start--------------------------------------------------------


function servicecontentt(){
    global $connection;
    $per_page = 6; 

    if(isset($_GET['page'])){

       

    $page = $_GET['page'];
     }else{
        $page = "";
     }

     if($page =="" || $page== 1){
        $page_1 = 0;
     }else{
        $page_1 =($page * $per_page) - $per_page;
     }


    $sqlget = "SELECT * FROM veiculo LIMIT $page_1, $per_page ";
    $sql = mysqli_query($connection,$sqlget);
    if(!$sql){
        die("query failed". mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($sql)){
        $id_db = $row['id'];
        $marca = $row['marca'];
        $modelo = $row['modelo'];
        $discricao = $row['discricao'];
        $image = $row['image'];
        $preco = $row['preco'];
        echo "
            <div class='col-md-4'>
                <div class='car-item' >
                <div class='entry'>
                    <div class='thumb-content'>
                        <div class='car-banner-rent'>
                            <p>Aluguer</p>
                        </div>
                        <img style='height:215px;' data-fullwidthcentering='on' src='$image' alt=''>
                    </div>
                    
                    <div class='down-content entry_title'>
                        <h4>$marca <span>$modelo</span></h4>
                        <div class='line-dec'></div>
                        <p>$discricao</p>
                    </div>
                    <div class='entry_paragraph'>
                    <p>Preço €$preco</p>
                  </div>
                    </div>
                </div>
            </div> 

            ";
            
    }


}

function pagina(){
     global $connection;

     
$per_page = 6;

    $sqlquery = "SELECT * FROM veiculo";
    $find_count = mysqli_query($connection, $sqlquery);
    $count = mysqli_num_rows($find_count);

        $count = ceil($count /$per_page);

        for($i = 1; $i <= $count; $i++){
             echo "<li><a href='lista_carro.php?page={$i}'>{$i}</a></li>";
        }

       
}





function inserir_veiculo(){

    global $connection;
    $marca = $_POST['marca'];
    $discricao = $_POST['discricao'];
    $modelo = $_POST['modelo'];
    $preco = $_POST['preco'];

   $target_file = image();
        
        $query = "INSERT INTO veiculo(marca,modelo,discricao,preco,image) ";
        $query .= "VALUES ('$marca','$modelo','$discricao','$preco','$target_file')";

            $result = mysqli_query($connection, $query);
            if(!$result){
                die("query failed".mysqli_error($connection));
        }
        else{
            actualização_com_sucesso();
        }
    } 


function veiculo(){
    global $connection;
     $id_db = $_POST['v_id'];
    $marca = $_POST['marca'];
    $discricao = $_POST['discricao'];
    $modelo = $_POST['modelo'];
    $preco = $_POST['preco'];

  

    $target_file = image();

         $query = "UPDATE veiculo SET marca ='$marca', modelo = '$modelo', discricao = '$discricao',preco = '$preco', image = '$target_file' WHERE id = $id_db";
         echo "<div style='text-align: center;' class='alert alert-warning' role='alert'> $query </div>";

           $result = mysqli_query($connection, $query);
            if(!$result){
                die("query failed".mysqli_error($connection));
            }
            else{
                exit(header("Location: ../admin/todos_veiculos.php"));
            }
}
//----------------------------------------------------------------------Veiculo End----------------------------------------------------------

//-------------------------------------------------------------------Start Index-------------------------------------------------------------

function car(){
    global $connection;
    $sqlget = "SELECT * FROM veiculo ORDER BY id ASC LIMIT 3";
    $sql = mysqli_query($connection,$sqlget);
    if(!$sql){
        die("query failed". mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($sql)){
        $id_db = $row['id'];
            # code...
        $marca = $row['marca'];
        $discricao = $row['discricao'];
        $modelo = $row['modelo'];
        $image = $row['image'];
        $preco = $row['preco'];
        echo "
            <div class='col-md-4'>
                <div class='car-item' >
                <div class='entry'>
                    <div class='thumb-content'>
                        <div class='car-banner-rent'>
                            <p>Aluguer</p>
                        </div>
                        <img style='height:215px;' data-fullwidthcentering='on' src='$image' alt=''>
                    </div>
                    
                    <div class='down-content entry_title'>
                        <h4>$marca <span>$modelo</span></h4>
                        <div class='line-dec'></div>
                        <p>$discricao</p>
                    </div>
                    <div class='entry_paragraph'>
                    <p>Preço €$preco</p>
                  </div>
                    </div>
                </div>
            </div> 

            ";
            
    }
}


function contacto(){
    global $connection;
    $sqlget = "SELECT * FROM contacto";
    $sql = mysqli_query($connection,$sqlget);
    if(!$sql){
        die("query failed". mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($sql)){
        $telefone = $row['telefone'];
        $email = $row['email'];
        $endereco = $row['endereco'];
        $db_movel = $row['movel'];
        echo "
            <div class='row'>
            <div class='col-md-4'>
                <div class='info-item'>
                    <i class='fa fa-phone'></i>
                    <h4>Telefone:</h4>
                    <div class='line-dec'></div>
                    <span>(+238) $telefone / $db_movel</span>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='info-item'>
                    <i class='fa fa-envelope'></i>
                    <h4>Email:</h4>
                    <div class='line-dec'></div>
                    <span>$email</span>
                </div>
            </div>
            <div class='col-md-4'>
                <div class='info-item'>
                    <i class='fa fa-map-marker'></i>
                    <h4>Encontre-nos em:</h4>
                    <div class='line-dec'></div>
                    <span>$endereco</span>
                </div>
            </div>
        </div> ";
            
    }
}




//----------------------------------------------------------------------End index------------------------------------------------------------

//----------------------------------------------------------------------Start Contacto-------------------------------------------------------------

function update_contacto(){

    global $connection;
    $id_db = $_POST['id'];
    $telefone = $_POST['telefone'];
    $movel = $_POST['movel'];
    $movel2 = $_POST['movel2'];
    $fax = $_POST['fax'];
    $email = $_POST['email'];
    $endereco = $_POST['endereco'];
    
    $query = "UPDATE contacto SET telefone ='$telefone', movel = '$movel', movel_2 = '$movel2', fax = '$fax', email = '$email', endereco = '$endereco' WHERE id = $id_db ";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("query failed".mysqli_error($connection));
    } else{
        actualização_com_sucesso();
        exit(header("Location: ../admin/all_contact.php"));
    }
}

function carregar_contacto(){
    global $connection;
    $sqlget = "SELECT * FROM contacto";
    $sql = mysqli_query($connection,$sqlget);
    if(!$sql){
        die("query failed". mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($sql)){
        $telefone = $row['telefone'];
        $email = $row['email'];
        $fax = $row['fax'];
        $movel = $row['movel'];
        $movel2 = $row['movel_2'];
        echo "
            <ul>
                <li><i class='fa fa-phone'></i><span>(+238) $telefone</span></li>
                <li><i class='fa fa-mobile'></i><span>(+238) $movel / $movel2</span></li>
                <li><i class='fa fa-fax'></i><span>(+238) $fax</span></li>
                <li><i class='fa fa-envelope'></i><span>$email</span></li>
            </ul> ";

    }
}
//----------------------------------------------------------------------END Contacto-----------------------------------------------------------------

//----------------------------------------------------------------------Login Start------------------------------------------------------------------

function sign_in() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);

  

    $query= "SELECT * FROM user Where username = '$username'";
    $select_user_query = mysqli_query($connection, $query);
    if(!$select_user_query){
        die("query failed". mysqli_error($connection));
    }

    while ($row = mysqli_fetch_array($select_user_query)) {
        # code...
        $db_id = $row['id'];
        $db_username = $row['username'];
        $db_password = $row['password'];
        $db_tipo = $row['tipo'];
        $teste =  password_verify($password, $db_password);
    }
    if($username == $db_username && $password == $db_password){
            $_SESSION['username'] = $db_username;
            $_SESSION['password'] = $db_password;
            $_SESSION['tipo'] = $db_tipo;

            header("Location: ../admin/admin.php");
            
        } else {
            header("Location: ../admin/index.php");

        }


}

function sign_up() {
    global $connection;
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nome = $_POST['name'];
    $tipo = $_POST['type'];

    $username = mysqli_real_escape_string($connection, $username);
    $password = mysqli_real_escape_string($connection, $password);
    $email = mysqli_real_escape_string($connection, $email);

    //$password = password_hash('$password', PASSWORD_DEFAULT);

    $query = "INSERT INTO user (username,password,email,name,tipo) ";
    $query .= "VALUES ('$username','$password','$email','$nome','$tipo')";



    $result = mysqli_query($connection, $query);

    if(!$result){
        die('query FAILED' . mysqli_error());
    }else{
        //actualização_com_sucesso();
        header("Location: ../admin/admin.php");
    }
}

//---------------------------------------------------------------------------Login END---------------------------------------------------------------

//---------------------------------------------------------------------------Banner tart---------------------------------------------------------

function inserir_banner(){

    global $connection;
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $modelo = $_POST['modelo'];
    $titulo = $_POST['titulo'];

    $target_file = imageBanner();

        
        $query = "INSERT INTO banner(tipo,marca,modelo,ano,imagem) ";
        $query .= "VALUES ('$titulo','$marca','$modelo','$ano','$target_file')";

            $result = mysqli_query($connection, $query);
            if(!$result){
                die("query failed".mysqli_error($connection));
        }else{
        }
    } 


function update_banner(){

    global $connection;
    $id_db = $_POST['id'];
    $marca = $_POST['marca'];
    $ano = $_POST['ano'];
    $modelo = $_POST['modelo'];
    $titulo = $_POST['titulo'];

    $target_file = imageBanner();

        
       $query = "UPDATE banner SET tipo ='$titulo', marca = '$marca', modelo = '$modelo', ano = '$ano', imagem = '$target_file' WHERE id = $id_db ";

            $result = mysqli_query($connection, $query);
            if(!$result){
                die("query failed".mysqli_error($connection));
        }else{
            exit(header("Location: ../admin/all_banner.php"));
        }
    } 


function bnnercontent(){
    global $connection;
    $sqlget = "SELECT * FROM banner";
    $sql = mysqli_query($connection,$sqlget);
    if(!$sql){
        die("query failed". mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($sql)){
        $id_db = $row['id'];
        $marca = $row['marca'];
        $modelo = $row['modelo'];
        $titulo = $row['tipo'];
        $ano = $row['ano'];
        $image = $row['imagem'];
        echo "
            <li class='first-slide' data-transition='fade' data-slotamount='10' data-masterspeed='300'>
            <img src='$image' data-fullwidthcentering='on' alt='slide'>
            <div class='tp-caption first-line lft tp-resizeme start' data-x='100' data-hoffset='0' data-y='370' data-speed='1000' data-start='200' data-easing='Power4.easeOut' data-splitin='none' data-splitout='none' data-elementdelay='0' data-endelementdelay='0'>$titulo</div>
            <div class='tp-caption second-line lfb tp-resizeme start' data-x='100' data-hoffset='0' data-y='420' data-speed='1000' data-start='800' data-easing='Power4.easeOut' data-splitin='none' data-splitout='none' data-elementdelay='0' data-endelementdelay='0'>$marca <em>$modelo</em> $ano</div>
        </li> ";
            
    }
}

//---------------------------------------------------------------------------Banner END----------------------------------------------------------

//--------------------------------------------------------------------------Perfil Start---------------------------------------------------------

function ShowAllUser() {

    global $connection;
    $sql = "SELECT * FROM user";
    $resolt = mysqli_query($connection,$sql);
    if(!$resolt){
        die("query failed". mysqli_error($connection));
    }

    while($row = mysqli_fetch_assoc($resolt)){
        $idd = $row['id'];
        $nome = $row['name'];

        echo "<option value='$idd'> $idd - $nome</option>";
    }

} 

/* function alterar_perfil(){
    global $connection;


    if(isset($_SESSION['username'])){
        $username = $_SESSION['username'];

        $query = "SELECT * FROM user   username = '{$username}'";

        $select_user_profile_query = ($row = mysqli_fetch_array($select_user_profile_query)){
            $user_id = $row['id'];
            $user_username = $row['username'];
            $user_password = $row['password'];
            $user_email = $row['email'];
            $user_name = $row['name'];
            $user_tipo = $row['tipo'];



        }

    }


    $id_db = $_POST['id'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $nome = $_POST['name'];
    $tipo = $_POST['type'];
    
    $query = "UPDATE user SET username ='$username', password = '$password', email = '$email', name = '$nome', tipo = '$tipo' WHERE id = $id_db ";

        $result = mysqli_query($connection, $query);
        if(!$result){
            die("query failed".mysqli_error($connection));
    } 

}*/

//-------------------------------------------------------------------------Perfil END------------------------------------------------------------


?>