<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuarios</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
    <link href="./css/styles.css" rel="stylesheet"> 
    <link rel="stylesheet" href="css/styles.css">
  
<body>
    <div class="container-fluid">
        <div class="row flex-nowrap">
            <div class="col-auto col-md-3 col-xl-2 px-sm-2 px-0 bg-dark">
                <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100">
                  <img src="img/logo.jpg"  id="img"  >
              
                    <a  class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none">
                      <center>  <span class="fs-5 d-none d-sm-inline">Menu</span></center>
                    </a>
                
                    <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                        <li class="nav-item">
                            <a href="../Home/index.html" class="nav-link align-middle px-0">
                              <i class="fa fa-home" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Home</span>
                            </a>
                        </li>
                        <li>
                            <a href="#submenu1" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                              <i class="fa fa-user" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Usuarios</span> </a>
                            <ul class="collapse show nav flex-column ms-1" id="submenu1" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="../ActualizarUsuarios/index.html" class="nav-link px-0"> <span class="d-none d-sm-inline"id="uno">Consultar Usuario</span>  </a>
                                </li>
                                <li>
                                    <a href="../RegistroUsuarios/registro.html" class="nav-link px-0"> <span class="d-none d-sm-inline"id="uno">Crear Usuario</span> </a>
                                </li>
                               
                            </ul>
                        </li>
                  
                        <li>
                            <a href="#submenu2" data-bs-toggle="collapse" class="nav-link px-0 align-middle ">
                              <i class="fa fa-money" aria-hidden="true"></i><span class="ms-1 d-none d-sm-inline">Pagos</span></a>
                            <ul class="collapse nav flex-column ms-1" id="submenu2" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="../pagos1/Pagos.html" class="nav-link px-0"> <span class="d-none d-sm-inline"id="uno">Crear Pago</span></a>
                                </li>
                                <li>
                                    <a href="../Consultar_Pagos/con_Pagos.html" class="nav-link px-0"> <span class="d-none d-sm-inline"id="uno">Consultar Pago</span></a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                              <i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Transacciones</span> </a>
                                <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                <li class="w-100">
                                    <a href="../deposito/deposito.html" class="nav-link px-0"> <span class="d-none d-sm-inline" id="uno">Crear Transaccion</span> </a>
                                </li>
                                <li>
                                    <a href="../consultar_deposito/con_deposito.html" class="nav-link px-0"> <span class="d-none d-sm-inline" id="uno">Consultar Transaccion
                                    </span> </a>
                                </li>
                              
                                
                            </ul>
                        </li>
                        <li>
                          <a href="#submenu3" data-bs-toggle="collapse" class="nav-link px-0 align-middle">
                            <i class="fa fa-credit-card" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Retiros</span> </a>
                              <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                              <li class="w-100">
                                  <a href="../consultar_retiro/con_Retiro.html" class="nav-link px-0"> <span class="d-none d-sm-inline" id="uno">Cosultar Retiro</span> </a>
                              </li>
                              <li>
                                  <a href="../Retiro/Retiro.html" class="nav-link px-0"> <span class="d-none d-sm-inline" id="uno">Realizar Retiro
                                  </span> </a>
                              </li>
                            
                              
                          </ul>
                      </li>
                       
                    
                </div>
            </div>
            <div class="col py-3">
                <div class="content"></div>
       </div>   
    <div class="loginbox">
        <img class="avatar"src="img/logo.jpg" alt="logo LSC INFORMATION">
        <center>
        <h1>PAGO REALIZADO CORRECTAMENTE</h1>
        <br>
        <h1>Informacion Del Pago</h1>
        <br>
        <h4>
        <?php
        if (isset($_POST["Registrar"])) {
        if(!empty($_POST["Numero_Referencia"]) && is_numeric($_POST["Numero_Referencia"]) && !preg_match("/[a-z]/",$_POST["Numero_Referencia"]) && strlen($_POST["Numero_Referencia"]) <= 15
            && !empty($_POST["Nombre_Producto"])  && strlen ($_POST["Nombre_Producto"])&& strlen($_POST["Nombre_Producto"]) <=20
          && !empty($_POST["Descripcion_Producto"])  && strlen ($_POST["Descripcion_Producto"])&& strlen($_POST["Descripcion_Producto"]) <=60
          && !empty($_POST["Valor"]) && is_numeric($_POST["Valor"]) && !preg_match("/[a-z]/",$_POST["Valor"])&& strlen($_POST["Valor"]) >=4
          ){
            $conexion = mysqli_connect("localhost","root","","lscinformation")
    or
       die("hay problema en la conexion");
       $codigopago=rand(10000,1000000);
       mysqli_query($conexion,"insert into pagos (Numero_Referencia, Nombre_Producto , Descripcion_Producto, Valor)
       values ('$_REQUEST[Numero_Referencia]','$_REQUEST[Nombre_Producto]','$_REQUEST[Descripcion_Producto]','$_REQUEST[Valor]')")

       or die("problemas con el select" .mysqli_error("$conexion"));
       mysqli_close($conexion);
       $fecha=date("m-d-y");
       $hora=date("G:H");
         echo "Nombre del Producto:".$_POST["Nombre_Producto"]."<br/>"."<br/>". "Numero De Referencia:".$_POST["Numero_Referencia"]."<br>" ."<br/>" ."Descripcion Del Producto:".$_POST["Descripcion_Producto"]."<br>" ."<br/>". "Valor:".$_POST["Valor"]."<br>"."<br>"."<br>";
         echo "Codigo: " .$codigopago."ㅤㅤㅤㅤㅤ"."Fecha: " .$fecha;
         }           
         else {
          echo "Hay un problema con los datos del pago, intenta nuevamente";
         }
         
            
         }
         

?>
</h4>
  </center>
           
    </div>
            </div>
        </div>
    </div>
              </div>
              <div class="offcanvas-body">
             
              </div>
            </div>
                        

</body>

</html>