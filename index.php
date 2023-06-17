<html>
  <head>
    <title>PHP Test</title>
      <link rel="stylesheet" href="style.css">
     
  </head>
  <body>
   <header>
      
    <?php echo '<center><p>Encuesta para conocer tu cumpleaños</p></center>'; ?> 
   </header>
    
    <div id="formulario">
    <form action="accion.php" method="post">
      
      <p><label> Fecha de la encuesta: <input type="date" name="fecha" placeholder="Escribe la fecha de la encuesta" required></label></p>
   
      <p><label> Nombre: <input type="text" name="name" placeholder="Escribe tu nombre" required></label></p>
      
      <p><label> Apellido paterno: <input type="text" name="paterno" placeholder="Escribe tu apellido paterno" required></label></p>
      
      <p><label> Apellido Materno: <input type="text" name="materno" placeholder="Escribe tu apellido materno" required></label></p>
      
      <p><label> Correo Electronico: <input type="email" name="email" placeholder="Escribe tu correo electronico" required></label></p>
      
      <p><label> Telefono: <input type="tel" name="phone"  placeholder="Escribe tu telefono" required></label></p>

      <p><label>Genero <input type="radio" name="hmo"> Hombre<br>
<input type="radio" name="hmo"> Mujer
      <input type="radio" name="hmo"> Otro</label>
    </p>

      <p><label> Edad: <input type="number" name="age" placeholder="Escribe tu edad" required></label></p>

      <p><label>Fecha de nacimiento: <input type="date" name="birthday" min="2000-01-01" max="2012-12-31"
 required></label></p>

    

      <button type="reset">Borrar</button>

         <button type="submit">Enviar</button>


    </form>
    </div>
  </body>
</html>


     
      