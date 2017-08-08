<?php namespace Views;
	
	$template = new Template();

	class Template
	{
		public function __construct()
		{
	?>
			<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<title>Administracion de estudiantes: </title>
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/bootstrap.css">
				<link rel="stylesheet" href="<?php echo URL; ?>Views/template/css/general.css">
			</head>
			<body>
				<nav class="navbar navbar-default">
				  <div class="container-fluid">
				    <div class="navbar-header">
				      
				      <a class="navbar-brand" href="#">CRUD Php puro --{ POO }--</a>
				    </div>

				    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				      <ul class="nav navbar-nav">
				        
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Estudiantes <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="<?php echo URL ?>estudiantes">Listar</a></li>
				            <li><a href="<?php echo URL ?>estudiantes/add">Agregar</a></li>
				          </ul>
				        </li>
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Secciones <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="<?php echo URL ?>secciones">Listar</a></li>
				            <li><a href="<?php echo URL ?>"secciones/add>Agregar</a></li>
				          </ul>
				        </li>
				      </ul>
				      <ul class="nav navbar-nav navbar-right">
				        <li class="dropdown">
				          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sesion <span class="caret"></span></a>
				          <ul class="dropdown-menu" role="menu">
				            <li><a href="#">Cerrar</a></li>
				          </ul>
				        </li>
				      </ul>
				    </div>
				  </div>
				</nav>
				<div class="container">
					<div class="box-principal">
						
	<?php }

		public function __destruct()
		{
			?>
			</div>
			</div>			
			<footer class="navbar-fixed-bottom" style="margin-bottom: 20px;">
				>>Designed by Gregory Sanchez.
			</footer>
			<script src="<?php echo URL; ?>Views/template/js/jquery.js"></script>
			<script src="<?php echo URL; ?>Views/template/js/bootstrap.min.js"></script>
			</body>
			</html>
			<?php

		}
	}

 ?>