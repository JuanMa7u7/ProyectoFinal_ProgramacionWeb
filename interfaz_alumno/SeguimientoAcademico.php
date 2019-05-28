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
                    <h2>Seguimiento</h2>
                    <!--
          <h3><span id="MainContent_lblUsuario">LAFUENTE ARAIZA JUAN MANUEL</span> </h3> 
          -->
                    <br>
                    <br>
                    <table style="width: 100%">
        <tbody><tr>
            <td align="center" style="width: 600px;" dir="ltr">
                <div style="text-align: center; font-size: medium; font-weight: bold; background-color: rgb(29, 29, 29);
                    color: #FFFFFF; width: 755px;">
                    Asignaturas Aprobadas
                </div>
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
                <th scope="col" style="color:White;width:40px;">Calif.</th>
                <th scope="col" style="color:White;width:30px;">T. A.</th>
                <th scope="col" style="color:White;width:60px;">F. Prim</th>
                <th scope="col" style="color:White;width:60px;">F. Seg</th>
                <th scope="col" style="color:White;width:60px;">F. Ter.</th>
                <th scope="col" style="color:White;width:60px;">F. Aprob.</th>
                <th scope="col" style="color:White;width:60px;">Folio</th>
            </tr>
            <tr
                style="color:Black;background-color:rgb(168, 168, 168);border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;">1</td>
                <td class="ITL_tabla_celdaCourierCentrado"style="border-color:Black;">ACF0901</td>
                <td class="ITL_Tabla_celdaIzquierda10"style="border-color:Black;">CÁLCULO DIFERENCIAL</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">5</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">1</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">77</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">COSO </td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">15/08/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">02/12/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">16241950A </td>
            </tr>
            <tr
                style="color:Black;background-color:rgb(114, 114, 114);border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;">2</td>
                <td class="ITL_tabla_celdaCourierCentrado" style="border-color:Black;">AED1285</td>
                <td class="ITL_Tabla_celdaIzquierda10" style="border-color:Black;">FUNDAMENTOS DE PROGRAMACIÓN</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">5</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">1</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">81</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">CRPO </td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">15/08/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">23/01/2017</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">02/06/2017</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">17240644F </td>
            </tr>
            <tr
                style="color:Black;background-color:rgb(168, 168, 168);border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;">3</td>
                <td class="ITL_tabla_celdaCourierCentrado" style="border-color:Black;">AEF1041</td>
                <td class="ITL_Tabla_celdaIzquierda10" style="border-color:Black;">MATEMÁTICAS DISCRETAS</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">5</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">1</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">80</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">COSO </td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">15/08/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">02/12/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">16241960A </td>
            </tr>
            <tr
                style="color:Black;background-color:rgb(114, 114, 114);border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;">4</td>
                <td class="ITL_tabla_celdaCourierCentrado" style="border-color:Black;">SCH1024</td>
                <td class="ITL_Tabla_celdaIzquierda10" style="border-color:Black;">TALLER DE ADMINISTRACIÓN</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">4</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">1</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">87</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">COPO </td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">15/08/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">02/12/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">16241964A </td>
            </tr>
            <tr
                style="color:Black;background-color:rgb(168, 168, 168);border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;">5</td>
                <td class="ITL_tabla_celdaCourierCentrado"style="border-color:Black;">ACC0906</td>
                <td class="ITL_Tabla_celdaIzquierda10"style="border-color:Black;">FUNDAMENTOS DE INVESTIGACIÓN</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">4</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">1</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">93</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">COPO </td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">15/08/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">02/12/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">16241968A </td>
            </tr>
            <tr
                style="color:Black;background-color:rgb(114, 114, 114);border-color:Black;border-style:None;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;">
                <td style="border-color:Black;" style="border-color:Black;">6</td>
                <td class="ITL_tabla_celdaCourierCentrado" style="border-color:Black;">ACA0907</td>
                <td class="ITL_Tabla_celdaIzquierda10" style="border-color:Black;">TALLER DE ÉTICA</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">4</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">1</td>
                <td class="ITL_tabla_celdaCourierCentrado" align="center" style="border-color:Black;">82</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">COPO </td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">15/08/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;"></td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">02/12/2016</td>
                <td class="ITL_Tabla_celdaCentrado10" align="center" style="border-color:Black;">16241972A </td>
            </tr>
        </tbody>
    </table>

</div>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td align="center" style="width: 600px;" dir="ltr">
                <div style="text-align: center; font-size: medium; font-weight: bold; background-color: rgb(29, 29, 29);;
                    color: #FFFFFF; width: 641px;">
                    Asignaturas Cursando
                </div>
                <div>
	<table cellspacing="0" cellpadding="3" rules="cols" id="MainContent_grvAsignaturasCursando" style="background-color:White;border-color:Black;border-width:1px;border-style:None;border-collapse:collapse;">
		<tbody><tr style="color:White;background-color: rgb(29, 29, 29);;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;font-weight:normal;">
            <th scope="col" style="color:White;width:10px;border-color:Black;">No.</th>
            <th scope="col" style="color:White;width:65px;border-color:Black;">Clave</th>
            <th scope="col" style="color:White;width:150px;border-color:Black;">Nombre</th>
            <th scope="col" style="color:White;width:36px;border-color:Black;">Cred.</th>
            <th scope="col" style="color:White;width:36px;border-color:Black;">Sem.</th>
            <th scope="col" style="color:White;width:30px;border-color:Black;">T. C.</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">F. Prim</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">F. Seg</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">F. Ter.</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">Folio</th>
		</tr><tr>
			<td colspan="10">--</td>
		</tr>
	</tbody></table>
</div>
                <br>
                <br>
            </td>
        </tr>
        <tr>
            <td align="center" style="width: 600px;" dir="ltr">
                <div style="text-align: center; font-size: medium; font-weight: bold; background-color: rgb(29, 29, 29);
                    color: #FFFFFF; width: 641px;">
                    Asignaturas Reprobadas/Especial
                </div>
                <div>
	<table cellspacing="0" cellpadding="3" rules="cols" id="MainContent_grvAsignaturasReprobadas" style="background-color:White;border-color:Black;border-width:1px;border-style:None;border-collapse:collapse;">
		<tbody><tr style="color:White;background-color: rgb(29, 29, 29);border-color:Black;font-family:Arial,Helvetica,sans-serif;font-size:XX-Small;font-weight:normal;">
            <th scope="col" style="color:White;width:10px;border-color:Black;">No.</th>
            <th scope="col" style="color:White;width:65px;border-color:Black;">Clave</th>
            <th scope="col" style="color:White;width:150px;border-color:Black; ">Nombre</th>
            <th scope="col" style="color:White;width:36px;border-color:Black;">Cred.</th>
            <th scope="col" style="color:White;width:36px;border-color:Black;">Sem.</th>
            <th scope="col" style="color:White;width:30px;border-color:Black;">T. C.</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">F. Prim</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">F. Seg</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">F. Ter.</th>
            <th scope="col" style="color:White;width:60px;border-color:Black;">Folio</th>
		</tr><tr>
			<td colspan="10" style=border-color:Black;>--</td>
		</tr>
	</tbody></table>
</div>
                <br>
                <br>
            </td>
        </tr>
     </tbody></table>
                </div>
            </section>
        </div>
        </form>
        <footer class="footer">
            <strong>Copyright © 2019 - SIIA</strong>
        </footer>
    </body>

</html>