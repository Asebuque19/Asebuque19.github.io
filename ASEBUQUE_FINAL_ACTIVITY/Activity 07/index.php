		
<?php 
	include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>
	

</head>
<body>
	
	<h1><?php echo "countries"; ?></h1> 
	
	<a href="add.html">Add new data</a><br/><br/>

	<table>
		<tr bgcolor='#ccccff'>
		
			<td>ID</td>
			<td>ISO</td>
			<td>NAME</td>
			<td>NICENAME</td>
			<td>ISO3</td>
			<td>NUMCODE</td>
			<td>PHONECODE</td>
			<td>CREATED_AT</td>
			<td>UPDATE</td>
		</tr>


		<?php 

		while( $res = mysqli_fetch_array($result)){
			echo "<tr bgcolor='#cccccc'>";
			echo "<td>".$res['ID']."</td>";
			echo "<td>".$res['ISO']."</td>";
			echo "<td>".$res['NAME']."</td>";
			echo "<td>".$res['NICENAME']."</td>";
			echo "<td>".$res['ISO3']."</td>";
			echo "<td>".$res['NUMCODE']."</td>";
			echo "<td>".$res['PHONECODE']."</td>";
			echo "<td>".$res['CREATED_AT']."</td>";
			echo "<td><a href=\"edit.php?id=$res[ID]\">Edit</a>|<a href=\"delete.php?id=$res[ID]\" onClick=\" return confirm('are you sure you want to delete this record?')\">Delete</a></td>";
			echo "</tr>";
		
		} 

		?>



	</table>

</body>
</html
