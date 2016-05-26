<!DOCTYPE html>
<?php
include_once '../Modelo/config.inc.php';
if (isset($_POST['subir'])) {
    $id = $_COOKIE["id"];
    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta = $_FILES['archivo']['tmp_name'];
    $destino = "archivos/" . $nombre;
    if ($nombre != "") {
        if (copy($ruta, $destino)) {
            $titulo= $_POST['titulo'];
            $db=new Conect_MySql();
            $sql = "INSERT INTO archivo(titulo,fecha,link,tamanio,tipo,idusuario)VALUES('$titulo',curdate(),aes_encrypt('$destino',select aes_decrypt(contrasena,'C1r4l3t1890') from usuario where id='$id'),'$tamanio','$tipo','$id')";
            $query = $db->execute($sql);
            if($query){
                echo "Se guardo correctamente";
            }
        } else {
            echo "Error";
            //echo $ruta;
        }
    }
}
?>
<html>
    <head>    
        <title>EIS</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="../Scr/jquery-2.2.0.js"></script>
        <script type="text/javascript" src="../Scr/moment.min.js"></script>
        <script type="text/javascript" src="../Scr/bootstrap.js"></script>
        <script type="text/javascript" src="../Scr/validator.js"></script>
        <script type="text/javascript" src="../Scr/bootstrap-datetimepicker.js"></script>
        <link type="text/css" rel="stylesheet" href="../CSS/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../CSS/letras.css">
        <link type="text/css" rel="stylesheet" href="../CSS/modals.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>    

        <div class="container-fluid" style="padding-bottom:10px;padding-top:10px;" id="header">
            <a href="../index.php">
                <img src="../IMG/logo.jpg" height="94px" style="float:left; padding-left:15px; padding-bottom:0px;">
                <img class="img-head" src="../IMG/logoIPNGris.png" style="float:right; padding-top:10px; padding-right:15px;">
            </a>
        </div>

        <nav class="navbar navbar-inverse navbar-static-top" style="height:84px;" id="top-bar">
            <div class="container-fluid" style="padding-left:51px; padding-right:51px;">
                <div class="navbar-header">
                    <a class="navbar-brand" href="../index.php">
                        <img id="logoSGCE" src="../IMG/escomGris.png" width="80px">
                    </a>
                    <div style="padding-top:33px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-bar" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                </div>

                <div class="collapse navbar-collapse" id="header-bar">
                    <ul class="nav navbar-nav navbar-right" style="padding-top:12px;">

                        <?php
                        if (isset($_COOKIE["cargo"])) {
                        ?>
                        <?php if($_COOKIE["cargo"]==1){ ?>

                        <!--  Administrador -->


                        <?php }else{?> 


                        <! Usuario registrado -->                    

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><img src="../IMG/bookmarkGreen.png" height="40px"></span> Files<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dark">
                                <li><a href="./Encrypt.php">
                                    <span><img src="../IMG/encrypt.png" height="36px"></span>
                                    Encrypt
                                    </a></li>
                                <li><a href="./Pdfario.php">
                                    <span><img src="../IMG/pdfario.png" height="36px"></span>
                                    PDFario
                                    </a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span><img src="../IMG/user0.png" height="40px"></span> Welcome<span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu dark">
                                <li><a href="./CambiarContrasena.php">
                                    <span><img src="../IMG/Edit2.png" height="36px"></span>
                                    Change password
                                    </a></li>
                                <li><a href="cierra_sesion.php">
                                    <span><img src="../IMG/Out.png" height="36px"></span>
                                    Log out
                                    </a></li>
                            </ul>
                        </li>



                        <?php } ?>


                        <?php
                        }else{
                        ?>

                        <!--  Visitante -->
                        <li class="">
                            <a href="./IniciarSesion.php">
                                <span><img src="../IMG/iniciarsesion.png" height="40px"></span> Sign in
                            </a>
                        </li>

                        <?php
                        }			
                        ?>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- contenido ------------------------------------------------------------------------------------------>
        <div style="padding-bottom: 57px;" id="main-content" class="container-fluid col-md-offset-1 col-md-10">
            <h2><p><strong>Encrypt file</strong></p></h2>
            <br><br>
            <form action="" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group" id="Nombre">
                    <label  for="text" class="control-label col-md-2">Title</label>
                    <div class="col-md-10">                           
                        <input type="text" name="titulo" class='form-control' placeholder="Cryptography's exam answers">
                    </div>
                </div>
                <div class="form-group" id="File">
                    <label for="file" class="control-label col-md-2">Load file:</label>
                    <div class="col-md-10">
                        <input type="file" name="archivo"  />
                        <input type="submit" value="Subir" name="subir" />
                    </div>
                </div>

                <!-- 
