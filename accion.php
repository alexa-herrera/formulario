<html>
  <head>
    <title>PHP Test</title>
       <link rel="stylesheet" href="style.css">
  </head>
  <body>
 <h2>Datos capturados</h2>
    
Fecha de la encuesta:<?php echo htmlspecialchars($_POST['fecha']); ?>.<br>
    Nombre:<?php echo htmlspecialchars($_POST['name']); ?>.<br>
    
    Apellido Paterno:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br>
    Apellido Materno:<?php echo htmlspecialchars($_POST['materno']); ?>.<br>
    Correo electronico:<?php echo (int)$_POST['email']; ?> <br>

    Telefono:<?php echo htmlspecialchars($_POST['paterno']); ?>.<br>
    
    Genero:<?php echo htmlspecialchars($_POST['hmo']); ?>.<br>
    
    Edad:<?php echo (int)$_POST['age']; ?> <br>
    
 Fecha de nacimiento:<?php echo (int)$_POST['birthday']; ?><br>

 <script src="https://replit.com/public/js/replit-badge-v2.js" theme="dark" position="bottom-right"></script>
  </body>
</html>