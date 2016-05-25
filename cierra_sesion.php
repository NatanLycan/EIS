<!DOCTYPE html>
<html>
    <head>
        <!--SCRIPT PARA LOS ANUNCIOS-->

        <script type="text/javascript">
            var images2 = new Array();
            images2[0] = "./IMG/anuncio1.png";
            images2[1] = "./IMG/anuncio2.png";
            images2[2] = "./IMG/anuncio3.png";
            var x = 1;

            function changeImage() {
                document.getElementById('ad').src = images2[x];
                if (x < 2) {
                    x += 1;
                } else {
                    x = 0;
                }
            }
            window.onload = function() {
                setInterval(function () {
                    changeImage();
                }, 3000);
            }
        </script><!--FIN DE SCRIPT PARA ANUNCIOS-->

        <title>EIS</title>
        <meta charset="utf-8">
        <script type="text/javascript" src="./Scr/jquery-2.2.0.js"></script>
        <script type="text/javascript" src="./Scr/moment.min.js"></script>
        <script type="text/javascript" src="./Scr/bootstrap.js"></script>
        <script type="text/javascript" src="./Scr/bootstrap-datetimepicker.js"></script>
        <link type="text/css" rel="stylesheet" href="./CSS/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="./CSS/letras.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>    

        <div class="container-fluid" style="padding-bottom:10px;padding-top:10px;" id="header">
            <a href="./index.php">
                <img src="./IMG/logo.jpg" height="94px" style="float:left; padding-left:15px; padding-bottom:0px;">
                <img class="img-head" src="./IMG/logoIPNGris.png" style="float:right; padding-top:10px; padding-right:15px;">
            </a>
        </div>

        <nav class="navbar navbar-inverse navbar-static-top" style="height:84px;" id="top-bar">
            <div class="container-fluid" style="padding-left:51px; padding-right:51px;">
                <div class="navbar-header">
                    <a class="navbar-brand" href=".">
                        <img id="logoSGCE" src="./IMG/escomGris.png" width="80px">
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
            </div>
        </nav>

        <!-- contenido ------------------------------------------------------------------------------------------>
        <div id="main-content" class="container-fluid" align="center" style="padding-bottom: 50px;">
            <div class="jumbotron">
				<p class='avisos' id="aviso">You have logged out. You will be redirected in 3 seconds. </p>
				<?php 
				setcookie("sesion", "", time()-3600);

				header("refresh: 3; url = ./");

				?>
			</div>
        </div>

        <script type="text/javascript">
			$(document).ready(function (){
				setTimeout(function(){
					$("#aviso").text("You have logged out. You will be redirected in 2 seconds.")
					setTimeout(function(){
						$("#aviso").text("You have logged out. You will be redirected in 1 seconds.");
					}, 1000);
				}, 1000);
			});
		</script>

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
                            <img src="./IMG/fb3.png" height="24px">
                        </a>
                        <a class="navbar-brand" href="https://twitter.com/escomunidad?ref_src=twsrc%5Etfw">
                            <img src="./IMG/twitter1.png" height="24px">
                        </a>
                        <a class="navbar-brand" href="https://plus.google.com/u/0/109607303416604816797/posts">
                            <img src="./IMG/google+.png" height="24px">
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
</html