<div class="form-group" >
<div class="form-group text-right">
<div class="col-md-8 col-md-offset-4">
<a class="btn btn-success" style="width: 150px;" onclick="enviarForm();">CONTINUE</a>
</div>
</div>
</div> -->
                <!-- JAVA SCRIPT BOTONES-->
                <script type="text/javascript">
                    /*

                    function enviarForm() {
                        var tn = false,tf = false;  
                        var nombre = $("[name='nombre']").val();
                        var archivo = $("[name='archivo']").val();


                        /* REVISAR SI ALGUN CAMPO ESTA VACIO 
                        if (nombre == "") {
                            $("#Nombre").attr("class", "form-group has-error has-feedback");
                            $("#nombre01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                            $("#nombre02").removeClass("hidden");
                            $("#nombre02").text("This field can't be empty.");
                        }else{
                            if(!valname(nombre)){
                                $("#Nombre").attr("class", "form-group has-error has-feedback");
                                $("#nombre01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                                $("#nombre02").removeClass("hidden");
                                $("#nombre02").text("This field doesn't accept numbers.");
                            }else{
                                $("#Nombre").attr("class", "form-group has-success has-feedback");
                                $("#nombre01").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                                $("#nombre02").addClass("hidden");
                                tn = true;
                            }// else formato correcto nombre
                        }// if vacio
                        if (archivo == "dory"){
                            $("#File").attr("class", "form-group has-error has-feedback");
                            $("#file01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                            $("#file02").removeClass("hidden");
                            $("#file02").text("Please, choose a file 1.");

                        }else if (archivo == ""){
                            $("#File").attr("class", "form-group has-error has-feedback");
                            $("#file01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                            $("#file02").removeClass("hidden");
                            $("#file02").text("Please, choose a file 2.");

                        }else{
                            $("#File").attr("class", "form-group has-success has-feedback");
                            $("#file02").removeClass("hidden");
                            $("#file02").text(archivo);
                            tf = true;
                        }

                        if (tn && tf){                    
                            //$("#exitoso").modal();
                            upup();
                        }else{
                            $(window).scrollTop(0);
                            $("#error").modal();
                        }// si los datos del formulario son correctos  
                    }// enviarFOrm	


                    function upup() {
                        //$("#exitoso").modal();
                        var m = $("[name='nombre']").val();
                        var p = $("[name='archivo']").val();
                        //$("#exitoso").modal();
                        $.ajax({
                            url: "../Modelo/sube_file.php",
                            enctype: "multipart/form-data",
                            method: "POST",
                            data: { 
                                nombre : m,
                                archivo : p
                            }
                        }).done(function(msg) {
                            if(msg == "exito") $("#exitoso").modal();
                            else if(msg == "existe") $("#existe").modal();
                            else if(msg == "error")$("#error").modal();
                            //console.log(msg);                                
                        }); 
                    }//sube*/
                </script>
            </form>
        </div>

        <div class="modal fade" data-keyboard="false" data-backdrop="static" id="exitoso" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-has-success">
                        <h4 class="modal-title">It worked</h4>
                    </div>
                    <div class="modal-body">
                        <p>Upload has been successful</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-success" data-dismiss="modal" onclick="window.location = '../';">
                            Aceptar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" data-keyboard="false" data-backdrop="static" id="existe" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-has-warning">
                        <h4 class="modal-title">Warning</h4>
                    </div>
                    <div class="modal-body">
                        <p>This file already exists</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-warning" data-dismiss="modal" onclick="window.location = '../Vista/Encrypt.php';">
                            Aceptar
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" data-keyboard="false" data-backdrop="static" id="error" role="dialog">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header modal-has-error">
                        <h4 class="modal-title">Error</h4>
                    </div>
                    <div class="modal-body">
                        <p>Fill full </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal" onclick="window.location = '../Vista/Encrypt.php';">
                            Aceptar
                        </button>
                    </div>
                </div>
            </div>
        </div>



        <!-- footer ------------------------------------------------------------------------------------------>

        <nav class="navbar navbar-inverse navbar-fixed-bottom" id="bottom-bar">
            <div class="container-fluid" style="padding-right:51px;">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#footer-bar" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class="collapse navbar-collapse" id="footer-bar">
                    <ul class="nav navbar-nav navbar-right">
                        <p class="navbar-text">@2016 PandApps Inc.</p>
                        <a class="navbar-brand" href="https://www.facebook.com/siePandas">
                            <img src="../IMG/fb3.png" height="24px">
                        </a>
                        <a class="navbar-brand" href="https://twitter.com/escomunidad?ref_src=twsrc%5Etfw">
                            <img src="../IMG/twitter1.png" height="24px">
                        </a>
                        <a class="navbar-brand" href="https://plus.google.com/u/0/109607303416604816797/posts">
                            <img src="../IMG/google+.png" height="24px">
                        </a>
                    </ul>
                </div>
            </div>
        </nav>		

        <script type="text/javascript">
            $(document).ready(function (){
                // Sticky bar plz
                $(window).scroll(function() {
                    if ($(window).scrollTop() >= $("#header").height()) {
                        $("#top-bar").addClass("navbar-fixed-top");
                        $("#main-content").css({"padding-top":"90px"});
                    }
                    else {
                        $("#top-bar").removeClass("navbar-fixed-top");
                        $("#main-content").css({"padding-top":"0px"});
                    }
                });

                if ($(window).width() <= 886) {
                    $("#top-bar").removeAttr("style");
                }

                $(window).resize(function() {
                    if ($(window).width() > 886) {
                        $("#top-bar").attr({"style":"height:84px;"});
                    }
                    else {
                        $("#top-bar").removeAttr("style");
                    }
                }); 
            });
        </script>


    </body>
</html>