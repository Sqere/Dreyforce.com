<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "formularios";

    $enlace = mysqli_connect($servidor, $usuario, $clave, $baseDeDatos);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ayuda - Dreyforce - Step Hard</title>
    <link rel="stylesheet" href="Estilo_Dreyforce.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="icon" href="Logo Dreyforce.ico" />
  </head>
  <script src="Buscador.js"></script>
  <body>
    <header>
      <div class="menu">
        <img src="Logo Dreyforce.png" class="logo" />
        <nav>
          <ul class="Navegacion">
            <ul class="Red">
              <a href="https://www.instagram.com" target="_blank"
                ><li><img src="Instagram.png" class="Red-social" /></li
              ></a>
              <a href="https://www.facebook.com" target="_blank"
                ><li><img src="Facebook.png" class="Red-social" /></li
              ></a>
              <a href="https://www.twitter.com" target="_blank"
                ><li>
                  <img src="Twitter.png" class="Red-social" id="Twitter" /></li
              ></a>
            </ul>
            <a href="Index.html"><li class="Secciones">Inicio</li></a>
            <a href="Compra.html"><li class="Secciones">Productos</li></a>
            <a href="Nosotros.html"><li class="Secciones">Nosotros</li></a>
            <a href="Ayuda.html"
              ><li class="Secciones" id="Lugar_Actual">Ayuda</li></a
            >
          </ul>
        </nav>
      </div>
    </header>

    <section class="Contenedor-Ayuda">
      <div class="Ayuda">
        <h3>Ayuda Dreyforce</h3> <br>
        <h3>¿Quieres saber sobre...?</h3> <br>
        <ul>
          <li>
            <h3><a href="Quieres saber sobre.html" target="_blank">Métodos de Pago</a></h3>
          </li>
          <li>
            <h3><a href="Quieres saber sobre.html" target="_blank">Envío</a></h3>
          </li>
          <li>
            <h3><a href="Quieres saber sobre.html" target="_blank">Repuesto de Artículos</a></h3>
          </li>
          <li>
            <h3><a href="Quieres saber sobre.html" target="_blank">Reembolso y Devolución</a></h3>
          </li>
        </ul>
        <h3>¿O te pasó algo como...?</h3> <br>
        <ul>
          <li>
            <h3><a href="Te pasó algo como.html" target="_blank">Error de Compra</a></h3>
          </li>
          <li>
            <h3><a href="Te pasó algo como.html" target="_blank">Pérdida de Paquete</a></h3>
          </li>
        </ul>
      </div>
      <div class="Formulario">
        <p>
          Si lo que te ocurre es distinto a cualquiera de estas cosas llena este
          formulario sencillo donde podrás ayudarnos a identificar tu problema,
          y así, ayudarte a ti.
        </p>

        
          

          <form action="ayuda.php" method="POST" class="Formulario1">
            <legend>Formulario de Ayuda</legend>
            <label for="Nombre">Nombre</label>
            <input type="text"  required name="Nombre" placeholder="Ingrese aquí su Nombre" />

            <br />

            <label for="Apellido">Apellido</label>
            <input type="text" required name="Apellido" placeholder="Ingrese aquí su Apellido" />

            <br>

            <label for="Correo">Correo Electrónico</label>
            <input type="email" required name="Correo Electrónico" placeholder="Ingrese aquí su Correo Electrónico">

            <br>

            <label for="Numero Telefónico">Teléfono</label>
            <input type="text" name="Teléfono" placeholder="Ingrese aquí su Número de Teléfono">

            <br>

            <label for="Mensaje">Mensaje</label>
            <textarea id="mensaje" required name="mensaje" placeholder="Cuéntanos tu duda o problema..."></textarea>

            <br><br>

            <button type="submit" name="enviar" >Enviar</button>
          </form>
      </div>
    </section>
  </body>
</html>

<?php

    if(isset($_POST['enviar'])) {

        $nombre = $_POST['Nombre'];
        $apellido = $_POST['Apellido'];
        $correo = $_POST['Correo Electrónico'];
        $teléfono = $_POST['Teléfono'];
        $mensaje = $_POST['mensaje'];

        $insertarDatos = "INSERT INTO ayuda VALUES('', '$nombre', '$apellido', '$correo', '$teléfono', '$mensaje')";

        $ejecutarInsertar = mysqli_query ($enlace, $insertarDatos);
    }

?>