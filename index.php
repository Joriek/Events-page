<?php
	include_once("lib/html.php");
	include_once("openDB.php");
	$links="";

	while($row = $STH->fetch()){
		$id = $row['id'];
		$links=$links.new Link($row['Name'],array("class"=>"list-group-item","href"=>"antwoord.php?event=$id"))."\n";
	}
	

	$imageSize = ["height" => 100, "width" => 100];

	$content = "";

//	foreach ($events as $event) {
//		$content .= new Div(
//			new image($event->image, $imageSize).
//			new Link(
//				new Heading($event->title),['href'=>'antwoord.php?id='.$event->id]
//				)
//			
//			);
//	}
//	$content .= new Link("New Event",array("href"=>"newevent.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));

	$content = 	new Heading("Events",1).
			$links.
			new Paragraph("").
			new Link("New Event",array("href"=>"newevent.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));

	
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