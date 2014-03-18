<?php

	include_once("lib/html.php");
	include_once("lib/event.php");

	$imageSize = ["height" => 100, "width" => 100];


	$events = [	new Event('Event 1: Lorem ipsum dolor sit amet', 'img1.png', 'discription', 'date', 'time', 'website', 'email'),
				new Event('Event 2: Consectetur adipisicing elit', 'img2.jpg', 'discription', 'date', 'time', 'website', 'email'),
				new Event('Event 3: Sed do eiusmod ', 'img3.jpg', 'discription', 'date', 'time', 'website', 'email'),
				new Event('Event 4: Tempor incididunt', 'img4.jpg', 'discription', 'date', 'time', 'website', 'email'),
				new Event('Event 5: Dolore magna aliqua', 'img5.jpg', 'discription', 'date', 'time', 'website', 'email')];

	$content = "";

	foreach ($events as $event) {
		$content .= new Div(
			new Link(
				new Heading($event->title),
				['href'=>'antwoord.php']
			).
			new image($event->image, $imageSize));
	}

		
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Oefening Events</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
</head>
<body>
	<?= $content ?>
</body>
</html>