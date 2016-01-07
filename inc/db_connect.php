<?php

	session_start();

	$link = mysql_connect('127.0.0.1','phpland','phpland');

	if(!$link){
		die('Could not connect : ' . mysql_error());
	}

	$db_selected = mysql_select_db('phpland', $link);
	
	if(!$db_selected){
		die("Can't use phpland : ". mysql_error());
	}

?>