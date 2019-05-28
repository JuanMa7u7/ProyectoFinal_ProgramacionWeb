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

                <div id="divBienvenida" style=" font-size:15pt ; text-align:center ; width :100% ;">
                    <h2>Bienvenido Adminsitrador</h2>
                    <br>
                    <br>








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
        <footer class="footer">
            <strong>Copyright © 2019 - SIIA</strong>
        </footer>
    </body>

</html>
