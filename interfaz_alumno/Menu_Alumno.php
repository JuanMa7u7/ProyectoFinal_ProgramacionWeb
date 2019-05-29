<?php

	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location: ../index.php');
	}else{
		if ($_SESSION['rol']!=2) {
			header('location: ../index.php');
		}
    }
?>
<?php
    if(isset($_POST['cerrarSesion'])){
		header('location: ../index.php?cerrar_sesion=2');
	}
?>

<html lang="es-mx">

    <head>
        <title>SIIA - Bienvenido</title>
        <link href="../styles/cerrarSesion.css" rel="stylesheet" type="text/css">
        <link href="../styles/Site.css" rel="stylesheet" type="text/css">
        <link href="../styles/MenuHorizontalAnimado.css" rel="stylesheet" type="text/css">

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
                        <li><a href="Menu_Alumno.php"><h1>Inicio</h1></a></li>
                        <li class="nav-dropdown">
                            <a href="Menu_Alumno.php"><h1>Situacion Academica</h1><span
                                    class="s-button s-collapse-trigger">+</span></a>
                            <ul>
                                <li><a href="SeguimientoAcademico.php"><h1>Seguimiento</h1></a>
                                </li>
                                <li><a href="HorarioEvaluacion.php"><h1>Horario
                                        Actual</h1></a></li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="Menu_Alumno.php"><h1>Inscripcion</h1><span
                                    class="s-button s-collapse-trigger">+</span></a>
                            <ul>
                                <li><a href="ProcesoInscripcion.php"><h1>Proceso
                                        de Inscripción</h1></a></li>
                                <li><a href="PreHorario.php"><h1>PreHorarrio</h1></a>
								
								<li><a href="PreHorarioEditar.php"><h1>Modificar PreHorario</h1></a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="Avisos.php"><h1>Avisos</h1></a></li>
                        <li><input type="submit" name="cerrarSesion" value="Salir" 
                        class="cerrarSesion w-divider"></li>
                    </ul>
                    <a class="s-button s-collapse-trigger" href="#">+</a>
                </div>
            </nav>
            </form>
            </div>
        </header>
        <div class="page">
            <section class="main">

                <div id="divBienvenida" style=" font-size:15pt ; text-align:center ; width :100% ">
                    <h2>Bienvenido</h2>
                    <br>
                    <?php
                    include_once '../database/database.php';
                    $db = new Database();
                    $rolSesion = (int)$_SESSION['rol'];
                    $obtenerNombreUsuario = $db->connect()->query("SELECT nombre, apPaterno, apMaterno FROM usuarios WHERE rol_id = '$rolSesion'");
                    $row=$obtenerNombreUsuario->fetch(PDO::FETCH_ASSOC);
                    $nombreUsuario =  $row['nombre'] . " " . $row['apPaterno'] . " " . $row['apMaterno'];
                    echo "<h2>" . $nombreUsuario . "</h2><br><br>";

                    date_default_timezone_set("America/Mexico_City"); 
                    echo "<h2>Fecha y hora: " . date("Y-m-d H:i:s", time()) . "</h2>";  
                    ?>
                </div>
            </section>
        </div>
        </form>
        <footer class="footer">
            <strong>Copyright © 2019 - SIIA</strong>
        </footer>
    </body>

</html>
