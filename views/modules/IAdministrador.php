

<html>
<head>
    <meta charset="UTF-8">
    <title>Universidad</title>
    <link rel=StyleSheet href="../../css/template.css" typr="text/css">
</head>

    <body>

        <header>
        <h1><img id="UTA" img src="../../images/UTA.png" width="150" height="150"></h1>
        </header> 


        <div>


        </div>
        <nav>
            <ul>
                <li> <a href="inicio.php"> Inicio</a> </li>
                <li> <a href="nosotros.php"> Nosotros</a> </li>
                <li> <a href="estudiantes.php"> Servicios</a> </li>
                <li> <a href="contactanos.php"> Contactenos</a> </li>
                <br>
                <li> <a href="../../models\logout.php"> Cerrar sesión</a> </li>
                
       
            </ul>
        </nav>

        </section>
        <br><br>
        <?php
            session_start();
            echo "Bienvenido/a ";
            echo $_SESSION['nom'];
        ?>
    </body>
</html>
