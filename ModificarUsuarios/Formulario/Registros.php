<?php
$nombre=$_POST['Nombres'];
$Apellidos=$_POST['Apellidos'];
$TipoDoc=$_POST['Lista'];
$NumDoc=$_POST['Documento'];
$Telefono=$_POST['Telefono'];
$Direccion=$_POST['Direccion'];
$Correo=$_POST['Correo'];
$Usuario=$_POST['Usuario'];
$Contraseña=$_POST['Password'];

echo 'Bienvenido a LSC INFORMATION '.$nombre." ".$Apellidos;
echo '<br>';
echo '<br>';
echo "Sus datos registrados son: ";
echo '<br>';
echo $TipoDoc;
echo '<br>';
echo $NumDoc;
echo '<br>';
echo $Telefono;
echo '<br>';
echo $Direccion;
echo '<br>';
echo $Correo;
echo '<br>';
echo $Usuario;
echo '<br>';
echo $Contraseña;



?> 