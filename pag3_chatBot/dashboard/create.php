<?php

	require 'database.php';

		$f_idError = null;
		$submError = null;
		$marcError = null;
		$acError   = null;


	if ( !empty($_POST)) {

		// keep track post values
		$f_id = $_POST['f_id'];
		$subm = $_POST['subm'];
		$marc = $_POST['marc'];
		$ac   = $_POST['ac'];

		// validate input
		$valid = true;

		if (empty($subm)) {
			$submError = 'Pregunta';
			$valid = false;
		}
		if (empty($marc)) {
			$marcError = 'Respuesta';
			$valid = false;
		}
		if (empty($ac)) {
			$acError = 'Porfavor seleccione si el vehículo tiene aire acondicionado';
			$valid = false;
		}

		// insert data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "INSERT INTO pregunta (ID_pregunta, contenido, respuesta, ID_Categoria) values(null, ?, ?, ?)";
			$q = $pdo->prepare($sql);
			($ac=="S")?$acq=1:$acq=0;
			$q->execute(array($subm,$marc,$acq));
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

				<div class="control-group <?php echo !empty($submError)?'error':'';?>">
						<label class="control-label">Pregunta</label>
					    <div class="controls">
					      	<input name="subm" type="text"  placeholder="submarca" value="<?php echo !empty($subm)?$subm:'';?>">
					      	<?php if (($submError != null)) ?>
					      		<span class="help-inline"><?php echo $submError;?></span>
					    </div>
					</div>

					<div class="control-group <?php echo !empty($marcError)?'error':'';?>">
				    	<label class="control-label">Categoria</label>
				    	<div class="controls">
	                       	<select name ="marc">
		                        <option value="">Selecciona una Categoria</option>
		                        <?php
							   		$pdo = Database::connect();
							   		$query = 'SELECT * FROM pregunta';
			 				   		foreach ($pdo->query($query) as $row) {
		                        		if ($row['ID_pregunta']==$marc)
		                        			echo "<option selected value='" . $row['ID_pregunta'] . "'>" . $row['nombrem'] . "</option>";
		                        		else
		                        			echo "<option value='" . $row['ID_pregunta'] . "'>" . $row['nombrem'] . "</option>";
			   						}
			   						Database::disconnect();
			  					?>
                            </select>
					      	<?php if (($marcError) != null) ?>
					      		<span class="help-inline"><?php echo $marcError;?></span>
						</div>
					</div>

					<div class="control-group <?php echo !empty($acError)?'error':'';?>">
					    <label class="control-label">Aire Acondicionado ?</label>
						    <div class="controls">
	                    	    <input name="ac" type="radio" value="S"
	                               	<?php $ac = null; echo ($ac == "S")?'checked':'';?> >Si</input> &nbsp;&nbsp;
	                            <input name="ac" type="radio" value="N"
	                              	<?php $ac=null; echo ($ac == "N")?'checked':'';?> >No</input>
						       	<?php if (($acError != null)) ?>
						      		<span class="help-inline"><?php echo $acError;?></span>
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