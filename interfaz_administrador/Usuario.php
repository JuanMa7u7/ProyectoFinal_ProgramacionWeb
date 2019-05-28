<?php

	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location: ../index.php');
	}else{
		if ($_SESSION['rol']!=3) {
			header('location: ../index.php');
		}
	}
?>
<?php
	if(isset($_POST['cerrarSesion'])){;
		header('location: ../index.php?cerrar_sesion=3');
	}
    ?>
<?php
    if (isset($_POST['Eliminar'])) {
        include_once '../database/database.php';
        $nC=$row["numControl"];
        $db = new Database();
		$datos= $db->connect()->query("DELETE FROM usuarios WHERE numControl='$nC'");
		header('location: Usuario.php');
    }else
    if(isset($_POST['CrearUsuario'])){
        header('location: CrearUsuario.php');
    }
    ?>
<html lang="es-mx">

    <head>
        <title>SIIA - Bienvenido</title>
        <link href="../styles/cerrarSesion.css" rel="stylesheet" type="text/css">
        <link href="../styles/Site.css" rel="stylesheet" type="text/css">
        <link href="../styles/MenuHorizontalAnimado.css" rel="stylesheet" type="text/css">
        <link href="../styles/tablas.css" rel="stylesheet" type="text/css">
        

    </head>
    <body>
        <header>
            </div>
            <nav class="dark w-shadow">
                <div id="MenuPrincipal" class="nav-container" >
                    <ul id="nodoPrincipal" class="nav-menu slideUp w-divider">
                        <li><a href="Menu_Administrador.php"><h1>Inicio</h1></a></li>
                        <li class="nav-dropdown">
                            <a href="Usuario.php"><h1>Usuarios</h1><span
                                    class="s-button s-collapse-trigger">+</span></a>
                        </li>
                        <li><a href="IndicesReprobacion.php"><h1>Indices de reprobacion</h1></a></li>
                        <li><a href="Avisos.php"><h1>Avisos</h1></a></li>
                        <li><input type="submit" name="cerrarSesion" value="Salir" 
                        class="cerrarSesion w-divider"></li>
                    </ul>
                    <a class="s-button s-collapse-trigger" href="#">+</a>
                </div>
            </nav>
            </div>
        </header>
        <div class="page">
            <section class="main">
                <div id="divBienvenida" style=" font-size:15pt ; text-align:center ; width :100%  float: center;">
                    <h2>Usuarios</h2>
                    <br>
                    <br>
                    <!--Tabla de usuarios-->
                    <center>
                    <form action="#" method="POST">
                    <table class="tabla">
		<tr>
			<th>Numero de control</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Rol</th>
			<th>Modificar</th>
			<th>Eliminar</th> 
		</tr>
		<?php
		include_once '../database/database.php';
		$db = new Database();
		$datos= $db->connect()->query('SELECT numControl, rol_id, nombre, ApPaterno, ApMaterno from usuarios');

		while ($row=$datos->fetch(PDO::FETCH_ASSOC)) {
			$Con=$row['numControl'];
			?>
		<?php

		?>
		<tr>
            
            <th><?php echo $row['numControl']?></th>
            <th><?php echo $row['nombre']?></th>
			<th><?php echo $row['ApPaterno'] ?></th>
			<th><?php echo $row['ApMaterno'] ?></th>
            <th><?php 
            if($row['rol_id'] == 1){
                echo "Profesor (" . $row['rol_id'] . ")";
            }else
            if($row['rol_id'] == 2){
                echo "Alumno (" . $row['rol_id'] . ")";
            }else
            if($row['rol_id'] == 3){
                echo "Administrador (" . $row['rol_id'] . ")";
            }
            ?></th>
            <th><a href="CrearUsuario.php?numControlEdit=<?php echo $row["numControl"] ?>"
            style="background: blue; color: white ;border-color: blue; font-size: 18px;" >
            <img src="../img/modificar.jpg" width="100" height="30"/></a></th>
            <th><a href="CrearUsuario.php?numControlDelete=<?php echo $row["numControl"] ?>"
            style="background: red; color: white; border-color: red; font-size: 18px;">
            <img src="../img/eliminar.jpg" width="100" height="30"/></a></th>
		</tr>
		<?php 
			}
        ?>
    </table>
    <br><br>
        <input type="submit" name="CrearUsuario" value="Crear usuario"
            style="background: green; color: white ; border-color: green; font-size: 18px;">
        </center>
	</form>

                </div>
            </section>
        </div>
        </form>
        <footer class="footer">
            <strong>Copyright © 2019 - SIIA</strong>
        </footer>
    </body>
</html>