<?php

	include 'inc/db_connect.php';

	if(!isset($_SESSION['username'])){
		header('Location: http://local-phpland.com/');
		exit;
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
	<div style="text-align:center">
		<h1 style="color:white;">ADMIN PAGE</h1>
	</div>
	<div class="container">

		<?php if(isset($_SESSION['username'])){
			print '<h3 style="color:white">Welcome back, '.$_SESSION['username'].'</h3>';
		} 
		?>
		<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingOne">
		    		<h4 class="panel-title">
		    			<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		        			Add New Section
		    			</a>
		    		</h4>
		    	</div>
		    	<div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
		    		<div class="panel-body">
						This is where our add stuff will go
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingTwo">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
							Delete Section
						</a>
					</h4>
				</div>
				<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
					<div class="panel-body">
						This is where our delete stuff will go
					</div>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading" role="tab" id="headingThree">
					<h4 class="panel-title">
						<a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
							Update Section
						</a>
					</h4>
				</div>
				<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
					<div class="panel-body">
						<form action="http://local-phpland.com/admin_api.php" method="post">
							<div class="row">
								<div class="dropdown">
									<select id="drop-down" name="section" class='form-control' style="width: 400px; display: block; margin:30px auto; font-size:24px;">
									<option disabled selected>Choose A Section...</option>
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
									<textarea  id='content' name="content" class='form-control' placeholder="Edit content here..." style="margin: 30px auto; width:400px; height: 200px; display:block; font-size:16px; color:black;"></textarea>
									<div style="text-align:center">
										<input class="btn btn-lg btn-warning" type="submit" style="width:200px; height: 50px; border-radius: 10px; margin:auto; font-size:24px;" value="Save Changes">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
</body>

<script type="text/javascript">

$(document).ready(function(){
	updateTextArea($('#drop-down').val());
	$('#drop-down').change(function(){
		updateTextArea($(this).val());
	
	})
})
function updateTextArea(section){
		var url = 'http://local-phpland.com/admin_api.php?page=about&section='+section;
		$.getJSON(url, function(result){
			$('#content').val(result.content);
		})
}

</script>

</html>















