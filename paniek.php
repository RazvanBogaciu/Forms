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

<?php

session_start();
 
 echo '<h2> Er heerst paniek in het koninkrijk ' . $_SESSION["kingdom"] .' Koning '. $_SESSION["teacher"] . ' is ten einde raad en als Koning '. $_SESSION["teacher"] .' ten einde raad is, dan roept hij zijn ten-einde-raadsheer '. $_SESSION["person"] .'. </h2>';
 echo '<br><br>';
 echo $_SESSION["person"] . '! Het is een ramp! Het is een schande!';
 echo '<br><br>';
 echo 'Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?';
 echo '<br><br>';
 echo 'Mijn ' . $_SESSION["animal"] . ' is verdwenen! Zo maar, zonder waarschuwing. En ik had net vraag5 voor hem gekocht!';
 echo '<br><br>';
 echo 'Majesteit, uw ' . $_SESSION["animal"] . ' komt vast vanzelf weer terug?';
 echo '<br><br>';
 echo 'Ja, das leuk en aardig,maar hoe moet ik in de tussentijd ' . $_SESSION["hobby"] .' leren?';
 echo '<br><br>';
 echo 'Maar Sire, daar kunt u toch uw '. $_SESSION["money"] . ' voor gebruiken.';
 echo '<br><br>';
 echo $_SESSION["person"] . ', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had.';
 echo '<br><br>';
 echo $_SESSION["bored"] . ', Sire.';

 
?>

</div>
</body>
</html>