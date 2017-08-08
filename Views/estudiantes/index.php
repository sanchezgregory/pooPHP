<h1> Vista principal del estudiante</h1>

 	<div class="panel panel-success">
 		<div class="panel-heading">
 			<h3>Listado de estudiantes</h3>
 		</div>
 		<div class="panel-body">
 			<table class="table table_striped table-hover">
 				<thead>
 					<tr>
	 					<th>Profile</th>
	 					<th>Nombre</th>
	 					<th>Edad</th>
	 					<th>Promedio</th>
	 					<td>Fecha</td>
	 					<td>Seccion</td>
	 					<td>Acciones</td>
	 				</tr>
 				</thead>
 				<tbody>
 				<?php 
					
					while($row = mysqli_fetch_array($datos)) {
						echo "
						<tr>
							<td> <img class='imagen-avatar'src=".URL."Views/template/imagenes/avatars/".$row['imagen']."> </td>
							<td>$row[1]</td>
							<td>".$row['edad']."</td>
							<td>".$row['promedio']."</td>
							<td>".$row['fecha']."</td>
							<td>".$row['seccion']."</td>
							<td> <a class='btn btn-warning' href='".URL."estudiantes/editar/".$row['id']."'> Editar </a>
							<a class='btn btn-warning' href='".URL."estudiantes/eliminar/".$row['id']."'> Eliminar </a></td>
						</tr>";
					}
				?>
 				</tbody>
 			</table>
 		</div>
 	</div>
 