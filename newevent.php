<?php 
include_once("lib/html.php");
include_once("lib/event.php");
include_once("openDB.php");

$content = 	new Paragraph(
				new Div(
					new Heading("New event",1)
				,array("class"=>"col-sm-12"))
			).
			new Form(
				new Div(
					new Label("Event name",array("for"=>"inputEventName","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputEventName","placeholder"=>"Event name","Name"=>"Name")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Date",array("for"=>"inputEventDate","class"=>"col-sm-2 control-label")).
					new Div(
					new Input("","date",array("class"=>"form-control","id"=>"inputEventDate","placeholder"=>"Event date","Name"=>"Date")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Time",array("for"=>"inputEventTime","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","time",array("class"=>"form-control","id"=>"inputEventTime","placeholder"=>"Event time","Name"=>"Time")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event link",array("for"=>"inputEventLink","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputEventLink","placeholder"=>"Event link","Name"=>"Link")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event Email",array("for"=>"inputEventEmail","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","email",array("class"=>"form-control","id"=>"inputEventEmail","placeholder"=>"Event contact Email","Name"=>"Email")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event image",array("for"=>"inputImage","class"=>"col-sm-2 control-label")).
					new Div(
						new Input("","text",array("class"=>"form-control","id"=>"inputImage","placeholder"=>"Image link","Name"=>"Image")) 
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).
				new Div(
					new Label("Event discription",array("for"=>"inputEventDiscription","class"=>"col-sm-2 control-label")).
					new Div(
						new Textarea("",array("class"=>"form-control","rows"=>"5","id"=>"inputEventDiscription","placeholder"=>"Event discription","Name"=>"Discription"))
					,array("class"=>"col-sm-10"))
				,array("class"=>"form-group")).				
				new Div(
					new Div(
						new Button("Include event",array("type"=>"submit","name"=>"submit","value"=>"Upload","class"=>"btn btn-default"))
					,array("class"=>"col-sm-offset-2 col-sm-10"))
				,array("class"=>"form-group"))
			,array("class"=>"form-horizontal","role"=>"form","method"=>"post")).
			new Link("Back to events",array("href"=>"index.php","class"=>"btn btn-primary btn-lg active","role"=>"button"));;

if(isset($_POST['submit'])) {
//	$Name=$_POST['Name'];
//	echo $Name;
	$Data=array("Name"=>$_POST["Name"],"Date"=>$_POST["Date"],"Time"=>$_POST["Time"],
		"Link"=>$_POST["Link"],"Email"=>$_POST["Email"],
		"Image"=>$_POST["Image"],"Discription"=>$_POST["Discription"]);
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
<?php echo $content; ?>
</body>
</html>

