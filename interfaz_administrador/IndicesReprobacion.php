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
?>
<?php
	if(isset($_POST['cerrarSesion'])){
		header('location: ../index.php?cerrar_sesion=3');
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
                    <h2>Indices de reprobacion</h2>
                    <br>
                    <!---------------------------------------------------------------------------------->
                    <!--Implementacion de la API Google Charts-->
                    
    <center>
    <form action="IndicesReprobacion.php" metod="GET">
    <table>
    <tr>
    <th>Nombre del profesor: <select name="nombreProfesor" required>
     <option selected="true" disabled="disabled" value="">Selecciona un profesor</option>
    <?php
    include_once '../database/database.php';
    $db = new Database();
    $obtenerProfesores = $db->connect()->query("SELECT nombre, apPaterno, apMaterno FROM usuarios WHERE rol_id = '1'");
    while ($row=$obtenerProfesores->fetch(PDO::FETCH_ASSOC)) {
			$Con=$row['nombre'] . " " . $row['apPaterno'] . " " . $row['apMaterno'];
			
    echo "<option value=\"$Con\">$Con</option>";
    }
    ?>
    
    </select>
    </th>
    <th>Materia: <select name="nombreMateria" required>
    <option selected="true" disabled="disabled" value="">Selecciona una materia</option>
    <option value="Calculo Diferencial">Calculo Diferencial</option>
    </select>
    </th>
    </tr>
    </table>
    <br>
    <input type="submit" name="ConsultarIndiceReprobacion" value="Consultar"
    style="background: green; color: white ; border-color: green; font-size: 18px;">
    <br>
    </form>
    <br>
    <!--Desplegar grafica-->
    <?php
        if(isset($_GET['ConsultarIndiceReprobacion'])){
            $alumnosAprobados = 18;
            $alumnosReprobados = 12;
            $alumnosTotales = $alumnosAprobados + $alumnosReprobados;
            echo "Indice de reprobacion del profesor <b>" . $_GET['nombreProfesor'] .
            "</b> en la materia <b>". $_GET['nombreMateria'] ."</b>\n";
            echo "
            <script type=\"text/javascript\" src=\"https://www.gstatic.com/charts/loader.js\"></script>
    <script type=\"text/javascript\">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {
        
        var data = google.visualization.arrayToDataTable([
          ['Suma de calificaciones del grupo', 'Cantidad de alumnos'],
          ['Alumnos aprobados'," . $alumnosAprobados ."],
          ['Alumnos reprobados',". $alumnosReprobados ."],
        ]);
        var options = {
          title: \"Indice de reprobacion del profesor \"  
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
    </script>
            <div id=\"piechart\" style=\"width: 900px; height: 500px;\" ></div>";
        }
        ?>
    </center>
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
