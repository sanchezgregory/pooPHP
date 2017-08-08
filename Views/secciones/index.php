<h1> Vista principal de las Secciones</h1>

 	<div class="panel panel-success">
 		<div class="panel-heading">
 			<h3>Listado de estudiantes</h3>
 		</div>
 		<div class="panel-body">
 			<table class="table table_striped table-hover">
 				<thead>
 					<tr>
 						<th>#</th>
	 					<th>Nombre</th>
	 				</tr>
 				</thead>
 				<tbody>
 				<?php 
					
					while($row = mysqli_fetch_array($datos)) {
						echo "
						<tr>
							<td>".$row['id']."</td>
							<td>".$row['nombre']."</td>
							<td> <a class='btn btn-warning' href='".URL."estudiantes/editar/".$row['id']."'> Editar </a>
							<a class='btn btn-warning' href='".URL."estudiantes/eliminar/".$row['id']."'> Eliminar </a></td>
						</tr>";
					}
				?>
 				</tbody>
 			</table>
 		</div>
 	</div>
 