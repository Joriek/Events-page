<?php
	include_once("lib/html.php");
	include_once("evenementen.php");
	

	$imageSize = ["height" => 100, "width" => 100];

	$content = "";

	foreach ($events as $event) {
		$content .= new Div(
			new image($event->image, $imageSize).
			new Link(
				new Heading($event->title),
				['href'=>'antwoord.php?id='.$event->id]
			)
			);
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
	<div class = "container"><?php echo $content ?></div>
</body>
</html>