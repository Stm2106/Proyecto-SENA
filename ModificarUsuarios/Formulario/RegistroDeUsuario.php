
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
    <br> <br> <br>
Nombre <br>          
<input type="text" name="Nombres"> <br> 
Apellidos:<br> 
           <input type="text" name="Apellidos">  <br>
Tipo de Documento:<br> 
                   
                   <select name="Lista" id="Lista">
                    <option>Seleccione</option>
                       <option>CC</option>
                       <option>NUIP</option>
                       <option>PAP</option>
                       <option>NIT</option>
                   </select><br> 
             
               
           Numero de Documento:  <br>    
           <input type="text"  name="Documento">  <br>
           Telefono:  <br>  
           <input type="text"  name="Telefono">  <br>
           Direccion:<br> 
           <input type="text"  name="Direccion">  <br>
           Correo Electronico:<br> 
           <input type="text" name="Correo">  <br>
           Nombre de Usuario:  <br>     
           <input type="text"  name="Usuario">  <br>
           Contraseña:<br>
           <input type="password"  name="Password">  <br> <br>
           <input type="submit" value="Registrar"> <br> <br>
    
</body>
</html>
