<html>
<head>
    <meta charset="UTF-8">
    <title>Universidad</title>
    <link rel=StyleSheet href="../../css/login.css" typr="text/css">
    <link rel=StyleSheet href="../../css/template.css" typr="text/css">
</head>

<body>


<header>
<h1><img id="UTA" img src="../../images/UTA.png" width="150" height="150"></h1>
</header> 
<nav>
                    <ul>
                    <li> <a href="inicio.php"> Inicio</a> </li>
                    <li> <a href="nosotros.php"> Nosotros</a> </li>
                    <li> <a href="contactanos.php"> Contactenos</a> </li>
                
                   
                
                </ul>
            </nav>

<br><br><br><br><br><br><br><br><br><br>
<div class="login">
	<h1>Login</h1>
 
    <form action="../../models/validar.php" method="post">
    	
    
    <input type="text" id="usuario" name="usuario" placeholder="Usuario" required="required" />
        <input type="password" id="contraseña" name="contraseña" placeholder="Contraseña" required="required" />
        <input type="submit" value="Ingresar">

        </form>
</div>
</body>

</html>