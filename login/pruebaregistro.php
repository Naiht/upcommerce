<?php
            include("../conexion.php");
            error_reporting(0);
            session_start();

            if(isset($_SESSION["nombres"])){
              header("Location: ../index.php");
            }

            if(isset($_POST["registro"])){
                $username=$_POST["nombre"];
                $correo=$_POST["correo"];
                $password=$_POST["password"];
                $cpassword=$_POST["cpassword"];

                if($password==$cpassword){
                    $query="SELECT * FROM usuarios WHERE email='$correo'";
                    $result = $conexion->query($query);
                    if(!$result->num_rows>0){
                        $query="INSERT INTO usuarios(nombres,email,contra)
                        values('$username','$correo','$password')";
                        $result = $conexion->query($query);
                        if($result){
                            echo "<script>alert('Usuario registrado')</script>";

                            $query = "SELECT * FROM usuarios WHERE email = '$correo' AND contra ='$password'";
                    
                            $result = $conexion->query($query);

                            if($result->num_rows>0){
                                $row=mysqli_fetch_assoc($result);
                                $_SESSION['id']=$row['id_usuario'];
                                $_SESSION['email']=$row['email'];
                                $_SESSION['nombre']=$row['nombres'];
                                header("Location: ../creatienda.php");
                            }else{
                                echo "<script>alert('La contraseña o el correo son incorrectos')</script>";
                            }
                            $username="";
                            $correo="";
                            $password="";
                            $cpassword="";
                            echo "<script>alert('$username $correo')</script>";      

                        }else{
                            echo "<script>alert('hay un error')
                            window.history.back()
                            </script>";
                            //header("Location: login.php");
                        }
                        }else{
                            echo "<script>alert('El correo ya existe')
                            window.history.back()
                            </script>";
                            //header("Location: login.php");
                        }
                }else{
                    echo "<script>alert('Las contraseñas no coinciden')
                    window.history.back()
                    </script>";
                    //header("Location: login.php");
                }
            }
          ?>