<?php
   session_start();
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="shortcut icon" href="img/poke-bowl-icon.png" type="">
    <link rel="stylesheet" href="css/estilos.css" type="text/css">
  </head>
<body class="bg">
    <div class="col-12" >
          
        <div class=" col-6 float-end">
              <div class="d-flex justify-content-center align-items-center " style="height: 100vh">
              <div class="bg-white p-2 rounded-2" style="--bs-bg-opacity: .75;">
                    <form class="border-0 border-light p-5" action="confirmarUsuario.php" method="post">
                      <h4 class="h4 mb-4 text-center">INGRESE A SU CUENTA</h4>
                    <div class="form-group h6">
                      <label for="txtCorreo">E-mail:</label>        
                      <!-- Email -->
                      <div>
                      <input type="email" id="txtCorreo" name="mail" class="form-control mb-4" placeholder="Ingrese su e-mail">
                      </div>
                    </div> 
                    <div class="form-group h6">
                      <label for="txtClave"> Contraseña:</label>
                        <!-- Password -->
                        <div>
                          <input type="password" id="txtClave" name="password" class="form-control mb-4" placeholder="Ingrese su contraseña">
                        </div>
                    </div>
                    
                    <!-- Sign in button -->
                    <div class="text-center">
                    <button class="btn btn-warning center-block col-12 text-white" type="submit">Ingrese</button>
                    </div>
                    <hr>
                  
                    
                  <!-- Register -->
                    <div class="text-center bold">
                      <label > ¿No está registrado? </label>
                      <br>
                      <br>
                        <a href="register.php" class="text-decoration-none text-white btn btn-dark content-center center-block col-12">Regístrese</a>
                    </div>   
                    
                    </form>
                </div>
              
      
              </div>
        </div>
  </div>
  
  

</body>
</html>