<?php
if(isset($_POST['archivo'])){

    // Si no hubo ningun error, hacemos otra condicion para asegurarnos que el archivo no sea repetido
    if (file_exists("archivos/" . $_FILES["archivo"]["name"])) {
        echo "existe";
    } else {
        /*// Si no es un archivo repetido y no hubo ningun error, procedemos a subir a la carpeta /archivos, seguido de eso mostramos la imagen subida*/
        move_uploaded_file($_FILES["archivo"]["tmp_name"],"archivos/" . $_FILES["archivo"]["name"]);
        echo "exito";

    }
}else{
     echo "error";
}
?>