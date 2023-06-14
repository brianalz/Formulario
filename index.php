<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
  <link rel="shortcut icon" href="123.png">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="style.css">

</head>
<body>

  <section class="form-contact">
    <header>
      <span>
        <i class="fa fa-paper-plane" aria-hidden="true"></i>
      </span>
    </header>

    <form action="accion.php" class="contact" method="POST">
        <p><label>Fecha: <input type="date" name="fecha" required></p>

            <p><label>Hora: <input type="time" name="Hora" required></p>
           
         <p><label>Nombre: <input type="text" name="nombre" size="40" placeholder="Apellidos Y Nombre(s)"></p>
             
         <p><label>Edad:<input type="number" name="edad" step="any" placeholder="Escriba Su Edad"></p>
       
         <p><label>Sexo:
         <input type="radio" name="hm" value="h" required> Hombre
         <input type="radio" name="hm" value="m" required> Mujer
       </p>
       
         <p><label>Correo Electrónico<input type="text" name="email" size="40" placeholder="example@gmail.com" required></p>
       
         <p><label>Ciudad:<select name="lista" required>
         <option></option>
         <option>Abasolo</option>
         <option>Acuña</option>
         <option>Allende</option>
           <option>Arteaga</option>
           <option>Candela</option>
           <option>Castaños</option>
           <option>Cuatrociénegas</option>
           <option>Escobedo</option>
           <option>Francisco I.Madero</option>
           <option>Frontera</option>
           <option>General Cepeda</option>
           <option>Guerrero</option>
           <option>Hidalgo</option>
           <option>Jimenez</option>
           <option>Juárez</option>
           <option>La Madrid</option>
           <option>Matamoros</option>
           <option>Monclova</option>
           <option>Morelos</option>
           <option>Múzquiz</option>
           <option>Nadadores</option>
           <option>Nava</option>
           <option>Ocampo</option>
           <option>Parras</option>
           <option>Piedras Negras</option>
           <option>Progreso</option>
             <option>Ramos Arizpe</option>
             <option>Sabinas</option>
             <option>Sacramento</option>
             <option>Saltillo</option>
             <option>San Buena Aventura</option>
             <option>San Juan De Sabinas</option>
             <option>San Pedro</option>
             <option>Sierra Mojada</option>
             <option>Torreón</option>
             <option>Viesca</option>
             <option>Villa Unión</option>
             <option>Zaragoza</option>
           
         </select></p>
         
        <p><label>Estado:<select name="menu" required>
         <option></option>
         <option>Aguascalientes</option>
         <option>Baja California</option>
         <option>Baja California Sur</option>
           <option>Campeche</option>
           <option>Coahuila</option>
           <option>Colima</option>
           <option>Chiapas</option>
           <option>Chihuahua</option>
           <option>Durango</option>
           <option>Distrito federal</option>
           <option>Guanajuato</option>
           <option>Guerrero</option>
           <option>Hidalgo</option>
           <option>Jalisco</option>
           <option>México</option>
           <option>Michoacan</option>
           <option>Morelos</option>
           <option>Nayarit</option>
           <option>Nuevo León</option>
           <option>Oaxaca</option>
           <option>Puebla</option>
           <option>Queretaro</option>
           <option>Quintana Roo</option>
           <option>San Luis Potosi</option>
           <option>Sinaloa</option>
           <option>Sonora</option>
           <option>Tabasco</option>
           <option>Tamaulipas</option>
           <option>Tlaxcala</option>
           <option>Veracruz</option>
           <option>Yucatán</option>
           <option>Zacatecas</option>
       </select></p>
       
           <p><label>Domicilio: <input type="text" name="domicilio" size="40"placeholder="Escriba Su Domicilio" required></p>
       
             <p><label>Colonia: <input type="text" name="colonia" size="40"placeholder="Escriba Su Domicilio" required></p>
       
               <p><label>Número: <input type="text" name="number" size="40"placeholder="Escriba Su Domicilio" required></p>
       
             <p><label>Código Postal: <input type="text" name="cp" size="40" placeholder="Escriba Su CP" required></p>
       
          <p><label>Grado de Estudios: <input type="text" name="estudios" size="40" placeholder="Escriba Su Grado De Estudios" required></p>
       
             <p><label>Idiomas: <input type="text" name="idioma" size="40"placeholder="Escriba Su Respuesta" required></p>
       
             <p><label>Puesto solicitado: <input type="text" name="puesto" size="40" placeholder="Puesto Que Le Interesa" required></p>
       
             <p><label>Teléfono: <input type="text" name="numero" size="40" placeholder="Escriba Su Telefono O Numero Celular" required></p>
       
             
             
             <button type="reset">
         <img src="borrar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
         Borrar
       </button>
       
             <button>
         <img src="guardar.png" alt="imagen" width="32" height="32" style="vertical-align: middle">
         Enviar
       </button>
       </form>
       
  </section>
  
</body>
</html>