<?php 
	include_once("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>

		<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Add Script</title>

	<?php

	if(isset($_POST['Submit']))
	{
			$ISO = mysqli_real_escape_string($mysqli, $_POST['ISO']);
			$NAME = mysqli_real_escape_string($mysqli, $_POST['NAME']);
			$NICENAME = mysqli_real_escape_string($mysqli, $_POST['NICENAME']);
			$ISO3 = mysqli_real_escape_string($mysqli, $_POST['ISO3']);
			$NUMCODE = mysqli_real_escape_string($mysqli, $_POST['NUMCODE']);
			$PHONECODE = mysqli_real_escape_string($mysqli, $_POST['PHONECODE']);


				if(empty($ISO) || empty($NAME) || empty($NICENAME) || empty($ISO3) || empty($NUMCODE) || empty($PHONECODE) ){

					if(empty($ISO)){
						echo "<font color='red'> ISO field is empty. </font><br/>";
					}

					if(empty($NAME)){
						echo "<font color='red'> NAME field is empty. </font><br/>";
					}

					if(empty($NICENAME)){
						echo "<font color='red'> NICENAME field is empty. </font><br/>";
					}

					if(empty($ISO3)){
						echo "<font color='red'> ISO3 field is empty. </font><br/>";
					}

					if(empty($NUMCODE)){
						echo "<font color='red'> NUMCODE field is empty. </font><br/>";
					}

					if(empty($PHONECODE)){
						echo "<font color='red'> PHONECODE field is empty. </font><br/>";
					}


					echo "<br/><a href='javascript:self.history.back();'>Go back</a>";

				} else {

					mysqli_query($mysqli, "INSERT INTO  countries(ISO, NAME, NICENAME, ISO3, NUMCODE, PHONECODE) VALUES ('$ISO', '$NAME', '$NICENAME', '$ISO3', '$NUMCODE', '$PHONECODE')");
					echo "<font color='green'> Data Added Sucscessfully.";
					echo "<br/><a href ='index.php'> View Result";
			
				}



	}



?>
</head>
<body>

</body>
</html>