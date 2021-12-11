<?php
    $registroCreado = FALSE;
    if($_POST){
        if($_POST['registrar']){
            $nombre = ($_POST["nombre"]);
            $descripcion = ($_POST["descripcion"]);
            $precio = ($_POST["precio"]);
    
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

            $sql = "INSERT INTO producto (nombre, descripcion, precio, restaurante_id)
            VALUES ( '$nombre', '$descripcion', '$precio', 6)";

            echo $sql;

            if ($conn->query($sql) === TRUE) {
                //echo "New record created successfully";
                $registroCreado = TRUE;
            } else {
                //echo "Error: " . $sql . "<br>" . $conn->error;
            }

            $conn->close();

        }elseif($_POST['actualizar']){
            $nombre = ($_POST["nombre"]);
            $descripcion = ($_POST["descripcion"]);
            $precio = ($_POST["precio"]);

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

            $sql = "UPDATE producto SET nombre='$nombre', descripcion='$descripcion', precio='$precio' WHERE codigo=3";

            if ($conn->query($sql) === TRUE) {
              echo "Record updated successfully";
            } else {
              echo "Error updating record: " . $conn->error;
            }

            $conn->close();
        }elseif($_POST['eliminar']){
            $nombre = ($_POST["nombre"]);
            $descripcion = ($_POST["descripcion"]);
            $precio = ($_POST["precio"]);

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

            // sql to delete a record
            $sql = "DELETE FROM producto WHERE codigo=1";

            if ($conn->query($sql) === TRUE) {
              echo "Record deleted successfully";
            } else {
              echo "Error deleting record: " . $conn->error;
            }

            $conn->close();
        }
    }   
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <title>Crear producto</title>
    <link rel="stylesheet" href="../CSS/Registro.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="center">
  <form method="post" action="">
  <main>

    <div id="columna1">
        <h1>Registro para nuevos productos del menú.</h1>
        <?php 
          if ($registroCreado){
            echo '<div class="alert alert-dark" role="alert">
            Creado correctamente!
            </div>';
          }
          if($_POST && !$registroCreado){
            echo '<div class="alert alert-dark" role="alert">
            Error al crear!
            </div>';
          }
        ?>

        <p>A continuación ingrese los siguientes datos del producto:</p><br>
        <table id="tabla">
          <tr>
            <td> 
              <p>Nombre:&nbsp;</p> 
            </td>
            <td> 
              <input type="text" class="form-control" id="nombres" placeholder="Su platillo" size="40" name="nombre"> 
            </td>
          </tr>
          <tr>
            <td>
              <p>Descripción:&nbsp;</p>
            </td>
            <td>
              <input type="text" class="form-control" id="descripcion" placeholder="Descripcion del platillo" size="40" name="descripcion">
            </td>
          </tr>
          <tr>
            <td>
              <p>Precio:&nbsp;</p>
            </td>
            <td>
              <input type="number_format(doubleval)" class="form-control" id="precio" placeholder="1.50" size="40" name="precio">
            </td>
          </tr>
        </table>
        <br>
        <br><input type="submit" value="Registrar Producto" class="w-50 btn btn-secondary" id="registrar" name="registrar">
        <br>
        <br><input type="submit" value="Actualizar Producto" class="w-50 btn btn-secondary" id="actualizar" name="actualizar">
        <br>
        <br><input type="submit" value="Eliminar Producto" class="w-50 btn btn-secondary" id="eliminar" name="eliminar">
        <br>
        <br><a href="Listar.php"><input type="button" value="Listar todos los productos" class="w-50 btn btn-secondary"></a>
        <br>
        <br><a href="../Principal/Principal.php"><input type="button" value="Regresar" class="w-50 btn btn-secondary"></a>
    </div>
  </form>

  </main>
        
</body>

</html>