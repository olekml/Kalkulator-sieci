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
<a href="speed.php"><p style="background: blue; color: white;">Obliczanie transferu danych</p> </a>
<a href="ramka.php"><p style="background: #FF9B00;; color: white;">Obliczanie ramki sieciowej</p> </a>
<a href="#"><p style="background: green; color: white;">Analiza adresów IPv4</p> </div></center></a>

	
	<form method="POST" action="">
<div id="ip1" style="margin-top:25px; text-align:center; color:white; font-size:16px;">
<label for="ip1" style="color: white; text-align: center; ">Wprowadź adres IP #1:</label> 
<input id="ip100" type="text" name="ip100" placeholder="0" style="width: 45px;"/>.
<input id="ip101" type="text" name="ip101" placeholder="0" style="width: 45px;"/>.
<input id="ip102" type="text" name="ip102" placeholder="0" style="width: 45px;"/>.
<input id="ip103" type="text" name="ip103" placeholder="0" style="width: 45px;"/>/
<input id="maska" type="text" name="maska" placeholder="0" style="width: 45px;"/>
	</div>
	
	<div id="ip2" style="margin-top:25px; text-align:center; color:white; font-size:16px;">
<label for="ip1" style="color: white; text-align: center; ">Wprowadź adres IP #2:</label> 
<input id="ip200" type="text" name="ip200" placeholder="0" style="width: 45px;"/>.
<input id="ip201" type="text" name="ip201" placeholder="0" style="width: 45px;"/>.
<input id="ip202" type="text" name="ip202" placeholder="0" style="width: 45px;"/>.
<input id="ip203" type="text" name="ip203" placeholder="0" style="width: 45px;"/>/
<input id="maska2" type="text" name="maska2" placeholder="0" style="width: 45px;"/>
	</div>
<div id="przy" style="text-align:center; margin-top:25px;"><input type="submit" value="Sprawdź dwa adresy"></div>
</form>
<?PHP
$wyn = 0;
$tek = "";
$tek1 = "";
$stat = "";
$tek255 = "";
$ip100 = $_POST['ip100'];
$ip101 = $_POST['ip101'];
$ip102 = $_POST['ip102'];
$ip103 = $_POST['ip103'];
$maska = $_POST['maska'];

$ip100a = decbin($ip100);
$ip101a = decbin($ip101);
$ip102a = decbin($ip102);
$ip103a = decbin($ip103);
$maskaa = decbin($maska);


$ip200 = $_POST['ip200'];
$ip201 = $_POST['ip201'];
$ip202 = $_POST['ip202'];
$ip203 = $_POST['ip203'];
$maska2 = $_POST['maska2'];

$ip200a = decbin($ip200);
$ip201a = decbin($ip201);
$ip202a = decbin($ip202);
$ip203a = decbin($ip203);
$maska2a = decbin($maska2);

echo "";
if ($ip100 == 0 && $ip100 == ""){
	$wyn = 10;
}
if ($ip100a == $ip200a){
	$wyn = $wyn+1;
}
if ($ip101a == $ip201a){
	$wyn = $wyn+1;
}
if ($ip102a == $ip202a){
	$wyn = $wyn+1;
}
if ($maskaa == $maska2a){
	$wyn = $wyn+1;
}
if ($ip100 >= 256 || $ip101 >= 256 || $ip102 >= 256 || $ip103 >= 256 || $maska >= 31 || $ip200 >= 256 || $ip201 >= 256 || $ip202 >= 256 || $ip203 >= 256 || $maska2 >= 31){
	$tek255 = "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \">Nie można wpisać w adresie liczby większej niż 255 oraz maski 30.</label> </div>";
	if ($ip100 == 0){
		
	}
	else{
		echo $tek255;
	}
}
else{
if ($wyn == 4){
	$tek = "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \">Host #1 widzi jako:$ip100a.$ip101a.$ip102a.$ip103a/$maskaa(Maska:$maska )</label> </div>";
	$tek1 = "<div id=\"ip2a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \">Host #2 widzi jako:$ip200a.$ip201a.$ip202a.$ip203a/$maska2a(Maska:$maska2 )</label> </div>";
	echo "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \"></label> </div>";
	echo "<div id=\"ip2a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \"><b style=\"color:white;\">Status:</b> Hosty należą do tej samej sieci. $tek $tek1</label> </div>";
}
elseif ($wyn < 4){
	$tek = "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \">Host #1 widzi jako:$ip100a.$ip101a.$ip102a.$ip103a/$maskaa(Maska:$maska )</label> </div>";
	$tek1 = "<div id=\"ip2a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \">Host #2 widzi jako:$ip200a.$ip201a.$ip202a.$ip203a/$maska2a(Maska:$maska2 )</label> </div>";
	echo "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \"></label> </div>";
	echo "<div id=\"ip2a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \"><b style=\"color:white;\">Status:</b> Hosty nie należą do tej samej sieci. $tek $tek1</label> </div>";
	}
elseif ($wyn == 10){
	echo "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \">Podaj wartości, system dobrze obliczy tylko po wpisaniu liczb lub wpisałes złe wartości.</label> </div>";
}
}
?>

</div> <!-- End Grid -->
</body>
</html>
