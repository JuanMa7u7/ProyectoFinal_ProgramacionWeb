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
	if(isset($_POST['cerrarSesion'])){
		header('location: ../index.php?cerrar_sesion=3');
	}
    ?>
    
<?php
if(isset($_REQUEST['CrearModUsuario'])){
    include_once '../database/database.php';
    $db = new Database();
    $rol_id=$_POST['rol_id'];
    $nombre=$_POST['nombre'];
    $apP=$_POST['apP'];
    $apM=$_POST['apM'];
    $numControl=$_POST['numeroControl'];
    $pass=$_POST['pass'];
    $queryExisteRegistro="SELECT numControl FROM usuarios WHERE numControl = ". $numControl;
    $existeRegistro = $db->connect()->query($queryExisteRegistro);
    if($existeRegistro==$numControl){ /*Actualizar registro */
    $datos= $db->connect()->query("UPDATE usuarios SET 
    numControl='$numControl', password ='$pass', rol_id='$rol_id',
    nombre='$nombre', apPaterno='$apP', apMaterno='$apM'
    where numControl='$numControl'");
    echo '<script language="JavaScript" type="text/javascript">alert(\'Usuario modificado exitosamente\');</script>';
    header('location: Usuario.php');
    }else{/*Crear registro */
    $datos= $db->connect()->query("INSERT INTO usuarios 
    VALUES('$numControl','$pass','$rol_id','$nombre','$apP','$apM')");
    echo '<script>alert(\'Usuario creado exitosamente\');</script>';
    header('location: Usuario.php');
}
}
else
if(isset($_POST['Cancelar'])){
    header('location: Usuario.php');
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
            </div>
            <form action="#" method="POST">
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
            </form>
            </div>
        </header>
        <div class="page">
            <section class="main">
                <div id="divBienvenida" style=" font-size:15pt ; text-align:center ; width :100% ">
                    <h2>Crear/Modificar usuario</h2>
                    <br>
                    <br>
                    <?php
        include_once '../database/database.php';
        if(isset($_GET["numControlEdit"])){
        $db = new Database();
		$numControlEdit=($_GET["numControlEdit"]);
		$datos= $db->connect()->query("SELECT * from usuarios where numControl='$numControlEdit'");
        $row=$datos->fetch(PDO::FETCH_ASSOC);
        }else
        if(isset($_GET["numControlDelete"])){
        $db = new Database();
		$numControlDelete=($_GET["numControlDelete"]);
		$datos= $db->connect()->query("DELETE FROM usuarios WHERE numControl='$numControlDelete'");
        $row=$datos->fetch(PDO::FETCH_ASSOC);
        header('location: Usuario.php');
        }
	?>
                <form action="#" method="post">
                <table align="center">
                <tr>
                <th align="left"><h2>Tipo de usuario: </h2></th>
                <th><select name="rol_id" required>
                <option selected="true" disabled="disabled">Selecciona un rol de usuario</option>
                <option value="1">Profesor (1)</option>
	            <option value="2">Alumno (2)</option>
	            <option value="3">Administrador (3)</option>
                </select></th>
                </tr>
                <tr>
                <th align="left"><h2>Nombre: </h2></th>
                <th><input type="text" name="nombre" value="<?php 
                if(isset($row)){
                    echo ($row['nombre']);
                }?>" required pattern="[A-Za-z\sáéíóú]+"></th>
                </tr>
                <tr>
                <th align="left"><h2>Apellido paterno: </h2></th>
                <th><input type="text" name="apP" value="<?php 
                if(isset($row)){
                echo ($row['ApPaterno']);
                }?>" required pattern="[A-Za-z\sáéíóú]+"></th>
                </tr>
                 <tr>
                <th align="left"><h2>Apellido materno: </h2></th>
                <th><input type="text" name="apM" value="<?php
                if(isset($row)){
                echo ($row['ApMaterno']);
                }?>" required pattern="[A-Za-z\sáéíóú]+"></th>
                </tr>
                 <tr>
                <th align="left"><h2>Numero de control: </h2></th>
                <th><input type="text" name="numeroControl" value="<?php if(isset($row)){
                    echo ($row['numControl']);
                }?>" required pattern="[0-9]{8}"></th>
                </tr>
                 <tr>
                <th align="left"><h2>Contraseña: </h2></th>
                <th><input type="password" name="pass" value="<?php 
                if(isset($row)){
                echo ($row['password']);
                }?>" required minlength="5" maxlength="40" required pattern="[A-Za-z0-9]+"></th>
                </tr>
                </table>
                <br><br>
                <input type="submit" name="CrearModUsuario" value="Crear/Modificar usuario"
                style="background: green; color: white ; border-color: green; font-size: 18px;">
                &nbsp
                <input type="submit" name="Cancelar" value="Cancelar"
            style="background: red; color: white ; border-color: red; font-size: 18px;">
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