	<h2 class="center">Alumnado do centro</h2></br>

		<table id="alumnado">
    	<tr>
			<th> Cod_Alumno </th>
			<th> DNI </th>
			<th> Nombre </th>
			<th> Apellido1 </th>			
			<th> Apellido2 </th>
			<th> Localidad </th>
			<th> Cursa </th>
			<th> Telefono </th>
		</tr>
		<tr>
		
		<?php
		// ALUMNOS
	    // Query pasada coma argumento รก funcion mysqli_query co conector.
	    $qry_alum = "SELECT * FROM alumnos order by Nombre";
	    $res_alum = mysqli_query($conector, $qry_alum);
		
		if ($res_alum->num_rows > 0) {
			// salida dos datos de cada fila
			while($row = $res_alum->fetch_assoc()) {
				echo "<td>" . $row["Cod_Alumno"] . "</td>" . 
					 "<td>" . $row["DNI"] . "</td>" .
					 "<td>" . $row["Nombre"] . "</td>" . 
					 "<td>" . $row["Apellido1"] . "</td>" .
					 "<td>" . $row["Apellido2"] . "</td>".
					 "<td>" . $row["Localidad"] . "</td>".
					 "<td>" . $row["Cursa"] . "</td>".
					 "<td>" . $row["Telefono"] . "</td>".
					 "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_alum);

		?>
		</table>