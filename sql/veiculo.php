<?php include "db.php" ?>
<?php

    $id_db = $_POST['v_id'];
    $marca = $_POST['marca'];
    $discricao = $_POST['discricao'];
    $combustivel = $_POST['combustivel'];
    $velocidade = $_POST['velocidade'];
    $kmn = $_POST['km'];
    $modelo = $_POST['modelo'];

  

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
            echo "45sd5";
            if (move_uploaded_file($image_tmp_name, "../".$target_file)) {
                //echo "<div style='text-align: center;' class='alert alert-success' role='alert'>Guardado com Sucesso! The file ". basename( $image_name). " has been uploaded.</div>";

                
                echo $target_file;
                echo "aqui5";
            } else {
                echo "<div style='text-align: center;' class='alert alert-warning' role='alert'>Sorry, there was an error uploading your file.</div>";
                return;
                echo "aqui1";
            }
            echo "aquio2";
        }
        echo "aqui3";
         $query = "UPDATE veiculo SET marca ='$marca', modelo = '$modelo', discricao = '$discricao', combustivel = '$combustivel', velocidade = '$velocidade', km = '$kmn', image = '$target_file' WHERE id = $id_db";
         echo "<div style='text-align: center;' class='alert alert-warning' role='alert'> $query </div>";

           $result = mysqli_query($connection, $query);
            if(!$result){
                die("query failed".mysqli_error($connection));
            }
            else{
                echo $query;
            }
?>