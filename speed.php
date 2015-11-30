<!DOCTYPE html>
<html>
<head>
	<!-- META -->
	<title>Kalkulator informatyczny</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<meta name="description" content="" />
	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="css/kickstart.css" media="all" />
	<link rel="stylesheet" type="text/css" href="style.css" media="all" /> 
	
	<!-- Javascript -->
	<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/kickstart.js"></script>
	<script type="text/javascript" src="timer.js"></script>
</head>
<body>
<body onload="odliczanie();">

	<center><div id="zegar" style="color: #FFFFFF;"></div></center>
<div class="grid">
	<div class="col_12"  style="margin-top:25px; margin-bottom:25px;">
		<ul class="menu" style="margin-bottom:25px;">
		<li><a href="index.php">Strona główna - wprowadzenie</a></li>
<li><a href="math.php">Przelicznik miar stosowanych w informatyce</a></li>
<li class="current"><a href="#">Obliczanie szybkości pobierania pliku</a></li>
<li><a href="adres.php">Sprawdzanie dwóch adresów</a>
</ul>
<form method="POST" action="">
<center>
<label for="rozmiar" style="color: white; text-align: center; ">Wprowadź rozmiar pliku:</label>
<input id="rozmiar" type="text" name="rozmiar" placeholder="0" /> 
<select name="sele">
<option>KB</option>
<option>MB</option>
</select><br /><br />
<label for="jednostka" style="color: white; text-align: center; ">Podaj prędkość pobierania(w kb/s): </label>
<input id="speed" type="text" name="speed" placeholder="0" />
 <br /> <br />
<input type="submit" value="Oblicz">
</div>
</form>
</center>
<?php
$rozmiar = $_POST['rozmiar'];
$sele = $_POST['sele'];
$speed = $_POST['speed'];
$KB = "";
$MB = "";
$sec = "";
$min = "";
$h = "";
switch ($sele)
{
 case "KB":
   $sec = $rozmiar/$speed;
   $min = $sec/60;
   $h = $min/60;
      echo "<p style=\"color:white; font-size:14px;\">Twój czas pobierania w :</p>
<p style=\"color:white; font-size:14px;\">
<ul style=\"color:white;\">
<li>Sekundach:  $sec  sec</li>
<li>Minutach: $min min</li>
<li>Godzinach: $h godz</li>
</ul></p>";
   break;
   
   case "MB":
   
   $rozmiar = $rozmiar*1024;
   $sec = $rozmiar/$speed;
   $min = $sec/60;
   $h = $min/60;
   echo "<p style=\"color:white; font-size:14px;\">Twój czas pobierania w :</p>
<p style=\"color:white; font-size:14px;\">
<ul style=\"color:white;\">
<li>Sekundach:  $sec  sec</li>
<li>Minutach: $min min</li>
<li>Godzinach: $h godz</li>
</ul></p>";
   break;
}

?>



	</div>

</div> <!-- End Grid -->
</body>
</html>
