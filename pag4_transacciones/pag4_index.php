<?php

	require_once 'database.php';
	$monto = NULL;
	$idRemitente = NULL;
	$idDestinatario = NULL;
	$montoError = NULL;
	$idRemitenteError = NULL;
	$idDestinatarioError = NULL;

	if(!empty($_POST)){

		$monto = $_POST["monto"];
		$idRemitente = $_POST["idRemitente"];
		$idDestinatario = $_POST["idDestinatario"];

		if(empty($monto)) {
			$montoError = "Por favor ingrese un monto";
		}

		if(empty($idRemitente)) {
			$idRemitenteError = "Por favor ingrese un remitente";
		}

		if(empty($idDestinatario)) {
			$idDestinatarioError = "Por favor ingrese un destinatario";
		}

		$pdo = new PDO('mysql:host=localhost;dbname=2005B_02', 'u2005_02', 'VGn@iauI#ZR5', array(
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
			PDO::ATTR_EMULATE_PREPARES => false
		));

		try{
			//Iniciamos nuestra transacción
			$pdo->beginTransaction();

			//Query 1: Insertar la transacción en nuestra base de datos
			$sql = "INSERT INTO pag4_transaccion(monto, fecha, idRemitente, idDestinatario) VALUES (?,NOW(),?,?)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array(
				$monto,
				$idRemitente,
				$idDestinatario
			));

			//Query 2:
			$sql = "UPDATE pag4_usuario SET saldo = saldo + ? WHERE idUsuario = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array(
				$monto,
				$idDestinatario
			));
			$sql = "UPDATE pag4_usuario SET saldo = saldo - ? WHERE idUsuario = ?";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array(
				$monto,
				$idRemitente
			));

			//Validación de la transacción
			$pdo->commit();
			header("Location: pag4_index.php");

		}
		//catch block
		catch(Exception $e){
			echo $e->getMessage();
			$pdo->rollBack();
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/pag4_styles.css">
        <title>Transacciones</title>
    </head>
    <body>
		<div class="header">
			<h2>Transferencias entre usuarios</h2>
		</div>
        <div class="container">
            <div class="row" id="contenido">
				<div class="header-table" id="tableH-F">
					<h3>Base de datos de usuarios</h3>
				</div>
                <table class="table table-striped table-bordered" id="central-content">
                    <thead>
                        <tr>
                            <th>nombre</th>
                            <th>saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
							$pdo = Database::connect();
							$sql = 'SELECT * FROM pag4_usuario ORDER BY saldo DESC;';
							foreach($pdo->query($sql) as $row){
								echo '<tr>';
								echo '<td>'. $row['usuario'] . '</td>';
								echo '<td>'. $row['saldo'] . '</td>';
								echo '</tr>';
							}
							Database::disconnect();
                        ?>
                    </tbody>
                </table>
            </div>
			<div class="formulario" id="contenido">
				<div class="header-table" id="tableH-F">
						<h3>Realiza una transacción</h3>
				</div>
				<form method="post" id="central-content">
					<!--Remitente-->
					<div class="control-group">
						<label class="control-label">Remitente</label>
						<div class="controls">
							<select name="idRemitente">
								<option value="">Remitente</option>
								<?php
									$pdo = Database::connect();
									$query = 'SELECT * FROM pag4_usuario';
									foreach($pdo->query($query) as $row){
										if ($row['idUsuario']==$idRemitente)
											echo "<option selected value'" . $row['idUsuario'] . "'>" . $row['usuario'] . "</option>";
										else
											echo "<option value='" . $row['idUsuario'] . "'>" . $row['usuario'] . "</option>";
									}
									Database::disconnect();
								?>
							</select>
							<?php if (($idRemitenteError) != null) ?>
							<span class="help-inline"><?php echo $idRemitenteError;?></span>
						</div>
					</div>
	
					<!--Destinatario-->
					<div class="control-group">
						<label class="control-label">Destinatario</label>
						<div class="controls">
							<select name="idDestinatario">
								<option value="">Destinatario</option>
								<?php
									$pdo = Database::connect();
									$query = 'SELECT * FROM pag4_usuario';
									foreach($pdo->query($query) as $row){
										if ($row['idUsuario']==$idDestinatario)
											echo "<option selected value'" . $row['idUsuario'] . "'>" . $row['usuario'] . "</option>";
										else
											echo "<option value='" . $row['idUsuario'] . "'>" . $row['usuario'] . "</option>";
									}
									Database::disconnect();
								?>
							</select>
							<?php if (($idDestinatario) != null) ?>
							<span class="help-inline"><?php echo $idDestinatarioError;?></span>
						</div>
					</div>
	
					<!--Monto-->
					<div class="control-group" <?php echo !empty($montoError)?'error':'';?>">
						<label class="control-label">Monto</label>
						<div class="controls">
							<input name="monto" type="number" step="0.5" value="<?php echo !empty($monto)?$monto:'';?>">
							<?php if (($montoError != null)) ?>
							<span class="help-inline">
								<?php echo $montoError;?>
							</span>
						</div>
					</div>
	
					<!--Envíar formulario-->
					<div class="form-actions">
						<button type="submit" class="btn btn-success">Transferir</button>
					</div>
				</form>
			</div>
        </div>
    </body>
</html>