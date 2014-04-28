<?php 
include_once("lib/html.php");
include_once("lib/event.php");
include_once("openDB.php");

$content = "";

$STH->setFetchMode(PDO::FETCH_ASSOC);

while($row = $STH->fetch()){
if($row['id']==$_GET["event"]){
	$id = $row['id'];
			$name = $row['Name'];
			$date = $row['Date'];
			$time = $row['Time'];
			$link = $row['Link'];
			$email = $row['Email'];
			$image = $row['Image'];
			$discription = $row['Discription'];
			$imagealt = $row['image_alt'];

$content = 	new Paragraph(
				new Div(
					new Heading("Edit Event",1)
				,array("class"=>"col-sm-12"))
			).
			new Form(
				new Div(
					new Label("Event name",array("for"=>"inputEventName","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputEventName","placeholder"=>"Event name","Name"=>"Name", "value"=> "$name")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Date",array("for"=>"inputEventDate","class"=>"col-sm-2 control-label")).
					new Div(
					new Input("","date",array("class"=>"form-control","id"=>"inputEventDate","placeholder"=>"Event date","Name"=>"Date","value"=> "$date")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Time",array("for"=>"inputEventTime","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","time",array("class"=>"form-control","id"=>"inputEventTime","placeholder"=>"Event time","Name"=>"Time", "value"=> "$time")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event link",array("for"=>"inputEventLink","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputEventLink","placeholder"=>"Event link","Name"=>"Link","value"=> "$link")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Email",array("for"=>"inputEventEmail","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","email",array("class"=>"form-control","id"=>"inputEventEmail","placeholder"=>"Event contact Email","Name"=>"Email","value"=> "$email")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event image",array("for"=>"inputImage","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputImage","placeholder"=>"Image link","Name"=>"Image", "value"=> "$image")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event image alternate text",array("for"=>"inputImagealt","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputImagealt","placeholder"=>"Image alternate text","Name"=>"imagealt")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event discription",array("for"=>"inputEventDiscription","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("", "text", array("class"=>"form-control","rows"=>"5","id"=>"inputEventDiscription","placeholder"=>"Event discription","Name"=>"Discription"
							, "value"=> "$discription"))
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).				
				new Div(
					new Div(
						new Button("Save Event",array("type"=>"submit","name"=>"submit","value"=>"Upload","class"=>"btn btn-default"))
					,array("class"=>"col-sm-offset-2 col-sm-10"))
				,array("class"=>"form-group"))
			,array("class"=>"form-horizontal","role"=>"form","method"=>"post")).
			new Link("Back to events",array("href"=>"index.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));;}}

if(isset($_POST['submit'])) {
//	$Name=$_POST['Name'];
//	echo $Name;
	$Data=array("Name"=>$_POST["Name"],"Date"=>$_POST["Date"],"Time"=>$_POST["Time"],"Link"=>$_POST["Link"],"Email"=>$_POST["Email"],"Image"=>$_POST["Image"],"image_alt"=>$_POST["Image_alt"],"Discription"=>$_POST["Discription"]);
	$STH2->execute($Data);
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
  <?= $content; ?>
</body>
</html>