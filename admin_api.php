<?php

	include 'inc/db_connect.php';

	if($_POST['crud_task'] == "addnew"){
		$section = addslashes($_POST['section']);
		$content = addslashes($_POST['content']);
		$query = "INSERT INTO about (section,content) VALUES ('" . $section . "', '" . $content . "')";
		$result = mysql_query($query);
		if(mysql_error()){
			print mysql_error();
		}else{ 
			header('Location: http://local-phpland.com/admin.php?result=success');
		}
	}

	if($_POST['crud_task'] == "update"){
		// print '<pre>';
		// print_r($_POST);
		// exit;
		if(isset($_POST['section'])){
			$section = addslashes($_POST['section']);
			$content = addslashes($_POST['content']);
			$query = "UPDATE about SET content = '" . $content . "' WHERE section = '" . $section . "'";
			$update = mysql_query($query);
			if(mysql_error()){
				print mysql_error();
			}else{ 
				header('Location: http://local-phpland.com/admin.php?result=success');
			}
		}elseif($_POST['delete']){
			$query = "DELETE FROM about WHERE id=" . $_POST['id'];
		}
	}

	if($_GET){
		$query = "SELECT * FROM about WHERE section ='".$_GET['section']."'";
		
		$result = mysql_query($query);

		$row = mysql_fetch_assoc($result);

		if($row){
			print json_encode($row);
		}else{
			print json_encode('error!');
		}
	}

	exit;

?>