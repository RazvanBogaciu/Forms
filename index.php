<!DOCTYPE html>
<html>
<head>

<link href="Style.css" rel= 'stylesheet' type="Text/css">
<link href="https://fonts.googleapis.com/css2?family=Rock+Salt&display=swap" rel="stylesheet">
</head>

<body>

<div id='header'>
<h1> Mad Libs </h1>
</div>

<div id='pagina'>
<nav id='nav'>
<a href='index.php'> er heerst paniek... </a>
<a href='ontkunde.php'> Onkunde </a>
</nav>
<h2>Er heerst paniek...</h2>
  <form action='index.php' method="post">
  <label for="fname">Welk dier zou je nooit als huisdier willen hebben? </label>
  <input type="text" id="animal" name="animal" ><br>
  <label for="lname">Wie is de belangrijkste persoon in je leven? </label>
  <input type="text" id="person" name="person" ><br>
  <label for="lname">In welk land zou je graag willen wonen? </label>
  <input type="text" id="kingdom" name="kingdom" ><br>
  <label for="lname">Wat doe je als je je verveelt? </label>
  <input type="text" id="bored" name="bored" ><br>
  <label for="lname">Met welk speelgoed speelde je als kind het meest? </label>
  <input type="text" id="toys" name="toys" ><br>
  <label for="lname">Bij welke docent spijbel je het liefst?  </label>
  <input type="text" id="teacher" name="teacher" ><br>
  <label for="lname">Als je €100.000,- had, wat zou je dan kopen?  </label>
  <input type="text" id="money" name="money" ><br>
  <label for="lname">Wat is je favoriete bezigheid?  </label>
  <input type="text" id="hobby" name="hobby" ><br>

  <br><br>

 <input type="submit" name="">

</form>

<?php
session_start();

 $_SESSION["animal"] = htmlspecialchars($_POST["animal"]);
$_SESSION["person"] = htmlspecialchars($_POST["person"]);
$_SESSION["kingdom"] = htmlspecialchars($_POST["kingdom"]);
$_SESSION["bored"] = htmlspecialchars($_POST["bored"]);
$_SESSION["toys"] = htmlspecialchars($_POST["toys"]);
$_SESSION["teacher"] = htmlspecialchars($_POST["teacher"]);
$_SESSION["money"] = htmlspecialchars($_POST["money"]);
$_SESSION["hobby"] = htmlspecialchars($_POST["hobby"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if(empty($_POST['animal']) || empty($_POST['person']) || empty($_POST['kingdom']) || empty($_POST['bored']) || empty($_POST['toys']) || 
   empty($_POST['teacher']) || empty($_POST['money']) || empty($_POST['hobby']) ){ 

 echo '<b>Niet alle velden zijn ingevuld!</b> ';
}
else {
	header('Location: paniek.php'); 


}
}


?>



</div>





</body>
</html>