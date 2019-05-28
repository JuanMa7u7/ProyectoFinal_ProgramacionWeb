<?php

	session_start();
	if (!isset($_SESSION['rol'])) {
		header('location: ../index.php');
	}else{
		if ($_SESSION['rol']!=2) {
			header('location: ../index.php');
		}
    }
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
            <nav class="dark w-shadow">
                <div id="MenuPrincipal" class="nav-container" >
                    <ul id="nodoPrincipal" class="nav-menu slideUp w-divider">
                        <li><a href="Menu_Alumno.php"><h1>Inicio</h1></a></li>
                        <li class="nav-dropdown">
                            <a href="Menu_Alumno.php"><h1>Situacion Academica</h1><span
                                    class="s-button s-collapse-trigger">+</span></a>
                            <ul>
                                <li><a
                                        href="SeguimientoAcademico.html"><h1>Seguimiento</h1></a>
                                </li>
                                <li><a href="HorarioEvaluacion.html"><h1>Horario
                                        Actual</h1></a></li>
                                <li><a href="GlobalesEspecialesEvaluacion.html"><h1>Evaluaciones
                                        Globales/Especiales</h1></a></li>
                            </ul>
                        </li>
                        <li class="nav-dropdown">
                            <a href="Menu_Alumno.php¿"><h1>Inscripcion</h1><span
                                    class="s-button s-collapse-trigger">+</span></a>
                            <ul>
                                <li><a href="ProcesoInscripcion.html"><h1>Proceso
                                        de Inscripción</h1></a></li>
                                <li><a href="NumeroReferencia..html"><h1>Número
                                        Referencia Bancaria</h1></a></li>
                                <li><a href="MateriasPosibles.html"><h1>Materias
                                        Posibles</h1></a></li>
                                <li><a href="PreHorario.html"><h1>PreHorarrio</h1></a>
                                </li>
                                <li><a href="PreHorarioEditar.html" name="cerrarSesion"><h1>Modificar
                                        PreHorario</h1></a></li>
                            </ul>
                        </li>
                        <li><a href="Avisos.html"><h1>Avisos</h1></a></li>
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

                <script src="Scripts/ValInternetExplorer.js" type="text/javascript"></script>
                <script src="Scripts/AccionesControles.js" type="text/javascript"></script>
                <script src="Scripts/ValidaEvaluacionDocente.js" type="text/javascript"></script>
                <script src="Scripts/Ajax.js" type="text/javascript"></script>
                <script src="Scripts/Formatos.js" type="text/javascript"></script>
                <br>

                <div id="divBienvenida" style=" font-size:15pt ; text-align:center ; width :100% ">
                    <h2>Bienvenido</h2>
                    <!--
          <h3><span id="MainContent_lblUsuario">LAFUENTE ARAIZA JUAN MANUEL</span> </h3> 
          -->
                    <br>
                    <table style="width: 100%">

                        <tbody>
                            <tr>
                                <td align="center" dir="ltr">
                                    <h2>AVISOS</h2>
                                    <div>
                                        <table cellspacing="0" cellpadding="3" rules="cols"
                                            id="MainContent_wcAvisos1_grvInformacion"
                                            style="background-color:gray;
                                            border-color:black;border-width:1px;border-style:None;border-collapse:collapse;">
                                            <tbody>
                                                <tr
                                                    style="color:White;background-color:#2E2E2E;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;font-weight:normal;">
                                                    <th scope="col" style="color:White;width:13px;">No.</th>
                                                    <th scope="col" style="color:WHITE;width:150px;">Departamento
                                                    </th>
                                                    <th scope="col" style="color:White;width:350px;">Mensaje</th>
                                                    <th scope="col" style="color:White;width:80px;">Fecha
                                                        Publicacion</th>
                                                    <th scope="col" style="color:White;width:50px;">Requerido para
                                                        Inscripcion</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="5" style="color:White;">- - - -</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <br>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <br>
                </div>
            </section>
        </div>
        </form>
        <footer class="footer">
            <strong>Copyright © 2019 - SIIA</strong>
        </footer>
    </body>

</html>
