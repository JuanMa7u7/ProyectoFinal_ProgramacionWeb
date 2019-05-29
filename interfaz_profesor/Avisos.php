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

<?php
    if(isset($_POST['generarAviso'])){
    include_once '../database/database.php';
    $db = new Database();
    $rolSesion = (int)$_SESSION['rol'];
    $obtenerAutor = $db->connect()->query("SELECT nombre, apPaterno, apMaterno FROM usuarios WHERE rol_id = '$rolSesion'");
    $row=$obtenerAutor->fetch(PDO::FETCH_ASSOC);
    $autor =  $row['nombre'] . " " . $row['apPaterno'] . " " . $row['apMaterno'];
    $contenido = $_POST['contenidoAviso'];
    $caducidad = $_POST['caducidad'];
    $datos= $db->connect()->query("INSERT INTO avisos 
    VALUES(null,'$contenido','$autor','1','$caducidad')");
    echo '<script>alert(\'Aviso creado exitosamente\');</script>';
    header('location: Avisos.php');
    }
?>
<html lang="es-mx">

    <head>
        <title>SIIA - Bienvenido</title>
        <script src="Scripts/jquery-1.4.1.min.js" type="text/javascript"></script>
        <script src="Scripts/MenuHorizontalAnimado.js" type="text/javascript"></script>
        <link href="../styles/tablas.css" rel="stylesheet" type="text/css">
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
                <center>
                    <form action="#" method="POST">
                    <table class="tabla">
		<tr>
			<th>ID</th>
			<th>Autor</th>
			<th>Contenido</th>
            <th>Difusion</th>
            <th>Caducidad</th>
		</tr>
		<?php
		include_once '../database/database.php';
        $db = new Database();
        $rolSesion = (int)$_SESSION['rol'];
        $obtenerAutor = $db->connect()->query("SELECT nombre, apPaterno, apMaterno FROM usuarios WHERE rol_id = '$rolSesion'");
        $fila=$obtenerAutor->fetch(PDO::FETCH_ASSOC);
        $autor =  $fila['nombre'] . " " . $fila['apPaterno'] . " " . $fila['apMaterno'];
		$datos= $db->connect()->query("SELECT id, contenido, autor, difusion, caducidad from avisos where difusion = 2 or difusion = 3 or autor = '$autor'");

		while ($row=$datos->fetch(PDO::FETCH_ASSOC)) {
			$Con=$row['id'];
			?>
		<?php

		?>
		<tr>
            
            <th><?php echo $row['id']?></th>
            <th><?php echo $row['autor']?></th>
			<th><?php echo $row['contenido'] ?></th>
            <th><?php 
            if($row['difusion'] == 1){
                echo "Alumnos (" . $row['difusion'] . ")";
            }else
            if($row['difusion'] == 2){
                echo "Profesores (" . $row['difusion'] . ")";
            }else
            if($row['difusion'] == 3){
                echo "Global (" . $row['difusion'] . ")";
            }
            ?></th>
            <th><?php echo $row['caducidad'] ?></th>
		</tr>
		<?php 
			}
        ?>
    </table>
    <br>
    <br>
    <h2>Crear aviso</h2><br>
    <textarea cols=50 rows=10 name="contenidoAviso" required></textarea><br>
    <table border="0" cellspacing = "0">
    <tr>
    </tr>
    <tr>
    <th>Caducidad: </th>   
    <th><input type="date" name="caducidad" min="<?php echo date("Y-m-d");?>" 
    value="<?php echo date("Y-m-d");?>" required></th>
    </tr>
    </table><br>
            <input type="submit" name="generarAviso" value="Crear aviso"
            style="background: green; color: white ; border-color: green; font-size: 18px;">
    </form>
    </center>


                </div>
            </section>
        </div>
        </form>
        <footer class="footer">
            <strong>Copyright 2019 - SIIA</strong>
        </footer>
    </body>

</html>