<?php

	require 'database.php';

		$f_idError = null;
		$pregError = null;
		$respError = null;
		$cateError = null;


	if ( !empty($_POST)) {

		// keep track post values
		$f_id = $_POST['f_id'];
		$preg = $_POST['preg'];
		$resp = $_POST['resp'];
		$cate = $_POST['cate'];

		// validate input
		$valid = true;

		if (empty($preg)) {
			$pregError = 'Escribe una Pregunta';
			$valid = false;
		}
		if (empty($resp)) {
			$respError = 'Escribe una Respuesta';
			$valid = false;
		}
		if (empty($cate)) {
			$cateError = 'Porfavor seleccione la categoria';
			$valid = false;
		}

		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO pregunta (ID_pregunta, contenido, respuesta, ID_Categoria) values(null, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			$q->execute(array($preg,$resp,$cate));
			Database::disconnect();
			header("Location: pag1_index.php");
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta 	charset="utf-8">
	    <link   href=	"css/bootstrap.min.css" rel="stylesheet">
	    <script src=	"js/bootstrap.min.js"></script>
	</head>

	<body>
	    <div class="container">
	    	<div class="span10 offset1">
	    		<div class="row">
		   			<h3>Agregar una Pregunta</h3>
		   		</div>

				<form class="form-horizontal" action="create.php" method="post">

				<div class="control-group <?php echo !empty($cateError)?'error':'';?>">
					<label class="control-label">Categoria</label>
					<div class="controls">
						<select name ="cate">
							<option value="">Selecciona una Categoria</option>
							<?php
								$pdo = Database::connect();
								$query = 'SELECT * FROM categoria';
								foreach ($pdo->query($query) as $row) {
									if ($row['ID_categoria']==$cate)
										echo "<option selected value='" . $row['ID_categoria'] . "'>" . $row['nombre'] . "</option>";
									else
										echo "<option value='" . $row['ID_categoria'] . "'>" . $row['nombre'] . "</option>";
								}
								Database::disconnect();
							?>
						</select>
						<?php if (($cateError) != null) ?>
							<span class="help-inline" id="help-inline"><?php echo $cateError;?></span>
					</div>
				</div>

				<div class="control-group <?php echo !empty($pregError)?'error':'';?>">
					<label class="control-label">Pregunta</label>
					<div class="controls">
						<input name="preg" type="text"  placeholder="Pregunta" value="<?php echo !empty($preg)?$preg:'';?>">
						<?php if (($pregError != null)) ?>
							<span class="help-inline"><?php echo $pregError;?></span>
					</div>
				</div>

				<div class="control-group <?php echo !empty($respError)?'error':'';?>">
					<label class="control-label">Respuesta</label>
					<div class="controls">
						<input name="resp" type="text"  placeholder="Respuesta" value="<?php echo !empty($resp)?$resp:'';?>">
						<?php if (($respError != null)) ?>
							<span class="help-inline"><?php echo $respError;?></span>
					</div>
				</div>


					<div class="form-actions">
						<button type="submit" class="btn btn-success">Agregar</button>
						<a class="btn" href="pag1_index.php">Regresar</a>
					</div>

				</form>
			</div>
	    </div> <!-- /container -->
	</body>
</html>
