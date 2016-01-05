<?php

	$connection = mysql_connect('127.0.0.1','phpland','phpland');
	
	if( !$connection){
		die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db('phpland',$connection);
	if(!$db_selected){
		die("Can't use phpland : " . mysql_error());
	}


	$query = "SELECT * FROM about WHERE section = 'body'";

	$result = mysql_query($query);


	if(!$result){
		die('Invalid Query: ' . mysql_error());
	}

	while($row = mysql_fetch_assoc($result)){
		$rows[] = $row['content'];
	}

	$header_content = $rows[0];
	$second_body_text = $rows[1];
	$third_body_text = $rows[2];
	$fourth_body_text = $rows[3];
	$fifth_body_text =  $rows[4];
	$sixth_body_text = $rows[5];
	$seventh_body_text = $rows[6];

	$query = "SELECT * FROM about WHERE section = 'image'";

	$result = mysql_query($query);


	if(!$result){
		die('Invalid Query: ' . mysql_error());
	}

	while($row = mysql_fetch_assoc($result)){
		$imageRows[] = $row['content'];
	}
	// print '<pre>';
	// print_r($newRows);

	$image_url_1 = $imageRows[0];
	$image_url_2 = $imageRows[1];
	$image_url_3 = $imageRows[2];
	$image_url_4 = $imageRows[3];
	$image_url_5 = $imageRows[4];
	$image_url_6 = $imageRows[5];
	$image_url_7 = $imageRows[6];
	$image_url_8 = $imageRows[7];
	$image_url_9 = $imageRows[8];
	$image_url_10 = $imageRows[9];
	$image_url_11 = $imageRows[10];
	$image_url_12 = $imageRows[11];
	$image_url_13 = $imageRows[12];
	$image_url_14 = $imageRows[13];
	$image_url_15 = $imageRows[14];

	// exit;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sojourn Adventues - About Us</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="page-wrapper">
		<div id="top">
			<div id="top-content">
				<div id="adventure-link"><a class="text" href="#"><img src="http://pq.b5z.net/zirw/317/i/u/10099375/i/menu/qb658.gif">Prepare for Your Adventure</a><a href="https://twitter.com/SojournAdven"><img src=<?php print $image_url_1; ?>></a><a href="https://www.facebook.com/sojournadventures"><img src=<?php print $image_url_2; ?>></a><a href="https://www.instagram.com/SojournAdventures/"><img src=<?php print $image_url_3; ?>></a><a class="text" href="#"><img src="http://pq.b5z.net/zirw/317/i/u/10099375/i/menu/qb877.gif">Feedback</a></div>
				<div id="social-links"></div>
			</div>
		</div>
		<div id="header">
			<div id='header-content'>
				<div id="header-image">
					<a href="#"><img src=<?php print $image_url_4; ?>></a>
				</div>
				<div id="header-links">
					<a href="#">Home</a>
					<a id="about" href="#">About Us</a>
					<a href="#">Programs</a>
					<a href="#">Leadership</a>
					<a id="contact" href="#">Contact Us</a>
				</div>
			</div>
		</div>

		
		<div id="body-wrapper">
			<div id="body-content">
				<h1><img style="display:inline" src=<?php print $image_url_5; ?>> About Sojourn</h1>
				<div id="about-wrapper" class="info">
					<div id="about"></div>
					<div id="definition">
						<a href="/"><img id="about-image" src=<?php print $image_url_6; ?>></a>
					</div>
					<div class="text-body">
						<p><?php print $header_content ?></p>

					</div>
					<div id="about-video" class="about-image-box"><img src=<?php print $image_url_7; ?> class="esbIc esbId" width="200" height="100"><br/>Check out this video about us on Fox 5</div>
				</div>
				<div id="location" class="info"><h2>Location</h2>
					<div class="text-body">
						<p><?php print $second_body_text ?><br/><br/>
						<?php print $third_body_text ?>
						
						</p>
					</div>
					<div id="map" class="about-image-box"><img src=<?php print $image_url_8; ?> class="esbIc esbId" width="200" height="100"></div>
				</div>
				<div id="acct" class="info"><h2>ACCT Membership</h2>
					<div class="text-body">
						<p><?php print $fourth_body_text ?></p>
					</div>
					<div id="acct-link" class="about-image-box"><img src=<?php print $image_url_9; ?> class="esbIc esbId" width="200" height="100"></div>
				</div>
				<div id="pricing" class="info"><h2>Pricing</h2>
					<div>
						<?php print $fifth_body_text;
								print "<a href='/'>$sixth_body_text</a>" ?><br/><br/>
					</div>
					<div class="italic">
						<?php print $seventh_body_text ?>
					</div>
				</div>
			</div>

			<div id="side-bar">
				<div id="quote" class="info-button"><img src=<?php print $image_url_10; ?> class="esbIc esbIn" width="200" height="100"></div>
				<div id="photos" class="info-button"><img src=<?php print $image_url_11; ?> class="esbIc esbIn" width="200" height="70"></div>
				<div id="video-tour" class="info-button"><img src=<?php print $image_url_12; ?> class="esbIc esbIn" width="200" height="70"></div>
				<div id="prepare" class="info-button"><img src=<?php print $image_url_13; ?> class="esbIc esbIn" alt="Prepare for your Event button" width="200" height="70"></div>
			</div>
		</div>
		<div id="footer">
			<div id='footer-content'>
				<div id="address-container">
					9500 Medlock Bridge Rd.&nbsp; |&nbsp; Johns Creek, GA 30097&nbsp; |&nbsp; Phone: 678.405.2106 &nbsp; | &nbsp; Email:&nbsp;<a href="mailto:sojourn@perimeter.org">sojourn@perimeter.org</a>
				</div>
				<img src=<?php print $image_url_14; ?>>
				<a href="http://www.sojournadventures.org/staff_login"><img id="staff-login" src=<?php print $image_url_15; ?>></a>
				<div id="creator">Webpage Created by <a href="http://www.freddycalk.com">Freddy Calk</a> and <a href="http://www.turboflanagan.com">Peter Flanagan</a></div>
			</div>
		</div>
	</div>
</body>
</html>