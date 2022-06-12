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
                $_SESSION['id']=$row['id_usuario'];
                $_SESSION['email']=$row['email'];
                $_SESSION['nombre']=$row['nombres'];
                header("Location: ../index.php");
              }else{
                echo "<script>alert('La contraseña o el correo son incorrectos')</script>";
                header("Location: login.php");
              }
            }
?>