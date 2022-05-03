<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Transacciones</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>Transferencias entre usuarios</h2>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>nombre</th>
                            <th>saldo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        ?>
                    </tbody>
                </table>
            </div>
			<form action="form-horizontal" method="post">
				<!--Remitente-->
				<div class="control-group">
					<label class="control-label">Remitente</label>
					<div class="controls">
						<select name="idRemitente">
							<option value="">Selecciona un Remitente</option>
							<?php

							?>
						</select>
						<?php  ?>
						<span class="help-inline"><?php  ?></span>
					</div>
				</div>

				<!--Destinatario-->
				<div class="control-group">
					<label class="control-label">Destinatario</label>
					<div class="controls">
						<select name="idRemitente">
							<option value="">Selecciona un Destinatario</option>
							<?php
							?>
						</select>
						<?php   ?>
						<span class="help-inline"><?php  ?></span>
					</div>
				</div>

				<!--Monto-->
				<div class="control-group" <?php  ?>>
					<label class="control-label">Monto</label>
					<div class="controls">
						<input name="monto" type="number" step="0.5" value="<?php   ?>">
						<?php  ?>
						<span class="help-inline">
							<?php   ?>
						</span>
					</div>
				</div>

				<!--Envíar formulario-->
				<div class="form-actions">
					<button type="submit" class="btn btn-success">Transferir</button>
				</div>
			</form>
        </div>
    </body>
</html>