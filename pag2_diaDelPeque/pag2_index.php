<!doctype html>
<html>
<head>
<title>Register</title>
    <style>
      body {
        margin-top: 110px;
        margin-bottom: 110px;
        margin-right: 160px;
        margin-left: 90px;
        background-color: lightcyan;
        color: palevioletred;
        font-family: verdana;
        font-size: 100%
      }
      h1 {
        color: darkred;
        font-family: indigo;
        font-size: 100%;
      }
      h2 {
        color: darkred;
        font-family: indigo;
        font-size: 100%;
      }
    </style>
</head><body>

    <center><h1>REGISTRATION FOR CHILDREN'S DAY EVENT</h1></center>
<br>
  <center><h2>Registration Form</h2></center>
<form action="" method="POST">
    <legend>
    <fieldset>

Nombre: <input type="text" name="nombre"><br />
<br>
Apellidos: <input type="text" name="apellidos"><br />
<br>
Semestre:
<select name = "semestre">
  <option value=9>-</option>
  <option value=1>1</option>
  <option value=2>2</option>
  <option value=3>3</option>
  <option value=4>4</option>
  <option value=5>5</option>
  <option value=6>6</option>
  <option value=7>7</option>
  <option value=8>8</option>
</select>
<br>
<br>
Carrera:
<select name = "carrera">
  <option value=9>-</option>
  <option value=1>ITC</option>
  <option value=2>IRS</option>
  <option value=3>LAD</option>
  <option value=4>IBT</option>
  <option value=5>ARQ</option>
  <option value=6>LRI</option>
  <option value=7>IDM</option>
  <option value=8>IC</option>
</select>
<br>
<br>
Campus:
<select name = "campus">
  <option value=8>-</option>
  <option value=1>Tampico</option>
  <option value=2>Queretaro</option>
  <option value=3>Puebla</option>
  <option value=4>Cuernavaca</option>
  <option value=5>Hidalgo</option>
  <option value=6>Toluca</option>
</select>
<br>
<br>
Restricciones alimenticias:
<select name = "alimento">
  <option value="0">-</option>
  <option value="Si">Si</option>
  <option value="No">No</option>
</select>
<br>
<br>
<br>
<center>
<input type="submit" value="Register" name="submit"/>
</center>


        </fieldset>
        </legend>
</form>
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

    $query=mysql_query($con, "SELECT * FROM pag2_registro WHERE nombre ='".$apellidos."'");
    $numrows=mysql_num_rows($query);
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