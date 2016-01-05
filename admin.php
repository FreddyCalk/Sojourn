<?php

	$link = mysql_connect('127.0.0.1','phpland','phpland');

	if( !$link){
		die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db('phpland',$link);
	if(!$db_selected){
		die("Can't use phpland : " . mysql_error());
	}


	$query = "SELECT * FROM about";

	$result = mysql_query($query);


	if(!$result){
		die('Invalid Query: ' . mysql_error());
	}

	while($row = mysql_fetch_assoc($result)){
		$rows[] = $row;
	}

	// exit;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sojourn - Admin</title>
	<link rel="stylesheet" href="admin.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>


<body style="background-image: url('darkgreenbg.png');">
	<div class="container">
		<div class="row">
			<div class="dropdown">


				<select class='form-control' style="width: 400px; display: block; margin:30px auto; font-size:24px;">
				<?php 
					foreach($rows as $row){
						print '<option value="'. $row['section']. '">' . $row['section'] . '</option>';
					}
				?>
				</select>
			</div>
		</div>
		<div class='row B'>
			<div class='form-group'>
				<textarea  id='content' class='form-control' style="margin: 30px auto; width:400px; height: 200px; display:block; font-size:16px; color:black;"></textarea>
				<div style="text-align:center">
					<input class="btn btn-warning"type="submit" style="width:200px; height: 50px; border-radius: 10px; margin:auto; font-size:24px;" value="Save Changes">
				</div>
			</div>
		</div>
			
	</div>
	
</body>

<script>

$(document).ready(function(){
	$('.form-control').change(function(){
		var content = $(this).val()
		var url = 'http://local-phpland.com/admin_api.php?page=about&section='+content;

		$.getJSON(url, function(result){
			$('#content').val(result.content);
		})
	})
})


</script>

</html>
<?php print $rows[0]['content'];?>















