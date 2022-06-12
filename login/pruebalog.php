<?php
            include '../conexion.php';
            session_start();
            error_reporting(0);
           
            if(isset($_SESSION["nombres"])){
              header("Location: ../index.php");
            }

            if(isset($_POST["log"])){
              

              $email=$_POST["email"];
              $password=$_POST["pass"];

              $query = "SELECT * FROM usuarios WHERE email = '$email' AND contra ='$password'";
    
              $result = $conexion->query($query);

              if($result->num_rows>0){
                $row=mysqli_fetch_assoc($result);
<<<<<<< HEAD
                $_SESSION['email']=$row['email'];
                header("Location: ../index.php");
              }else{
                echo "<script>alert('La contraseña o el correo son incorrectos')</script>";
=======
                $_SESSION['id']=$row['id_usuario'];
                $_SESSION['email']=$row['email'];
                $_SESSION['nombre']=$row['nombres'];
                header("Location: ../index.php");
              }else{
                echo "<script>alert('La contraseña o el correo son incorrectos')</script>";
                header("Location: login.php");
>>>>>>> 92a2a7c6a2adebb2efbcdf737c11f291b3ff7138
              }
            }
?>