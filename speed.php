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

<div id="zegar" style="color: #FFFFFF; float: right; font-size:14px;"></div>	<div class="grid">
	<div class="col_12" style="margin-top:25px;">
<center>
<center><h2><p style="color: white;">Kalkulator sieci</p></h2></center>
<div class="menu_1">

<a href="index.php"><p style="background: #B600FF; color: white; ">Strona główna</p></a>
<a href="math.php"><p style="background: red; color: white;">Przeliczanie jednostek</p> </a>
<a href="#"><p style="background: blue; color: white;">Obliczanie transferu danych</p> </a>
<a href="ramka.php"><p style="background: #FF9B00;; color: white;">Obliczanie ramki sieciowej</p> </a>
<a href="adres.php"><p style="background: green; color: white;">Analiza adresów IPv4</p> </div></center></a>

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
if ($rozmiar == 0 && $sele == 0){
	echo "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \"><p style=\"color: red;\">PAMIĘTAJ! Nie możesz wpisać 0 lub pustej wartości.</p></label> </div>";
}
else{
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
}

?>



	</div>

</div> <!-- End Grid -->
</body>
</html>
