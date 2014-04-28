<?php 
include_once("lib/html.php");
include_once("lib/event.php");
include_once("openDB.php");

$event = $_GET["event"];

$STH->setFetchMode(PDO::FETCH_ASSOC);
while($row = $STH->fetch()){
	if($row['id']==$_GET["event"]){
		$id = $row['id'];
		$content =	new Heading($row['Name'],1)."\n".
					new Paragraph($row['Discription'])."\n".
					new Image($row['Image'],$row['image_alt'])."\n".
					new Paragraph($row['Date']." ".$row['Time'])."\n".
					new Link($row['Link'])."\n".
					new Paragraph($row['Email'])."\n".
					new Link("Back to events",array("href"=>"index.php","class"=>"btn btn-primary btn-lg active","role"=>"button")).
					new Link("Edit Event",array("href"=>"editevent.php?event=$id","class"=>"btn btn-primary btn-lg active","role"=>"button"));
	}
}

?>
 <!DOCTYPE html>
 <html>
 <head>
		 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/signup.css">
 	<title></title>
 </head>
 <body>
  <?= $content ?>
 </body>
 </html>