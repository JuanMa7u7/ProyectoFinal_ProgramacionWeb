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

                <script src="Scripts/ValInternetExplorer.js" type="text/javascript"></script>
                <script src="Scripts/AccionesControles.js" type="text/javascript"></script>
                <script src="Scripts/ValidaEvaluacionDocente.js" type="text/javascript"></script>
                <script src="Scripts/Ajax.js" type="text/javascript"></script>
                <script src="Scripts/Formatos.js" type="text/javascript"></script>
                <br>

                <div id="divBienvenida" style=" font-size:15pt ; text-align:center ; width :100% ">
                    <h2>Modificar Prehorario</h2>
                    <!--
          <h3><span id="MainContent_lblUsuario">LAFUENTE ARAIZA JUAN MANUEL</span> </h3> 
          -->
                    <br>
                    <br>
					<h4>PreHorario registrado</h4>
                    <br>
                    <br>
                    <table style="width: 100%">
        <tbody><tr>
            <td align="center" style="width: 600px;" dir="ltr">
                
                <div>
    <table cellspacing="0" cellpadding="3" rules="cols" id="MainContent_grvAsignaturasAprobadas"
        style="background-color:White;border-color:Black;border-width:1px;border-style:None;border-collapse:collapse;">
        <tbody style="background-color: rgb(29, 29, 29);border-color:Black;">
            <tr
                style="color:White;background-color:rgba(26, 26, 26, 0.657);font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;font-weight:normal;">
                <th scope="col" style="color:White;width:10px;">No.</th>
                <th scope="col" style="color:White;width:65px;">Clave</th>
                <th scope="col" style="color:White;width:150px;">Nombre</th>
                <th scope="col" style="color:White;width:36px;">Cred.</th>
                <th scope="col" style="color:White;width:36px;">Sem.</th>
                <th scope="col" style="color:White;width:60px;">Horas</th>
                <th scope="col" style="color:White;width:60px;"></th>
            </tr>
			
			
			<?php
				
				include_once("../database/database.php");
				
				
				$conexion = new Database();
				$query = "SELECT * FROM materia WHERE registrado = 'y'";
				$resultado = $conexion->connect()->query($query);
				$cantidadMaterias=0;
				
				if($cantidadMaterias >= 4){
					
				}
				
				while($row=$resultado->fetch(PDO::FETCH_ASSOC)){
					$cantidadMaterias++;
					
			?>
			
            <tr
                style="color:Black;background-color:rgb(168, 168, 168);border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;"><?php echo $cantidadMaterias;?></td>
                <td class="ITL_tabla_celdaCourierCentrado"style="border-color:Black;"><?php echo $row['idMateria'];?></td> <!-- clave de materia-->
                <td class="ITL_Tabla_celdaIzquierda10"style="border-color:Black;"><?php echo $row['nombre'];?></td><!--nombre de materia -->
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;"><?php echo $row['creditos'];?></td><!-- créditos -->
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;"><?php echo $row['semestre'];?></td><!-- semestre-->
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;"><?php echo $row['horas'];?></td><!--horas-->
				<td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">
				
				<a href = "DarBaja.php?idMateria=<?php echo $row['idMateria'];?>">Dar de baja</a>
				</td>
				
            </tr>
				
				<?php
				}
			?>
			
			
            </tr>
        </tbody>
    </table>
	<br>
	<br>
</div>
		<div>
		<h4>Grupos disponibles</h4>
		</div>
            <table cellspacing="0" cellpadding="3" rules="cols" id="MainContent_grvAsignaturasAprobadas"
        style="background-color:White;border-color:Black;border-width:1px;border-style:None;border-collapse:collapse;">
        <tbody style="background-color: rgb(29, 29, 29);border-color:Black;">
            <tr
                style="color:White;background-color:rgba(26, 26, 26, 0.657);font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;font-weight:normal;">
                <th scope="col" style="color:White;width:10px;">No.</th>
                <th scope="col" style="color:White;width:65px;">Clave</th>
                <th scope="col" style="color:White;width:150px;">Nombre</th>
                <th scope="col" style="color:White;width:36px;">Cred.</th>
                <th scope="col" style="color:White;width:36px;">Sem.</th>
                <th scope="col" style="color:White;width:60px;">Horas</th>
                <th scope="col" style="color:White;width:60px;"></th>
            </tr>
			
			
			<?php
				
				include_once("../database/database.php");
				
				$inc=0;
				$conexion = new Database();
				$query = "SELECT * FROM materia WHERE registrado != 'y'";
				$resultado = $conexion->connect()->query($query);
				while($row=$resultado->fetch(PDO::FETCH_ASSOC)){
					$inc++;
					
			?>
			
            <tr
                style="color:Black;background-color:rgb(168, 168, 168);border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;"><?php echo $inc;?></td>
                <td class="ITL_tabla_celdaCourierCentrado"style="border-color:Black;"><?php echo $row['idMateria'];?></td> <!-- clave de materia-->
                <td class="ITL_Tabla_celdaIzquierda10"style="border-color:Black;"><?php echo $row['nombre'];?></td><!--nombre de materia -->
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;"><?php echo $row['creditos'];?></td><!-- créditos -->
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;"><?php echo $row['semestre'];?></td><!-- semestre-->
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;"><?php echo $row['horas'];?></td><!--horas-->
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;"><a href = "DarAlta.php?idMateria=<?php echo $row['idMateria'];?>">Dar de alta</a></td><!--dar de alta-->
            </tr>
				
				<?php
				}
			?>
			
			
            </tr>
        </tbody>
    </table>
                </div>
            </section>
        </div>
		
		
		
		
		
		
        
        <footer class="footer">
            <strong>Copyright � 2019 - SIIA</strong>
        </footer>
    </body>

</html>