<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Depostio</title>
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
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i> <span class="ms-1 d-none d-sm-inline">Depositos</span> </a>
                                  <ul class="collapse nav flex-column ms-1" id="submenu3" data-bs-parent="#menu">
                                  <li class="w-100">
                                      <a href="../deposito/deposito.html" class="nav-link px-0"> <span class="d-none d-sm-inline" id="uno">Crear Deposito</span> </a>
                                  </li>
                                  <li>
                                      <a href="../consultar_deposito/con_deposito.html" class="nav-link px-0"> <span class="d-none d-sm-inline" id="uno">Consultar Deposito
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
        <H1>Realizar Deposito</H1>
        <form class="form" action="depositophp.php" method="POST">
        <label for="contraseña">Tipo de Documento: 
            
                 <select class="lista" name="tipo">
                 <option>Seleccione</option>
                    <option>CC</option>
                    <option>NUIP</option>
                    <option>PAP</option>
                    <option>NIT</option>
                </select>
          
        </label>
        <label for="docum"> Numero de Documento </label>   
        <input type="text" placeholder="Ingrese Numero"name="documento">
           <label for="docum"> Numero de telefono: </label>   
           <input type="text" placeholder="Ingrese Numero de telefono" name="telefono">
           <label for="docum">Valor a de positar: </label>        
           <input type="text" placeholder="Ingrese el valor" name="valor">
           <label for="docum">Codigo: </label>        
           <input type="text" placeholder="Ingrese el codigo" name="codigo">
   
           <label for="contraseña">Enviar a: 
  
                 <select class="lista">
                 <option>Seleccione</option>
                    <option>Correo</option>
                    <option>Mensaje</option>
                    <option>Imprimir</option>
                </select>
            
        
        </label>
 
           
        <input class="btn btn-efecto" type="submit" name="depositar" value="depositar">
           
         
    
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