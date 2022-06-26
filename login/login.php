<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <link rel="stylesheet" href="css/login.css" />
    <title>Login</title>
  </head>
  <body>
   
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          
          <!--login-->
          <form action="pruebalog.php" method = "POST" class="sign-in-form">
            <h2 class="title">Iniciar sesion</h2>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="text" placeholder="Correo electronico" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="pass" type="password" placeholder="Contraseña" />
            </div>
            <input name="log" type="submit" value="Login" class="btn solid" />
          </form>
          
          <!--registro-->
          <form id="form" action="#" method = "POST" class="sign-up-form">
            <h2 class="title">Registrate</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name ="nombre" type="text" placeholder="Nombre" />
            </div>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input name ="apellido" type="text" placeholder="Apellido" />
            </div>

            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="correo" type="email" placeholder="Correo electronico" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="passwordr" name="password" type="password" placeholder="Contraseña" />
            </div>

            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input id="cpasswordr" name="cpassword" type="password" placeholder="Repetir contraseña" />
            </div>

            <div class="wrapper">
                <input type="radio"  name="select" id="option-1" checked>Comprador
                <input type="radio" name="select" id="option-2">Vendedor
            </div>

            <input name="registro" type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

      <script>
        $(".btn").click(function(){

            if(document.getElementById("option-1").checked){
              document.getElementById("form").action = "pruebaregistrosintienda.php";
            }

            if(document.getElementById("option-2").checked){
              document.getElementById("form").action = "pruebaregistro.php";
            }
        });
    </script>


      <!--mesajes circulares-->
      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>¿No tienes cuenta todavia?</h3>
            <p>
              UpCommerce es una manera de impulsar tu negocio a nuevos niveles.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Registrate
            </button>
          </div>
          <img src="img/M2.png" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>¿Ya tenes cuenta?</h3>
            <p>
			      	Inicia sesion para acceder a todas las funciones.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Iniciar sesion
            </button>
          </div>
          <img src="img/M3.png" class="image" alt="" />
        </div>
      </div>
    </div>



    <script src="js/login.js"></script>
  </body>
</html>
