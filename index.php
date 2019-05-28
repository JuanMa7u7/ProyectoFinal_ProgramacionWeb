<?php
	include ('database/database.php');
	session_start();
	if (isset($_GET['cerrar_sesion'])) {
		session_unset();
		session_destroy();
		header('location: index.php');
	}
	if(isset($_SESSION['rol'])){
		switch ($_SESSION['rol']) {
			case 1:
				header('location: interfaz_profesor/Menu_Profesor.php');
				break;
			case 2:
				header('location: interfaz_alumno/Menu_Alumno.php');
				break;
			case 3:
				header('location: interfaz_administrador/Menu_Administrador.php');
			default:
				# code...
				break;
		}
	}
	if (isset($_POST['numControl']) and isset($_POST['password'])) {
		$numControl = $_POST['numControl'];
		$password = $_POST['password'];
		//$nombre = $_POST['nombre'];
		//$apPaterno = $_POST['ApPaterno'];
		//$apMaterno = $_POST['ApMaterno'];
		$db = new Database();
		$query = $db->connect()->prepare('select * from usuarios where numControl=:numControl and password=:password');
		$query->execute(['numControl'=>$numControl, 'password'=>$password]);

		$row = $query->fetch(PDO::FETCH_NUM);
		if($row ==true){
			//validar el rol
			$rol= $row[2];
			$_SESSION['rol']=$rol;
			switch ($_SESSION['rol']) {
			case 1:
				header('location: interfaz_profesor/Menu_Profesor.php');
				break;
			case 2:
				header('location: interfaz_alumno/Menu_Alumno.php');
				break;
			case 3:
				header('location: interfaz_administrador/Menu_Administrador.php');

			default:
				# code...
				break;
		}
		}else{
			//El usuario no existe
			echo '<script language="JavaScript" type="text/javascript">alert("Usuario o contraseña incorrectas");</script>';
		}
	}
?>

<html lang="es-mx"><head><title>
	SIIA -  Acceso
</title>
	<link rel="stylesheet" type="text/css" href="styles/Site.css">
    <link rel="stylesheet" type="text/css" href="styles/MenuHorizontalAnimado.css">
    <link rel="stylesheet" type="text/css" href="styles/Contenido.css">
	
</head>
<body>
	<form action="#" method="POST">
		<header>
			<div id="Encabezado">
				<div class="title">
					<img src="img/banner.png" id="imgEncabezado">
				</div>         
				<nav class="dark w-shadow">
				</nav>   
			</div>
		</header>
		<div class="page">       
			<section class="main">			
    <table style="width: 100%">
        <tbody><tr>
            <td style="text-align:center;">                 
                <div class="login">
					<h1>Acceso al SIIA</h1>
                                    <center>
									
									<span class="login-Titulo">Usuario (Numero Control)</span>
                                    <input type="text" name="numControl" tabindex="1" class="login-input" placeholder="Usuario (Numero Control)">
                                    <p>        
                                    <span class="login-Titulo">Password</span>
                                    <input type="password" name="password" tabindex="2" class="login-input" placeholder="Password">
                                    <p><p>                  
									<input type="submit" value="Ingresar" href="Menu" 
									tabindex="4" class="login-submit"
									style="background: green; color: white ; border-color: green; font-size: 18px;">
									
                                    </center>
                </div>

            </td>
        </tr>
    </tbody></table>

			</section>
		</div>
</form>
	<footer>
		<center><strong>Copyright © 2019 - SIIA</strong></center>
	</footer> 

</form>
</body></html>