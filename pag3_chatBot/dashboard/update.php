<?php

	require 'database.php';

	$id = null;
	if ( !empty($_GET['id'])) {
		$id = $_REQUEST['id'];
	}

	if ( null==$id ) {
		header("Location: index.php");
	}

	if ( !empty($_POST)) {
		// keep track validation errors
		$f_idError = null;
		$submError = null;
		$submError2 = null;
		$marcError = null;

		// keep track post values
		$f_id = $_POST['f_id'];
		$subm = $_POST['subm'];
		$subm2 = $_POST['subm'];
		$marc = $_POST['marc'];

		/// validate input
		$valid = true;

		if (empty($subm)) {
			$submError = 'Porfavor escribe una submarca';
			$valid = false;
		}

		if (empty($marc)) {
			$marcError = 'Porfavor ingrese una categoria';
			$valid = false;
		}

		// update data
		if ($valid) {
			$pdo = Database::connect();
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$sql = "UPDATE pregunta set Id_pregunta = ?, contenido = ?, respuesta =?, ID_Categoria= ? WHERE ID_pregunta = ?";
			$q = $pdo->prepare($sql);
			$acq = ($ac=="S")?1:0;
			$q->execute(array($f_id,$subm,$marc,$acq, $id));
			Database::disconnect();
			header("Location: pag1_index.php");
		}
	} else {
		$pdo = Database::connect();
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$sql = "SELECT * FROM pregunta where ID_pregunta = ?";
		$q = $pdo->prepare($sql);
		$q->execute(array($id));
		$data = $q->fetch(PDO::FETCH_ASSOC);
		$f_id = $data['ID_pregunta'];
		$subm = $data['contenido'];
		$marc = $data['respuesta'];
		$ac   = $data['ID_Categoria'];
		Database::disconnect();
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
		    		<h3>Actualizar datos de un auto</h3>
		    	</div>

	    			<form class="form-horizontal" action="update.php?id=<?php echo $id?>" method="post">

					  <div class="control-group <?php echo !empty($f_idError)?'error':'';?>">

					    <label class="control-label">id</label>
					    <div class="controls">
					      	<input name="f_id" type="text" readonly placeholder="id" value="<?php echo !empty($id)?$id:''; ?>">
					      	<?php if (!empty($f_idError)): ?>
					      		<span class="help-inline"><?php echo $f_idError;?></span>
					      	<?php endif; ?>
					    </div>
					  </div>

					  <div class="control-group <?php echo !empty($submError)?'error':'';?>">

					    <label class="control-label">submarca</label>
					    <div class="controls">
					      	<input name="subm" type="text" placeholder="submarca" value="<?php echo !empty($subm)?$subm:'';?>">
					      	<?php if (!empty($submError)): ?>
					      		<span class="help-inline"><?php echo $submError;?></span>
					      	<?php endif;?>
					    </div>
					  </div>

						<div class="control-group <?php echo !empty($marcError)?'error':'';?>">
					    	<label class="control-label">marca</label>
					    	<div class="controls">
                            	<select name ="marc">
                                    <option value="">Selecciona una marca</option>
                                        <?php
					   						$pdo = Database::connect();
					   						$query = 'SELECT * FROM pregunta';
	 				   						foreach ($pdo->query($query) as $row) {
	 				   							if ($row['ID_pregunta']==$marc)
                        	   						echo "<option selected value='" . $row['idmarca'] . "'>" . $row['nombrem'] . "</option>";
                        	   					else
                        	   						echo "<option value='" . $row['idmarca'] . "'>" . $row['nombrem'] . "</option>";
					   						}
					   						Database::disconnect();
					  					?>

                                </select>
					      	<?php if (!empty($marcError)): ?>
					      		<span class="help-inline"><?php echo $perError;?></span>
					      	<?php endif;?>
					    	</div>
					  	</div>

					  	<div class="control-group <?php echo !empty($acError)?'error':'';?>">
						    <label class="control-label">Aire Acondicionado ?</label>
						    <div class="controls">
	                                                <input name="ac" type="radio" value="S"
	                                                	<?php echo ($ac == "S")?'checked':'';?> >Si</input> &nbsp;&nbsp;
	                                                <input name="ac" type="radio" value="N"
	                                                	<?php echo ($ac == "N")?'checked':'';?> >No</input>

						      	<?php if (!empty($acError)): ?>
						      		<span class="help-inline"><?php echo $acError;?></span>
						      	<?php endif;?>
						    </div>
					  	</div>



					  <div class="form-actions">
						  <button type="submit" class="btn btn-success">Actualizar</button>
						  <a class="btn" href="index.php">Regresar</a>
						</div>
					</form>
				</div>

    </div> <!-- /container -->
  </body>
</html>
