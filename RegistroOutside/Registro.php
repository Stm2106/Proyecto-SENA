
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
    <nav>
        <a href="index.html"> <img src="" alt=""></a> 
        <div class="nav-partes">
            <ul>
                <li> <a href="../Home/index.html">HOME</a></li>
                <li> <a href="#servicioss">SERVICIOS</a></li>
                <li> <a href="#quienessomos">QUIENES SOMOS</a></li>
                <li> <a href="#contacto">CONTACTO</a></li>
                <li> <a href="../Usuarios/login.html">INICIAR SESION</a></li>
            </ul>

        </div>
    </nav> 
    <div class="loginbox">
        <img class="avatar"src="img/logo.jpg" alt="logo LSC INFORMATION">
        <H1>Registro de Usuarios</H1>
        <form action="Validaciones.php" method="POST">
            <label for="name">Nombres: </label>
            <input type="text" name="Nombres" placeholder="Ingrese Nombres"> 
            <label for="lastname">Apellidos: </label>
            <input type="text" name="Apellidos"placeholder="Ingrese Apellidos"> 
            <label for="Lista">Tipo de Documento: 
          
                    
                    <select class="Lista" name="Lista">
                     <option>Seleccione</option>
                        <option>CC</option>
                        <option>NUIP</option>
                        <option>PAP</option>
                        <option>NIT</option>
                    </select>
              
            </label>        
            <label for="docum">Numero de Documento: </label>        
            <input type="text" name="Documento" placeholder="Ingrese Numero"> 
            <label for="phone">Telefono: </label>        
            <input type="text" name="Telefono" placeholder="Ingrese documento"> 
            <label for="adress">Direccion: </label>        
            <input type="text" name="Direccion" placeholder="Ingrese Direccion"> 
            <label for="Email">Correo Electronico: </label>        
            <input type="email" name="Correo" placeholder="Ingrese correo"> 
            <label for="username">Nombre de Usuario: </label>        
            <input type="text" name="NombreUsu" placeholder="Ingrese correo"> 
            <label for="contraseña">Contraseña: </label>        
            <input type="password" name="Contraseña"placeholder="Ingrese contraseña"> 
            <input type="submit" name="Registrar" value="Registrar">
           <a href = "../Usuarios/login.html" >¿Ya tengo una cuenta? </a>
         
           
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