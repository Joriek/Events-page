<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "oefening_events";
$DBH=new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

$STH = $DBH->query('SELECT id,Name,Date,Time,Link,Email,Image,Discription,image_alt from events');
$STH2 = $DBH->prepare("INSERT INTO events(Name,Date,Time,Link,Email,Image,image_alt,Discription)
			value(:Name,:Date,:Time,:Link,:Email,:Image,:image_alt,:Discription)");
?>