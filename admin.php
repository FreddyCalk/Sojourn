<?php

	$connection = mysql_connect('127.0.0.1','phpland','phpland');

	if( !$connection){
		die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db('phpland',$connection);
	if(!$db_selected){
		die("Can't use phpland : " . mysql_error());
	}


	$query = "SELECT * FROM about";

	$result = mysql_query($query);


	if(!$result){
		die('Invalid Query: ' . mysql_error());
	}

	while($row = mysql_fetch_assoc($result)){
		$rows[$row['section']] = $row;
	}



?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sojourn - Admin</title>
	<link rel="stylesheet" href="admin.css">
</head>


<body>



<select style="width: 400px; display: block; margin:30px auto; font-size:24px;">
	<option><?php print $rows['about']['section']; ?></option>
	<option><?php print $rows['location']['section']; ?></option>
	<option><?php print $rows['location2']['section']; ?></option>
	<option><?php print $rows['membership']['section']; ?></option>
	<option><?php print $rows['pricing']['section']; ?></option>
	<option><?php print $rows['pricingLink']['section']; ?></option>
	<option><?php print $rows['pricing2']['section']; ?></option>
	<option><?php print $rows['image1']['section']; ?></option>
	<option><?php print $rows['image2']['section']; ?></option>
	<option><?php print $rows['image3']['section']; ?></option>
	<option><?php print $rows['image4']['section']; ?></option>
	<option><?php print $rows['image5']['section']; ?></option>
	<option><?php print $rows['image6']['section']; ?></option>
	<option><?php print $rows['image7']['section']; ?></option>
	<option><?php print $rows['image8']['section']; ?></option>
	<option><?php print $rows['image9']['section']; ?></option>
	<option><?php print $rows['image10']['section']; ?></option>
	<option><?php print $rows['image11']['section']; ?></option>
	<option><?php print $rows['image12']['section']; ?></option>
	<option><?php print $rows['image13']['section']; ?></option>
	<option><?php print $rows['image14']['section']; ?></option>
	<option><?php print $rows['image15']['section']; ?></option>
</select>
<textarea style="margin: 30px auto; width:400px; height: 200px; display:block; font-size:16px;">
</textarea>
<div style="text-align:center">
	<input type="submit" style="width:150px; height: 50px; background-color: #009944; border-radius: 10px; margin:auto; font-size:24px;" value="Save Changes">
</div>






	
</body>
</html>
















