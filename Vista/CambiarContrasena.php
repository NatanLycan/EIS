<!DOCTYPE html>
<html>
<head>    
		<title>EIS</title>
		<meta charset="utf-8">
		<script type="text/javascript" src="../Scr/jquery-2.2.0.js"></script>
		<script type="text/javascript" src="../Scr/moment.min.js"></script>
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
					<a class="navbar-brand" href=".">
						<img id="logoSGCE" src="../Img/escomGris.png" width="80px">
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
								<span><img src="../Img/iniciarsesion.png" height="40px"></span> Sign in
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
			<form class="form-horizontal" method="post" id="iniciaSes">
				<h2><p><strong>Change my password</strong></p></h2>
				<br><br>
                <div class="form-group" id="Vieja">
						<label  for="" class="control-label col-md-2">Current password</label>
						<div class="col-md-10">
							<input type="password" id="vieja" class="form-control" name="passold" placeholder="*************************" >
						</div>
					</div>
					<div class="form-group" id="Nueva01">
						<label  for="" class="control-label col-md-2">New password</label>
						<div class="col-md-10">
							<input type="password" id="nueva01" class="form-control" placeholder="*************************" >
							<span id="pass01" class=""></span>
						</div>
					</div>
					<div class="form-group" id="Nueva02">
						<label  for="" class="control-label col-md-2">Confirm new password</label>
						<div class="col-md-10">
							<input type="password" id="nueva02" class="form-control" placeholder="*************************" >
							<span id="pass02" class=""></span>
							<span id="pass03" class="text-center help-block hidden">The confirmation password does not match the password you entered.</span>
						</div>
					</div>

				<div class="form-group text-right">
					<div class="col-md-10 col-md-offset-2">
						<span class="help-block">
							<a class="btn btn-success" style="width: 150px;" onclick="logIn();">CONTINUE</a>
						</span>
					</div>
				</div>
			</form>
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