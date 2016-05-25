<!DOCTYPE html>
<html>
    <head>    
        <title>EIS</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="../Scr/jquery-2.2.0.js"></script>
        <script type="text/javascript" src="../Scr/moment.min.js"></script>
        <script type="text/javascript" src="../Scr/validator.js"></script>
        <script type="text/javascript" src="../Scr/bootstrap.js"></script>
        <script type="text/javascript" src="../Scr/bootstrap-datetimepicker.js"></script>
        <link type="text/css" rel="stylesheet" href="../CSS/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="../CSS/letras.css">
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
            <h2><p><strong>Create an account</strong></p></h2>
            <br><br>
            <form action="POST" class="form-horizontal">
                <div class="form-group" id="Nombre">
                    <label  for="" class="control-label col-md-2">Name(s)</label>
                    <div class="col-md-10">
                        <input type='nombre' name='nombre' class='form-control' placeholder="Pancho">
                        <span id="nombre01" class="hidden glyphicon form-control-feedback"></span>
                        <span id="nombre02" class="text-center help-block hidden"></span>
                    </div>
                </div>
                <div class="form-group" id="Appaterno">
                    <label  for="" class="control-label col-md-2">First name</label>
                    <div class="col-md-10">
                        <input type='appaterno' name="appaterno" class='form-control' placeholder="Perez">
                        <span id="appaterno01" class="hidden glyphicon form-control-feedback"></span>
                        <span id="appaterno02" class="text-center help-block hidden"></span>
                    </div>
                </div>
                <div class="form-group" id="Correo">
                    <label  for="" class="control-label col-md-2">E-mail</label>
                    <div class="col-md-10">
                        <input type='correo' name="correo" class='form-control' placeholder="example@domain.com">
                        <span id="correo01" class="hidden glyphicon form-control-feedback"></span>
                        <span id="correo02" class="text-center help-block hidden"></span>
                    </div>
                </div>
                <div class="form-group" id="Pass">
                    <label  for="" class="control-label col-md-2">Password</label>
                    <div class="col-md-10">
                        <input type='password' name="pass" class='form-control' placeholder="***************">
                        <span id="pass01" class="hidden glyphicon form-control-feedback"></span>
                        <span id="pass02" class="text-center help-block hidden"></span>
                    </div>
                </div>
                <div class="form-group" id="Repass">
                    <label  for="" class="control-label col-md-2">Confirm password</label>
                    <div class="col-md-10">
                        <input type='password' name="repass" class='form-control' placeholder="***************">
                        <span id="repass01" class="hidden glyphicon form-control-feedback"></span>
                        <span id="repass02" class="text-center help-block hidden"></span>
                    </div>
                </div>
                <div class="form-group" id="Key">
                    <label  for="" class="control-label col-md-2">Public key</label>
                    <div class="col-md-10">                          
                        <input type="file" name="key" class="campo-boton4">
                        <span id="key01" class="hidden glyphicon form-control-feedback"></span>
                        <span id="key02" class="text-center help-block hidden"></span>
                    </div>
                </div>
                <div class="form-group">                                              
                    <div class="form-group text-right">
                        <div class="col-md-8 col-md-offset-4">
                            <a class='btn btn-success' style='width: 150px; cursor: pointer;' onclick='enviarForm();'>CONTINUE</a>
                        </div>
                    </div>
                </div>				   
            </form>
            
            
            <!-- JAVA SCRIPT BOTONES-->
            <script type="text/javascript">
                function error(donde, str) {
					$(donde).addClass("has-error has-feedback");
					$("#pass01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
					$("#email01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
					if (str != "")
						$("#pass02").removeClass("hidden");
					$("#pass02").text(str);
				}

				function nohayerror() {
					$("#Nombre").removeClass("has-error has-feedback");
                    $("#Appaterno").removeClass("has-error has-feedback");
					$("#Correo").removeClass("has-error has-feedback");
                    $("#Pass").removeClass("has-error has-feedback");
                    $("#Repass").removeClass("has-error has-feedback");
                    $("#Key").removeClass("has-error has-feedback");
					
                    $("#nombre01").addClass("hidden");
                    $("#nombre02").addClass("hidden");
                    $("#appaterno01").addClass("hidden");
                    $("#appaterno02").addClass("hidden");
                    $("#correo01").addClass("hidden");
                    $("#correo02").addClass("hidden");
                    $("#pass01").addClass("hidden");
                    $("#pass02").addClass("hidden");
                    $("#repass01").addClass("hidden");
                    $("#repass02").addClass("hidden");
                    $("#key01").addClass("hidden");
                    $("#key02").addClass("hidden");
				}
                
				function enviarForm() {
					var tn = false, tc = false,tp = false,tpc = false,tk = false;  
                    var nombre = $("[name='nombre']").val();
                    var appaterno = $("[name='appaterno']").val();
                    var correo = $("[name='correo']").val();
                    var pass = $("[name='pass']").val();
                    var repass = $("[name='repass']").val();
                    var key = $("[name='key']").val();            
                    
                    /* REVISAR SI ALGUN CAMPO ESTA VACIO */
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
                    
                    if (appaterno == "") {
						$("#Appaterno").attr("class", "form-group has-error has-feedback");
						$("#appaterno01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                        $("#appaterno02").removeClass("hidden");
                        $("#appaterno02").text("This field can't be empty.");
					}else{
                        if(!valname(appaterno)){
                            $("#Appaterno").attr("class", "form-group has-error has-feedback");
						    $("#appaterno01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                            $("#appaterno02").removeClass("hidden");
                            $("#appaterno02").text("This field doesn't accept numbers.");
                        }else{
                            $("#Appaterno").attr("class", "form-group has-success has-feedback");
                            $("#appaterno01").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                            $("#appaterno02").addClass("hidden");
                            tp = true;
                        }// else formato correcto apellido paterno
                    }// if vacio
                    
                    if (correo == "") {
						$("#Correo").attr("class", "form-group has-error has-feedback");
						$("#correo01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                        $("#correo02").removeClass("hidden");
                        $("#correo02").text("This field can't be empty.");
					}else{
                        if(!validate(correo)){
                            $("#Correo").attr("class", "form-group has-error has-feedback");
                            $("#correo01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                            $("#correo02").removeClass("hidden");
                            $("#correo02").text("Please enter a valid email. For example,  usuario@dominio.com");
                        }else{
                            $("#Correo").attr("class", "form-group has-success has-feedback");
                            $("#correo01").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                            $("#correo02").addClass("hidden");
                            tc = true;
                        }// else formato correcto email
                    }// if vacio
                    
                    if (pass == "") {
						$("#Pass").attr("class", "form-group has-error has-feedback");
						$("#pass01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                        $("#pass02").removeClass("hidden");
                        $("#pass02").text("This field can't be empty.");
					}else{
                        if(!valcontra(pass)){
                            $("#Pass").attr("class", "form-group has-error has-feedback");
                            $("#pass01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                            $("#pass02").removeClass("hidden");
                            $("#pass02").text("Please enter 6 or more characters. The spaces between characters will be ignored.");
                        }else{
                            $("#Pass").attr("class", "form-group has-success has-feedback");
                            $("#pass01").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                            $("#pass02").addClass("hidden");
                            tp = true;
                        }// else formato correcto contrasean
                    }// if vacio
                    
                    
                    if (repass == "") {
						$("#Repass").attr("class", "form-group has-error has-feedback");
						$("#repass01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                        $("#repass02").removeClass("hidden");
                        $("#repass02").text("This field can't be empty.");
					}else{
                        if(!valcontra(repass)){
                            $("#Repass").attr("class", "form-group has-error has-feedback");
                            $("#repass01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                            $("#repass02").removeClass("hidden");
                            $("#repass02").text("Please enter 6 or more characters. The spaces between characters will be ignored.");
                        }else{
                            if(pass != repass){
                                $("#Pass").attr("class", "form-group has-feedback has-error");
                                $("#pass01").attr("class", "glyphicon glyphicon-remove form-control-feedback");;		
                                $("#Repass").attr("class", "form-group has-feedback has-error");
                                $("#repass01").attr("class", "glyphicon glyphicon-remove form-control-feedback");
                                $("#repass02").removeClass("hidden");
                                $("#repass02").text("Passwords don't match, please retype your password.");
                            }else{
                                $("#Repass").attr("class", "form-group has-success has-feedback");
                                $("#repass01").attr("class", "glyphicon glyphicon-ok form-control-feedback");
                                $("#repass02").addClass("hidden");
                                tpc = true;
                            }
                        }// else formato correcto contrasean
                    }// if vacio
                    if (tn && tc && tp && tpc){
                        
                                $("#repass02").removeClass("hidden");
                                $("#repass02").text("Validación.");
                        
                        
                        
							$.ajax({
								url: "../Modelo/agrega_cuenta.php",
								method: "POST",
								data: { 
									name: nombre,
									appat: appaterno,
									mail: correo,
									p1: pass
									//key: cargo
								}
							}).done(function(msg) {
								if(msg == "Insertado") $("#exitoso").modal();
								console.log(msg);                                
							});   
				    }else{
						$(window).scrollTop(0);
						$("#error").modal();
				    }// si los datos del formulario son correctos  
				}// enviarFOrm		
			</script>
        </div>
        
        <div class="modal fade" data-keyboard="false" data-backdrop="static" id="exitoso" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header modal-has-success">
						<h4 class="modal-title">Alert</h4>
					</div>
					<div class="modal-body">
						<p>The account has been successfully created.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-success" data-dismiss="modal"
								onClick="window.location = 'AdministrarCuentas.php';">
							Ok
						</button>
					</div>
				</div>
			</div>
		</div>

		<div class="modal fade" data-keyboard="false" id="error" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header modal-has-error">
						<h4 class="modal-title">Error</h4>
					</div>
					<div class="modal-body">
						<p>Falta al menos un dato obligatorio para efectuar la operación solicitada.</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Aceptar</button>
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