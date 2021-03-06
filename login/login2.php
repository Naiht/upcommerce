<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
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
          <form action="#" class="sign-up-form">
            <h2 class="title">Registrate</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Nombre" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input name="email" type="email" placeholder="Correo electronico" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="password" type="password" placeholder="Contraseña" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input name="cpassword" type="password" placeholder="Repetir contraseña" />
            </div>
            <input type="submit" class="btn" value="Sign up" />
          </form>
        </div>
      </div>

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
