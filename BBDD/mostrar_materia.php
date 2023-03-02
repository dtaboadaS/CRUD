	<h2 class="center">Cursos do centro</h2></br>

		<table id="alumnado">
    	<tr>
			<th> Cod_Materia </th>
			<th> Horas </th>
			<th> Materia </th>
		</tr>
		<tr>
		
		<?php
		// ALUMNOS
	    // Query pasada coma argumento รก funcion mysqli_query co conector.
	    $qry_alum = "SELECT * FROM materias order by Materia";
	    $res_alum = mysqli_query($conector, $qry_alum);
		
		if ($res_alum->num_rows > 0) {
			// salida dos datos de cada fila
			while($row = $res_alum->fetch_assoc()) {
				echo "<td>" . $row["Cod_Materia"] . "</td>" . 
					 "<td>" . $row["Horas"] . "</td>" .
					 "<td>" . $row["Materia"] . "</td>" . 
					 "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_alum);

		?>
		</table>