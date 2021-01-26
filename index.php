<html>
<head>
    <meta charset="UTF-8">
    <title>Universidad</title>
    <link rel=StyleSheet href="css/template.css" typr="text/css">
</head>

    <body>

        <header>
        <h1><img id="UTA" img src="images/UTA.png" width="150" height="150"></h1>
        </header> 

        <?php
            require_once("models/isLogin.php");

            if($estado){
                
                if($perfil=='Administrador'){
                   
                   
                    echo "Bienvenido/a ";
                    echo $_SESSION['nom'];
                    ?>
                        <nav>
                        <ul>
                        <li> <a href="views\modules\inicio.php"> Inicio</a> </li>
                        <li> <a href="views\modules\nosotros.php"> Nosotros</a> </li>
                        <li> <a href="estudiantes.php"> Servicios</a> </li>
                        <li> <a href="views\modules\contactanos.php"> Contactenos</a> </li>
                        
                        <br>
                        <li> <a href="models\logout.php"> Cerrar sesión</a> </li>
                       
                    
                    </ul>
                </nav>
                <?php
                }else{
                    
                    echo "Bienvenido/a ";
                echo $_SESSION['nom'];
                ?>
                    <nav>
                    <ul>
                    <li> <a href="views\modules\inicio.php"> Inicio</a> </li>
                    <li> <a href="views\modules\nosotros.php"> Nosotros</a> </li>
                    <li> <a href="views\modules\contactanos.php"> Contactenos</a> </li>
                    <br>
                    <li> <a href="models\logout.php"> Cerrar sesión</a> </li>
                   
                
                </ul>
            </nav>
                <?php
                }
                ?>


              
        <?php
            }else{
            
                ?>
                    <nav>
                    <ul>
                    <li> <a href="views\modules\inicio.php"> Inicio</a> </li>
                    <li> <a href="views\modules\nosotros.php"> Nosotros</a> </li>
                    <li> <a href="views\modules\contactanos.php"> Contactenos</a> </li>
                    <br>
                    <li> <a href="views\modules\login.php"> Iniciar Sesión</a> </li>
                   
                
                </ul>
            </nav>
                <?php
            }
        ?>
        

        </section>
    </body>
</html>
