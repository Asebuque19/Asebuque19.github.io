<?php 
	include_once("config.php");


	if(isset($_POST['update']))

	{
		$id = mysqli_real_escape_string($mysqli, $_POST['id']);
		$ISO = mysqli_real_escape_string($mysqli, $_POST['ISO']);
        $NAME = mysqli_real_escape_string($mysqli, $_POST['NAME']);
        $NICENAME = mysqli_real_escape_string($mysqli, $_POST['NICENAME']);
        $ISO3 = mysqli_real_escape_string($mysqli, $_POST['ISO3']);
        $NUMCODE = mysqli_real_escape_string($mysqli, $_POST['NUMCODE']);
        $PHONECODE = mysqli_real_escape_string($mysqli, $_POST['PHONECODE']);

       


        if( empty($ISO) || empty($NAME) || empty($NICENAME) || empty($ISO3) || empty($NUMCODE) || empty($PHONECODE)){
            if(empty($ISO)){
                echo "<font color='red' > ISO field is empty. </font><br/>";
            }
            if(empty($NAME)){
                echo "<font color='red' > Name field is empty. </font><br/>";
            }
            if(empty($NICENAME)){
                echo "<font color='red' > Nice Name field is empty. </font><br/>";
            }
            if(empty($ISO3)){
                echo "<font color='red' > ISO3 field is empty. </font><br/>";
            }
            if(empty($NUMCODE)){
                echo "<font color='red' > Number Code field is empty. </font><br/>";
            }
            if(empty($PHONECODE)){
                echo "<font color='red' > Phone Code field is empty. </font><br/>";
            }

            echo "<br/><a href='javascript:self.history.back();'>Go back</a>";
    

        } else {
            $result = mysqli_query($mysqli, "UPDATE countries set ISO='$ISO', NAME='$NAME', NICENAME='$NICENAME', ISO3='$ISO3', NUMCODE='$NUMCODE', PHONECODE='$PHONECODE' where id=$id");
            header("Location: index.php");

        }
	}

?>

<?php

$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * from countries where id = $id");

while($res = mysqli_fetch_array($result))
{


	$ISO = $res['ISO'];
	$NAME = $res['NAME'];
	$NICENAME = $res['NICENAME'];
	$ISO3 = $res['ISO3'];
	$NUMCODE = $res['NUMCODE'];
	$PHONECODE = $res['PHONECODE'];
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<title>Edit Data</title>
</head>
<body>

	<form name="form1" method="post" action="edit.php">

		<table width="25%" border="0">
			<tr>
				<td>ISO</td>
				<td><input type="text" name="ISO" value="<?php echo $ISO;?>"></td>

			</tr>
			<tr>
				<td>NAME</td>
				<td><input type="text" name="NAME" value="<?php echo $NAME;?>"></td>
			</tr>
			<tr>
				<td>NICENAME</td>
				<td><input type="text" name="NICENAME" value="<?php echo $NICENAME;?>"></td>
			</tr>
			<tr>
				<td>ISO3</td>
				<td><input type="text" name="ISO3" value="<?php echo $ISO3;?>"></td>
			</tr>
			<tr>
				<td>NUMCODE</td>
				<td><input type="text" name="NUMCODE" value="<?php echo $NUMCODE;?>"></td>
			</tr>
			<tr>
				<td>PHONECODE</td>
				<td><input type="text" name="PHONECODE" value="<?php echo $PHONECODE;?>"></td>
			</tr>
			<tr>
				<td>
					<input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
				</td>
				<td><input type="submit" name="update" value="Update"></td>

			</tr>

			

		</table>
		
	</form>


</body>
</html>