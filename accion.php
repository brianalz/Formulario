<html>
  <head>
    <title>PHP Test</title>
     <link rel="shortcut icon" href="123.png">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
     <div class="container">
       <div class="header">
</div><hr>
    <center><h1>DATOS CAPTURADOS DE LA ENCUESTA</h1></center><hr>
    <h2><center>Fecha:<?php echo htmlspecialchars($_POST['fecha']); ?>.<br>
    Hora:<?php echo htmlspecialchars($_POST['Hora']); ?>.<br>
    Nombre:<?php echo htmlspecialchars($_POST['nombre']); ?>.<br>
    Edad:<?php echo (int)$_POST['edad']; ?> 
    Sexo:<?php echo htmlspecialchars($_POST['hm']); ?>.<br>
    Correo Electronico:<?php echo htmlspecialchars($_POST['email']); ?>.<br>
    Ciudad:<?php echo htmlspecialchars($_POST['lista']); ?>.<br>
    Estado:<?php echo htmlspecialchars($_POST['menu']); ?>.<br>
    Domicilio:<?php echo htmlspecialchars($_POST['domicilio']); ?>.<br>
    Colonia:<?php echo htmlspecialchars($_POST['colonia']); ?>.<br>
    Número:<?php echo htmlspecialchars($_POST['number']); ?>.<br>
    Codigo Postal:<?php echo htmlspecialchars($_POST['cp']); ?>.<br>
    Grado De Estudios:<?php echo htmlspecialchars($_POST['estudios']); ?>.<br>
    Idiomas:<?php echo htmlspecialchars($_POST['idioma']); ?>.<br>
    Puesto Solicitado:<?php echo htmlspecialchars($_POST['puesto']); ?>.<br>
    Telefono:<?php echo htmlspecialchars($_POST['numero']); ?>.<br>
    


  </body>
</html>