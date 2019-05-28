<?php
	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location: ../index.php');
	}else{
		if ($_SESSION['rol']!=1) {
			header('location: ../index.php');
		}
	}
?>
<?php
	if(isset($_POST['cerrarSesion'])){
		header('location: ../index.php?cerrar_sesion=1');
	}
	?>
<html lang="es-mx">

    <head>
        <title>SIIA - Bienvenido</title>
        <script src="Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
        <script src="Scripts/MenuHorizontalAnimado.js" type="text/javascript"></script>
        <link href="../styles/cerrarSesion.css" rel="stylesheet" type="text/css">
        <link href="../styles/Site.css" rel="stylesheet" type="text/css">
        <link href="../styles/Formulario.css" rel="stylesheet" type="text/css">
        <link href="../styles/MenuHorizontalAnimado.css" rel="stylesheet" type="text/css">
        <link href="../styles/Contenido.css" rel="stylesheet" type="text/css">
        <link href="../styles/Site.css" rel="stylesheet" type="text/css">

        <style type="text/css">
            .style1 {
                color: #000099;
            }

        </style>
    </head>

    <body>
        <header>
            <!--
			<div id="Encabezado">
				<div class="title">
					<img src="Imagenes/ITL_Banner_SIIA.png" id="imgEncabezado" style="">
                    -->
            </div>
            <form action="#" method="POST">
            <nav class="dark w-shadow">
                <div id="MenuPrincipal" class="nav-container" >
                    <ul id="nodoPrincipal" class="nav-menu slideUp w-divider">
                        <li><a href="Menu_Profesor.php"><h1>Inicio</h1></a></li>
                        <li class="nav-dropdown">
                            <a href="Menu_Profesor.php"><h1>Grupos</h1><span
                                    class="s-button s-collapse-trigger">+</span></a>
                            <ul>
                                <li><a href="SubirCalificaciones.php"><h1>Subir Calificaicones</h1></a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="Menu_Profesor.php"><h1>Horario</h1><span
                                    class="s-button s-collapse-trigger">+</span></a>
                            <ul>
                                <li><a href="ConsultarHorario.php"><h1>Consultar horario</h1></a></li>
                            </ul>
                        </li>
                        <li><a href="Avisos.php"><h1>Avisos</h1></a></li>
                        <li><input type="submit" name="cerrarSesion" value="Salir" 
                        class="cerrarSesion w-divider"></li>
                    </ul>
                </div>
            </nav>
            </form>

            </div>

            </div>
        </header>
        <div class="page">
            <section class="main">

                <div id="divBienvenida" style=" font-size:15pt ; text-align:center ; width :100% ">
                    <h2>Avisos</h2>
                    <br>
                    <br>
                <!------------------------------------------------------------------------------------->

                </div>
            </section>
        </div>
        </form>
        <footer class="footer">
            <strong>Copyright � 2019 - SIIA</strong>
        </footer>
    </body>

</html>