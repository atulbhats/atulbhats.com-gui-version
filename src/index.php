<?php
$ip=$_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE HTML>
	<head>
		<title>AtulBhatS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="AtulBhatS, Atul Bhat, Physics, Cosmology, Photoshop, Ambigrams, Coding, atulbhats, Mangalore.">
		<meta name="description" content="AtulBhat, a physics student from Mangalore.">
		<meta name="robots" content="index,follow">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<script src="js/js.js"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/style.css">
		<script>
			
		</script>
	</head>

	<body>
		<div id="header">
			<div class="dp">
				<img src="img/dp.jpg">
			</div>
			<div class="contact">
				<h2>Atul Bot (Bhat)</h2>
				<p>Online</p>
			</div>
			<div class="options">
				<div class="dropdown">
					<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
						<span class="fa fa-circle"></span>
						<span class="fa fa-circle"></span>
						<span class="fa fa-circle"></span>
					</button>
					<ul class="dropdown-menu">
				    <li><a href="javascript:clear_chat()">Clear History</a></li>
				    <li><a href="#" data-toggle="modal" data-target="#helpModal">Help</a></li>
				    <li><a href="#" data-toggle="modal" data-target="#verModal">Version</a></li>
				  </ul>
				</div>
			</div>
		</div>
		<div class="type-window">
			<div class="btn-group btn-group-justified">
				<!--<textarea class="btn-primary message" id="message" placeholder="Message" row="1"></textarea>-->
				<div class="message" contentEditable>Message</div>
				<div class="buttonholder"><button class="send"></button></div>
			</div>
		</div>
		<div class="chat-window">
			<noscript>
				<div class="ping">
					<div class="ping-in">
						<span class="message-content">
							Hey There!<br>
							Looks like javascript has been disabled on your system. Or it probably did not load Jquery due to connection error. Please Enable javascript, if disabled, or reload this page.
						</span>
						<span class="timestamp">11:59 PM</span>
					</div>
				</div>
			</noscript>
		</div>
		
		<div id="verModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Version</h4>
		      </div>
		      <div class="modal-body">
		      	<p>AtulBhatS GUI v1.3 | Copyright <i class="fa fa-copyright"></i><?php echo " ".date('Y');?>.</p>
		        <p>Design Inspiration: Telegram Messenger</p>
		        <p>Background Image: Telegram API</p>
		        <p>Emojis : Unicode Emojis , Emojipedia/Apple</p>
		        <p><a href="#" data-toggle="modal" data-target="#chlogModal">View Changelog</a> </p>
		      </div>
		    </div>
		  </div>
		</div>

		<div id="chlogModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Changelog</h4>
		      </div>
		      <div class="modal-body">
		      	<p>v1.3 : Changelog added.</p>
		      	<p>v1.2 : Responses to Laughter commands added; Laughter Emoji <span class="emoji emoji-laugh"></span> added.</p>
		        <p>v1.1 : 'Help' command added; 5 responses added to unknown commands.</p>
		        <p>v1.0 : First Look and basic commands.</p>
		        <p></p>
		      </div>
		    </div>
		  </div>
		</div>

		<div id="helpModal" class="modal fade" role="dialog">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Here are the commands you can use</h4>
		      </div>
		      <div class="modal-body">
		      		<table>
						<tr><td colspan='2'>Use these Identifiers as pings.</td></tr>
						<tr><td><b>bio</b></td><td>Displays my bio</td></tr>
						<tr><td><b>facebook</b></td><td>Gives a link to my facebook profile. <b>fb</b> will also work</td></tr>
						<tr><td><b>twitter</b></td><td>Gives a link to my twitter profile. <b>tw</b> will also work</td></tr>
						<tr><td><b>instagram</b></td><td>Gives a link to my instagram photos. <b>ig</b> will also work</td></tr>
						<tr><td><b>linkedin</b></td><td>Gives a link to my linkedin profile. <b>in</b> will also work</td></tr>
						<tr><td><b>email</b></td><td>Displays Email Address</td></tr>
						<tr><td><b>ping</b></td><td>Guides you through the process to send me a message.<b>send message</b> will also work</td></tr>
						<tr><td><b>pic</b></td><td>For Those of you who haven't met me, This command gives you an image of me.</td></tr>
						<tr><td><b>exit</b></td><td>Exits Chat.</td></tr>
					</table>
		      </div>
		    </div>
		  </div>
		</div>



	</body>
</html>