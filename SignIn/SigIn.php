<?php
  $usuarioEncontrado = FALSE;
  if($_POST){
    $correo = ($_POST['correo']);
    $contrsena = ($_POST['contrasena']);

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "practica2";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT 
    INSERT INTO usuario (correo, contrasena, rol)
    VALUES ( '$correoCliente', '$contrasenaCliente', 'C')";

    //echo $sql;

    if ($conn->query($sql) === TRUE) {
      //echo "New record created successfully";
      $registroCreado = TRUE;
    } else {
      //echo "Error: " . $sql . "<br>" . $conn->error;
    }

            
    $conn->close();

  }
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Inicio de sesión</title>
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">
    <br>
    <br>
  </head>
  
  <style>
    
    body {
      display: flex;
      justify-content: center;
      padding-top: 40px;
      padding-bottom: 40px;
      background-color: #f5f5f5;
      text-align: center;
    }
  </style>



<body >
<main >
  <form>
    <img class="mb-4" src="../Images/InicioSesion.png" alt="" width="300" height="200">
    <h1 >Por favor inicia sesión</h1>


    <div class="form-floating" width="200" >
      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" size="50" name="correo"> 
      <label for="floatingInput">Correo electrónico</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="contrasena"> 
      <label for="floatingPassword">Contraseña</label>
    </div>

    <div class="checkbox mb-3">

    </div>
    <button class="w-100 btn btn-secondary" type="submit">Iniciar sesión</button>
    <p></p>
    <a href="../index.php"><input type="button" value="Regresar" class="w-100 btn btn-secondary"></a>
  </form>
</main>

</body>
    

</html>
