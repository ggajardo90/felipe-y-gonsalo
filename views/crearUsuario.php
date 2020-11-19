<?php


use models\UsuarioModel as UsuarioModel;

require_once("../models/UsuarioModel.php");

$modelo = new UsuarioModel();
$usuario = $modelo->getAllUsuarios();
?>

<!DOCTYPE html>
<html>

<head>
	<title>GestionClientes</title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="../css/clientesAdmin.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<script type="text/javascript">
		$(document).ready(function() {
			// $('select').formSelect();
			$('.datepicker').datepicker({
				format: 'dd/mm/yyyy',
				autoClose: 'true',
				i18n: {
					months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
					monthsShort: ["Ene", "Feb", "Mar", "Abr", "May", "Jun", "Jul", "Agos", "Sept", "Oct", "Nov", "Dic"]


				},
				showDaysInNextAndPreviousMonths: 'true'
			});
		});

		// $(document).on('submit', '#registro', function(e){
		// 	e.preventDefault();
		// 	console.log($(this).serialize());
		// });
	</script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body class=" lighten-5 ">
	<nav class="blue lighten-2">

		<div class="nav-wrapper">

		<a href="#" class="brand-logo left"><img src="../img/45.png" alt="img not found" style="height: 64px;"></a>
		
			<ul id="nav-mobile" class="right hide-on-med-and-down ">
			<li style="padding-right: 980px; font-family: 'Goldman', cursive; font-size:25px" class="black-text">Beauty Eyes</li>
				<li ><a href="badges.html"></a></li>
				<li><a href="./salir.php" class="black-text">Cerrar Sesion</a></li>
				<li class="green-text">
									
												
												
						
						</p>
				</li>
			</ul>
		</div>
	</nav>
	<br>




	<div class="container" style="min-height:10%vh; padding: 10px border: 1px solid black">
		<!-- CONTAINER -->
		<div class="row indigo lighten-5">
		<div Style="font-family: 'Goldman', cursive; font-size:25px; padding:20px" >Administracion de Usuarios</div>		
			<!-- ROW -->
			<form action="../controllers/CrearUsuarioController.php" method="post" id="registro">
			<p> <?php

session_start();
					
if (isset($_SESSION['error1'])) {
	echo '<p class="white-text center red darken-2 respuesta" >';
	echo $_SESSION['error1'];
	echo "</p>";
	unset($_SESSION['error1']);
}


?>
			<p class="green-text">
	<?php

	if (isset($_SESSION['respuesta1'])) {
		echo '<p class="white-text center green darken-2 respuesta" >';
		echo $_SESSION['respuesta1'];
		echo "</p>";
		unset($_SESSION['respuesta1']);
	}
	?>
</p>
				<div class="input-field col l6 col-m6" Style="padding-top: 25px;" >
					<i class="material-icons prefix" Style="padding-top: 25px;">account_circle</i>
					<input type="text" name="rut" id="rut" class="input-100">
					<label for="rut" Style="padding-top: 25px;">Rut</label>
				</div>
				<div class="input-field col l6 col-m6" Style="padding-top: 25px;" >
					<i class="material-icons prefix" Style="padding-top: 25px;" >account_circle</i>
					<input type="text" name="nombre" id="nombre">
					<label for="nombre" Style="padding-top: 25px;" >Nombre</label>
				</div>
				<div class="clearfix"></div>

				<div class="input-field col l6 m5" Style="padding-top: 45px;">
					<i class="material-icons prefix" Style="padding-top: 45px;" >directions</i>
					<input type="text" name="rol" id="rol">
					<label for="rol" Style="padding-top: 45px;">Rol</label>
				</div>
				<div class="input-field col l6 m5" Style="padding-top: 45px;">
					<i class="material-icons prefix" Style="padding-top: 45px;">https</i>
					<input type="text" name="clave" id="clave">
					<label for="clave" Style="padding-top: 45px;"> Clave </label>
				</div>
				<div class="input-field col l2 m5" Style="padding-top: 45px; margin-botton:50px">
				<div class="clear-fix"></div>
				<label>Estado de usuario</label>
					<select class="browser-default" name="estado" >
						<option class="blue" value="" disabled selected>Elija estado</option>
						<option value="1">Activo</option>
						<option value="0">Inactivo</option>
					
					</select>
					</div>
			

					<button class="btn blue lighten-2 black-text hoverable" Style="margin-left:350px; width:30%; margin-top:50px">Crear Usuario</button>

				</div>
			
			</form>

						
			<div class="col l12 m12 s12" style="width: 100%; padding-top:35px;">
				<table class="responsive-table striped blue lighten-2" style="width: 100%;">
					<thead>
						<th>Rut</th>
						<th>Nombre</th>
						<th>Rol</th>
						<th>Clave</th>
						<th>Estado</th>
						<th>Editar</th>
						<th>Eliminar</th>


					</thead>
					<?php foreach ($usuario as $user) { ?>



						<tr>
							<td> <?= $user["rut"] ?></td>
							<td> <?= $user["nombre"] ?></td>
							<td> <?= $user["rol"] ?></td>
							<td> <?= $user["clave"] ?></td>
							<td> <?= $user["estado"] ?></td>

							<td><a href="../index.php">
									<button class="btn blue lighten-2 black-text hoverable">Editar</button>
								</a>
							</td>

							<td><a href="../index.php"><button class="btn blue lighten-2 black-text hoverable" >Eliminar</button></a> </td>



						</tr>

						</tr>
					<?php } ?>

				</table>
			</div>


		</div> <!-- ROW -->
	</div> <!-- CONTAINER 2-->

	<br>
</body>


</html>