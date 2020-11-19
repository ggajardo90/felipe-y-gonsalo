<!DOCTYPE html>
<html>

<head>
	<title>GestionClientes</title>

	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
	<meta charset="utf-8">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">


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

<body class=" lighten-5">
	<nav class="indigo lighten-1">
		<div class="nav-wrapper">
			<a href="#" class="brand-logo right"><img src="../img/optica_img.png" alt="img not found" style="height: 60px;"></a>
			<ul id="nav-mobile" class="left hide-on-med-and-down">
				<li><a href="sass.html">Sass</a></li>
				<li><a href="badges.html">Components</a></li>
				<li><a href="collapsible.html">JavaScript</a></li>
				<li class="green-text">
					<p> <?php

						if (isset($_SESSION['arr'])) {
							echo $_SESSION['arr'];
							unset($_SESSION['arr']);
						}
						?></p>
				</li>
			</ul>
		</div>
	</nav>
	<br>
	<div class="container white" style="min-height:100vh; padding: 20px">
		<!-- CONTAINER -->
		<div class="row indigo lighten-5">
			<!-- ROW -->
			<form action="../controllers/RegistroCliente" method="post" id="registro">
				<div class="input-field col l6 col-m6">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="rut" id="rut">
					<label for="rut">Rut</label>
				</div>
				<div class="input-field col l6 col-m6">
					<i class="material-icons prefix">account_circle</i>
					<input type="text" name="nombre" id="nombre">
					<label for="nombre">Nombre</label>
				</div>
				<div class="clearfix"></div>
				<div class="input-field col l4 col-m4">
					<i class="material-icons prefix">date_range</i>
					<input class="datepicker" type="text" name="rol" id="rol">
					<label for="rol">Rol</label>
				</div>
				<div class="input-field col l5 m5">
					<i class="material-icons prefix">directions</i>
					<input type="text" name="clave" id="clave">
					<label for="lugar_nacimiento">clave</label>
				</div>
				<div class="input-field col l5 m5">
					<i class="material-icons prefix">directions</i>
					<input type="text" name="estado" id="estado">
					<label for="estado">Lugar de nacimiento</label>
				</div>
				<div class="input-field col l3 m3">
					<i class="material-icons prefix">map</i>
					<select name="pais">
						<option selected disabled>Seleccione</option>
						<option value="1">El Salvador</option>
						<option value="2">Honduras</option>
						<option value="3">Guatemala</option>
					</select>
				</div>
				<div class="clearfix"></div>
				<div class="input-field col l6 m6">
					<i class="material-icons prefix">email</i>
					<input type="email" name="correo" id="correo" class="validate">
					<label for="correo">Correo</label>
					<span class="helper-text" data-error="Escriba un correo válido." data-success="Correo válido">Su correo es muy importante para contactarlo</span>
				</div>
				<div class="clearfix"></div>
				<div class="input-field col l12 m12">
					<i class="material-icons prefix">school</i>
					<label>¿Posee algún grado universitario?</label>
				</div>
				<div class="clearfix"></div>
				<div class="input-field col l1 m1">
					<label>
						<input type="radio" name="universitario" value="1">
						<span>Si</span>
					</label>
				</div>
				<div class="input-field col l1 m1">
					<label>
						<input type="radio" name="universitario" value="0">
						<span>No</span>
					</label>
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="input-field col l12 m12">
					<i class="material-icons prefix">favorite</i>
					<label>Seleccione sus intereses</label>
				</div>
				<div class="clearfix"></div>
				<div class="input-field col l2 m2">
					<label>
						<input type="checkbox" name="musica" value="1">
						<span>Música</span>
					</label>
				</div>
				<div class="input-field col l2 m2">
					<label>
						<input type="checkbox" name="arte" value="1">
						<span>Arte</span>
					</label>
				</div>
				<div class="input-field col l2 m2">
					<label>
						<input type="checkbox" name="Danza" value="1">
						<span>Danza</span>
					</label>
				</div>
				<div class="input-field col l2 m2">
					<label>
						<input type="checkbox" name="literatura" value="1">
						<span>Literatura</span>
					</label>
				</div>
				<div class="clearfix"></div>
				<br>
				<div class="input-field col l12 m12">
					<i class="material-icons prefix">local_offer</i>
					<label>¿Socio de BeautyOfertas?</label>
				</div>
				<div class="input-field col l6 m6">
					<div class="switch">
						<label>
							No
							<input type="checkbox" name="ofertas" value="1">
							<span class="lever"></span>
							Si
						</label>
					</div>
				</div>
				<div class="clearfix"></div>
				<button type="submit" class="btn waves-effect">
					<i class="material-icons right">check</i>
					Registrarse
				</button>
			</form>
		</div> <!-- ROW -->
	</div> <!-- CONTAINER -->
	<br>
</body>


</html>