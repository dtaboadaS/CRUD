	<h2 class="center">Cursos del centro</h2></br>

		<table id="alumnado">
    	<tr class="dropdown">
			<th> Cod_Curso </th>
			<th> Inicio_Curso </th>
			<th> Nombre </th>
		</tr>
		<tr>
		
		<?php
		
	    $qry_alum = "SELECT * FROM cursos order by Nombre";
	    $res_alum = mysqli_query($conector, $qry_alum);
		
		if ($res_alum->num_rows > 0) {
			
			while($row = $res_alum->fetch_assoc()) {
				echo "<td>" . $row["Cod_Curso"] . "</td>" . 
					 "<td>" . $row["Inicio_Curso"] . "</td>" .
					 "<td>" . $row["Nombre"] . "</td>" . 
					 "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_alum);

		?>
		</table>
