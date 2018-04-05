<!DOCTYPE HTML>


<html>
	<head>
		<title>Ari Garcia Oscos</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" type="text/css" href="style/main.css" />

		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
		<script src="jquery-3.3.1.min.js"></script>

		<script src="js/script.js"></script>

		
	</head>


	<body>


		<div class="nav">

			<label for="toggle">&#9776;</label>
			<input type="checkbox" id="toggle"/>


			<div class="menu">

				<a href="index.php">About</a>
				<a href="recent.php">Recent Projects</a>
				<a href="news.php">News</a>
				<a href="endorse.php">Endorsements|Equipment</a>
				<a href="contact.php">Contact | Social Media</a>
				

			</div>


		</div>
		<script src="http://code.jquery.com/jquery-3.3.1.min.js"></script>
		<script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
		
		<!--
		<script>
		$(function(){
  		$('a').each(function() {
    	if ($(this).prop('href') == window.location.href) {
      	$(this).addClass('current');
    	}
  		});
		});
		</script>.  -->

		<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
		<script type="text/javascript">
			
			$(document).ready(function(){

				$('.nav').click(function(){

					$('.menu').toggleClass('active');
				})
			})
		</script>




	

	</body>


</html>