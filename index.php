<?php


	$connection = mysql_connect('127.0.0.1','phpland','phpland');
	
	if( !$connection){
		die('Could not connect: ' . mysql_error());
	}
	$db_selected = mysql_select_db('phpland',$connection);
	if(!$db_selected){
		die("Can't use phpland : " . mysql_error());
	}


	$query = "SELECT * FROM about WHERE section = 'header'";

	$result = mysql_query($query);

	if(!$result){
		die('Invalid Query: ' . mysql_error());
	}


	$first_body_text = "Our lives take us on many journeys; with our careers, families, sports teams, schools, etc...  At Sojourn, our desire is to provide a safe and fun environment to Sojourn from these life journeys for a brief period of time in order to reflect, gain new insight, and enter back into our journeys with new perspective.";
	$second_body_text = "Most Sojourn programming takes place on the property of Perimeter church in John's Creek, GA. The property is located at the corner of Old Alabama Rd. and Hwy 141/Medlock Bridge Rd.";
	$third_body_text = "If location is a challenge, ask us about off-site adventures and portable programs.";
	$fourth_body_text = "The Association for Challenge Course Technology is recognized as the leading professional resource for those who create safe and effective challenge course programs that facilitate learning and positive change in individuals, groups, and communities. We are an organizational member of ACCT and our products and services are independent crom those offered by ACCT.  We are not an agent of ACCT nor does the ACCT warrant, endorse, or approve any product or service offered by us.  Sojourn operates under the standards set by ACCT.  All of our staff members are training according to ACCT standards and our key staff members have advanced ACCT certification.";
	$fifth_body_text = "Pricing varies depending on the length of your adventure, size of your group, and the activities necessary to attain certain group goals and objectives.  For full pricing and further details about booking a course, please ";
	$sixth_body_text = "contact the Sojourn office."

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
				<div id="adventure-link"><a class="text" href="#"><img src="http://pq.b5z.net/zirw/317/i/u/10099375/i/menu/qb658.gif">Prepare for Your Adventure</a><a href="https://twitter.com/SojournAdven"><img src="http://q.b5z.net/zirw/h495b/i/t/w/integration/social/icons/fcc1/tw_32x32.png"></a><a href="https://www.facebook.com/sojournadventures"><img src="http://q.b5z.net/zirw/h495b/i/t/w/integration/social/icons/fcc1/fb_32x32.png"></a><a href="https://www.instagram.com/SojournAdventures/"><img src="http://q.b5z.net/zirw/h495b/i/t/w/integration/social/icons/fcc1/ig_32x32.png"></a><a class="text" href="#"><img src="http://pq.b5z.net/zirw/317/i/u/10099375/i/menu/qb877.gif">Feedback</a></div>
				<div id="social-links"></div>
			</div>
		</div>
		<div id="header">
			<div id='header-content'>
				<div id="header-image">
					<a href="#"><img src="http://pq.b5z.net/i/u/10099375/i/sojourn_logo_header.png"></a>
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
				<h1><img style="display:inline" src="http://pq.b5z.net/zirw/317/i/u/10099375/i/menu/tico1.png"> About Sojourn</h1>
				<div id="about-wrapper" class="info">
					<div id="about"></div>
					<div id="definition">
						<a href="/"><img id="about-image" src="http://pq.b5z.net/i/u/10099375/i/About_Sojourn_Header.jpg"></a>
					</div>
					<div class="text-body">
						<p><?php print $first_body_text ?></p>

					</div>
					<div id="about-video" class="about-image-box"><img src="http://pq.b5z.net/i/u/10099375/i/Fox_5_Video_of_Sojourn.png" class="esbIc esbId" width="200" height="100"><br/>Check out this video about us on Fox 5</div>
				</div>
				<div id="location" class="info"><h2>Location</h2>
					<div class="text-body">
						<p><?php print $second_body_text ?><br/><br/>
						<?php print $third_body_text ?>
						
						</p>
					</div>
					<div id="map" class="about-image-box"><img src="http://pq.b5z.net/i/u/10099375/i/Get_Directions_to_Ropes_Course_Button.png" class="esbIc esbId" width="200" height="100"></div>
				</div>
				<div id="acct" class="info"><h2>ACCT Membership</h2>
					<div class="text-body">
						<p><?php print $fourth_body_text ?></p>
					</div>
					<div id="acct-link" class="about-image-box"><img src="http://pq.b5z.net/i/u/10099375/i/ACCT_Logo_Button.png" class="esbIc esbId" width="200" height="100"></div>
				</div>
				<div id="pricing" class="info"><h2>Pricing</h2>
					<div>
						<?php print $fifth_body_text;
								print "<a href='/'>$sixth_body_text</a>" ?><br/><br/>
					</div>
					<div class="italic">
						Note:  Sojourn currently focuses exclusively on team building with pre-existing groups and therefore does not allow individual sign-ups for zip lining, birthday parties, or similar outings.
					</div>
				</div>
			</div>

			<div id="side-bar">
				<div id="quote" class="info-button"><img src="http://pq.b5z.net/i/u/10099375/i/Get_a_Quote.png" class="esbIc esbIn" width="200" height="100"></div>
				<div id="photos" class="info-button"><img src="http://pq.b5z.net/i/u/10099375/i/Photo_Gallery_Button.png" class="esbIc esbIn" width="200" height="70"></div>
				<div id="video-tour" class="info-button"><img src="http://pq.b5z.net/i/u/10099375/i/video_tour_button.png" class="esbIc esbIn" width="200" height="70"></div>
				<div id="prepare" class="info-button"><img src="http://pq.b5z.net/i/u/10099375/i/Prepare_for_Your_Event_Sidebar_Button.png" class="esbIc esbIn" alt="Prepare for your Event button" width="200" height="70"></div>
			</div>
		</div>
		<div id="footer">
			<div id='footer-content'>
				<div id="address-container">
					9500 Medlock Bridge Rd.&nbsp; |&nbsp; Johns Creek, GA 30097&nbsp; |&nbsp; Phone: 678.405.2106 &nbsp; | &nbsp; Email:&nbsp;<a href="mailto:sojourn@perimeter.org">sojourn@perimeter.org</a>
				</div>
				<img src="http://q.b5z.net/i/u/10099375/i/acct_logo_footer.png">
				<a href="http://www.sojournadventures.org/staff_login"><img id="staff-login" src="http://q.b5z.net/i/u/10099375/i/staff_login_button_footer.png"></a>
				<div id="creator">Webpage Created by <a href="http://www.freddycalk.com">Freddy Calk</a> and <a href="http://www.turboflanagan.com">Peter Flanagan</a></div>
			</div>
		</div>
	</div>
</body>
</html>