<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Document</title>
</head>
<body>
   <h1>
<?php
    $conexion = mysqli_connect("localhost","root","","lsc")
    or
       die("hay problema en la conexion");

    mysqli_query($conexion,"insert into pagos (Numero_Referencia, Nombre_Producto , Descripcion_Producto, Valor)
    values ('$_REQUEST[Numero_Referencia]','$_REQUEST[Nombre_Producto]','$_REQUEST[Descripcion_Producto]','$_REQUEST[Valor]')")

    or die("problemas con el select" .mysqli_error("$conexion"));
    mysqli_close($conexion);
    echo "PAGO GENERADO CORRECTAMENTE";
    ?>
       </h1>
</body>
</html>

