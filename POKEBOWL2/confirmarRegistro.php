<?php
   include("config.php");
   session_start();
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $name = mysqli_real_escape_string($db,$_POST['name']);
      $lname = mysqli_real_escape_string($db,$_POST['lname']);
      $correo = mysqli_real_escape_string($db,$_POST['email']);
      $password = mysqli_real_escape_string($db,$_POST['password']);
      $dir = mysqli_real_escape_string($db,$_POST['dir']);
      $cod = mysqli_real_escape_string($db,$_POST['cod']);
      $cel = mysqli_real_escape_string($db,$_POST['cel']);
      $dni = mysqli_real_escape_string($db,$_POST['dni']);


      $sql = $db->prepare("INSERT INTO usuarios (nombres, apellidos, correo, clave, direccion, codigo, celular, dni) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
      $sql->bind_param('ssssssss', $name, $lname, $correo, $password, $dir, $cod, $cel, $dni );
      $sql->execute();
 

if ($sql->error)
  {
echo '<script type="text/javascript">'; 
echo 'alert("ERROR REVISAR SI FALTA ALGUN DATO");'; 
echo 'window.location = "register.php";';
echo '</script>';
    }
    else
    {
echo '<script type="text/javascript">'; 
echo 'alert("REGISTRO DE DATOS CORRECTO OK MKS");'; 
echo 'window.location = "index.php";';
echo '</script>';
    }
$sql->close();
    
   }     
?>