<!doctype html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/pag2_styles.css">
    <title>Día del peque</title>
  </head>
  <body>
    <!--Header-->
    <div class="header">
      <h2>Registro: Revive tu infancia.</h2>
    </div>
    <!--Formulario-->
    <div class="formulario">
      <form action="" method="POST">
        <!--Preguntas del formulario-->
        <div class="vertical-questions">
          Nombre
            <input type="text" name="nombre" placeholder="Ingresa tu nombre/s">
          Apellidos
            <input type="text" name="apellidos" placeholder="Ingresa tus apellidos">
          </div>
        <div class="horizontal-questions">
          <div class="h-item">
            Semestre
              <select name = "semestre">
                <option disabled selected value=9>-</option>
                <option value=1>1°</option>
                <option value=2>2°</option>
                <option value=3>3°</option>
                <option value=4>4°</option>
                <option value=5>5°</option>
                <option value=6>6°</option>
                <option value=7>7°</option>
                <option value=8>8°</option>
              </select>
          </div>
          <div class="h-item">
            Carrera:
              <select name = "carrera">
                <option disabled selected value=9>-</option>
                <option value=1>ITC</option>
                <option value=2>IRS</option>
                <option value=3>LAD</option>
                <option value=4>IBT</option>
                <option value=5>ARQ</option>
                <option value=6>LRI</option>
                <option value=7>IDM</option>
                <option value=8>IC</option>
              </select>
          </div>
        </div>
        <div class="vertical-questions">
          Campus:
            <select name = "campus">
              <option disabled selected value=8>-</option>
              <option value=1>Tampico</option>
              <option value=2>Queretaro</option>
              <option value=3>Puebla</option>
              <option value=4>Cuernavaca</option>
              <option value=5>Hidalgo</option>
              <option value=6>Toluca</option>
            </select>
          Restricciones alimenticias:
            <select name = "alimento">
              <option disabled selected value="0">-</option>
              <option value="Si">Si</option>
              <option value="No">No</option>
            </select>
          <!--Botón de registro-->
          <div class="submit">
            <input class="register" type="submit" value="Registrate" name="submit"/>
          </div>
        </div>
      </form>
    </div>
    <!--Código PHP-->
    <?php
      if(isset($_POST["submit"])){
        if(!empty($_POST['nombre']) && !empty($_POST['apellidos']) && !empty($_POST['semestre']) && !empty($_POST['carrera']) && !empty($_POST['campus']) && !empty($_POST['alimento'])) {
          $nombre=$_POST['nombre'];
          $apellidos=$_POST['apellidos'];
          $semestre = $_POST['semestre'];
          $carrera = $_POST['carrera'];
          $campus = $_POST['campus'];
          $alimento = $_POST['alimento'];
          $con=mysqli_connect('localhost','u2005_02','VGn@iauI#ZR5', '2005B_02') or die(mysql_error());
          $query=mysqli_query($con, "SELECT * FROM pag2_registro WHERE nombre='$nombre' AND apellidos='$apellidos'");
          $numrows=mysqli_num_rows($query);
          if($numrows==0) {
            $sql="INSERT INTO pag2_registro(nombre, apellidos, semestre, restriccion, idCarrera, idCampus) VALUES('$nombre','$apellidos', '$semestre', '$alimento', '$carrera', '$campus')";
            $result=mysqli_query($con, $sql);
            if($result){
              echo "Respuestas enviadas!";
            }
            else {
              echo "Error al subir el formulario!";
            }
          }
          else {
            echo "Ya te haz registrado antes.";
          }
        }
        else {
          echo "Necesitas llenar todos los campos!";
        }
      }
    ?>
  </body>
</html>