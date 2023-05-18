<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="Registros.php" method="POST">
     <br> <br>
           <label for="name">Nombres: </label>
           <input type="text" placeholder="Ingrese Nombres" name="Nombres"> <br>
           <label for="lastname">Apellidos: </label>
           <input type="text" placeholder="Ingrese Apellidos" name="Apellidos">  <br>
           <label for="kinddocument">Tipo de Documento: 
              
                   
                   <select class="Lista" name="Lista">
                    <option>Seleccione</option>
                       <option>CC</option>
                       <option>NUIP</option>
                       <option>PAP</option>
                       <option>NIT</option>
                   </select> <br>
               
           </label>        
           <label for="docum">Numero de Documento: </label>        
           <input type="text" placeholder="Ingrese Numero" name="Documento">  <br>
           <label for="phonenumber">Telefono: </label>        
           <input type="text" placeholder="Ingrese documento" name="Telefono"> <br> 
           <label for="adress">Direccion: </label>        
           <input type="text" placeholder="Ingrese Direccion" name="Direccion">  <br>
           <label for="email">Correo Electronico: </label>        
           <input type="text" placeholder="Ingrese correo" name="Correo">  <br>
           <label for="useername">Nombre de Usuario: </label>        
           <input type="text" placeholder="Ingrese correo" name="Usuario">  <br>
           <label for="clave">Contraseña: </label>        
           <input type="clave1" placeholder="Ingrese correo" name="Password">  <br>
           <input type="submit" value="Registrar">
</body>
</html>