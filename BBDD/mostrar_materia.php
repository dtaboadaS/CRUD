	<h2 class="center">Materia del centro</h2></br>

		<table id="alumnado">
    	<tr>
			<th> Cod_Materia </th>
			<th> Horas </th>
			<th> Materia </th>
		</tr>
		<tr>
		
		<?php
		
	    $qry_alum = "SELECT * FROM materias order by Materia";
	    $res_alum = mysqli_query($conector, $qry_alum);
		
		if ($res_alum->num_rows > 0) {
			
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
