	<h2 class="center">Profesorado del centro</h2></br>

		<table id="alumnado">
    	<tr class="hover">
			<th> Cod_Profesor </th>
			<th> DNI </th>
			<th> Nombre </th>
			<th> Apellido1 </th>			
			<th> Apellido2 </th>
			<th> Localidad </th>
			<th> Imparte </th>
			<th> Telefono </th>
		</tr>
		<tr>
		
		<?php
	
	    $qry_alum = "SELECT * FROM profesores order by Nombre";
	    $res_alum = mysqli_query($conector, $qry_alum);
		
		if ($res_alum->num_rows > 0) {
			
			while($row = $res_alum->fetch_assoc()) {
				echo "<td>" . $row["Cod_Profesor"] . "</td>" . 
					 "<td>" . $row["DNI"] . "</td>" .
					 "<td>" . $row["Nombre"] . "</td>" . 
					 "<td>" . $row["Apellido1"] . "</td>" .
					 "<td>" . $row["Apellido2"] . "</td>".
					 "<td>" . $row["Localidad"] . "</td>".
					 "<td>" . $row["Imparte"] . "</td>".
					 "<td>" . $row["Telefono"] . "</td>".
					 "</tr>";
			}
		} else {
			echo "0 results";
		}
		mysqli_free_result($res_alum);

		?>
		</table>
