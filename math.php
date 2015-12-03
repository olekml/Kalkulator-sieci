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
<a href="#"><p style="background: red; color: white;">Przeliczanie jednostek</p> </a>
<a href="speed.php"><p style="background: blue; color: white;">Obliczanie transferu danych</p> </a>
<a href="ramka.php"><p style="background: #FF9B00;; color: white;">Obliczanie ramki sieciowej</p> </a>
<a href="adres.php"><p style="background: green; color: white;">Analiza adresów IPv4</p> </div></center></a>

<center>
<div class="col_12" style="margin-top:25px; margin-bottom:25px;">
<form method="POST" action="">
<label for="number" style="color: white; text-align: center;">Wprowadź wartość:</label>
<input id="number" type="text" name="number" placeholder="0" /> 
<select name="sele">
<option>b</option>
<option>B</option>
<option>kb</option>
<option>kB</option>
<option>Mb</option>
<option>MB</option>
<option>Gb</option>
<option>GB</option>
<option>Tb</option>
<option>TB</option>
</select>
<input type="submit" value="Oblicz">
</form>
</div>
</center>
<?php
$number = $_POST['number'];
$sele = $_POST['sele'];
$b = "";
$B = "";
$kb = "";
$kB = "";
$Mb = "";
$MB = "";
$Gb = "";
$GB = "";
$Tb = "";
$TB = "";
if ($number == 0){
	echo "<div id=\"ip1a\" style=\"margin-top:25px; text-align:center;\"><label for=\"ip1a\" style=\"color: white; text-align: center; \"><p style=\"color: red;\">PAMIĘTAJ! Nie możesz wpisać 0 lub pustej wartości.</p></label> </div>";
}
else{
switch ($sele)
{
 case "b":
   $b = $number;
   
   $B = $number/8;
   $kb = $number/1024;
   $kB = $number/1024/8;
   $Mb = $number/1024/1024;
   $MB = $number/1024/1024/8;
   $Gb = $number/1024/1024/1024;
   $GB = $number/1024/1024/1024/8;
   $Tb = $number/1024/1024/1024/1024;
   $TB = $number/1024/1024/1024/1024/8;
   break;
   
   case "B":
   $b = $number*8;
   $B = $number;
   $kb = $number/1024*8;
   $kB = $number/1024;
   $Mb = $number/1024/1024*8;
   $MB = $number/1024/1024;
   $Gb = $number/1024/1024/1024*8;
   $GB = $number/1024/1024/1024;
   $Tb = $number/1024/1024/1024/1024*8;
   $TB = $number/1024/1024/1024/1024;
   break;
   
   case "kb":
   $b = $number*1024;
   $B = $number*1024/8;
   $kb = $number;
   $kB = $number/8;
   $Mb = $number/1024;
   $MB = $number/1024/8;
   $Gb = $number/1024/1024;
   $GB = $number/1024/1024/8;
   $Tb = $number/1024/1024/1024;
   $TB = $number/1024/1024/1024/8;
   break;
   
   case "kB":
   $b = $number*1024*8;
   $B = $number*1024;
   $kb = $number*8;
   $kB = $number;
   $Mb = $number/1024*8;
   $MB = $number/1024;
   $Gb = $number/1024/1024*8;
   $GB = $number/1024/1024;
   $Tb = $number/1024/1024/1024*8;
   $TB = $number/1024/1024/1024;
   break;
   
   case "Mb":
   $b = $number*1024*1024;
   $B = $number*1024*1024/8;
   $kb = $number*1024;
   $kB = $number*1024/8;
   $Mb = $number;
   $MB = $number/8;
   $Gb = $number/1024;
   $GB = $number/1024/8;
   $Tb = $number/1024/1024;
   $TB = $number/1024/1024/8;
   break;
   
   case "MB":
   $b = $number*1024*1024*8;
   $B = $number*1024*1024;
   $kb = $number*1024*8;
   $kB = $number*1024;
   $Mb = $number*8;
   $MB = $number;
   $Gb = $number/1024*8;
   $GB = $number/1024;
   $Tb = $number/1024/1024*8;
   $TB = $number/1024/1024;
   break;
   
   case "Gb":
   $b = $number*1024*1024*1024;
   $B = $number*1024*1024*1024/8;
   $kb = $number*1024*1024;
   $kB = $number*1024*1024/8;
   $Mb = $number*1024;
   $MB = $number*1024/8;
   $Gb = $number;
   $GB = $number/8;
   $Tb = $number/1024;
   $TB = $number/1024/8;
   break;
   
   
   case "GB":
   $b = $number*1024*1024*1024*8;
   $B = $number*1024*1024*1024;
   $kb = $number*1024*1024*8;
   $kB = $number*1024*1024;
   $Mb = $number*1024*8;
   $MB = $number*1024;
   $Gb = $number*8;
   $GB = $number;
   $Tb = $number/1024*8;
   $TB = $number/1024;
   break;
   
   case "Tb":
   $b = $number*1024*1024*1024*1024;
   $B = $number*1024*1024*1024*1024/8;
   $kb = $number*1024*1024*1024;
   $kB = $number*1024*1024*1024/8;
   $Mb = $number*1024*1024;
   $MB = $number*1024*1024/8;
   $Gb = $number*1024;
   $GB = $number*1024/8;
   $Tb = $number;
   $TB = $number/8;
   
   case "TB":
   $b = $number*1024*1024*1024*1024*8;
   $B = $number*1024*1024*1024*1024;
   $kb = $number*1024*1024*1024*8;
   $kB = $number*1024*1024*1024;
   $Mb = $number*1024*1024*8;
   $MB = $number*1024*1024;
   $Gb = $number*1024*8;
   $GB = $number*1024;
   $Tb = $number*8;
   $TB = $number;
   break;
}
}
?>


<table class="striped tight sortable">
<thead><tr>
	<th>Nazwa:</th>
	<th>SYMBOL:</th>
	<th>WYNIK:</th>
</tr></thead>
<tbody><tr>
	<th>BIT</th>
	<td>b</td>
	<td><?php 
  echo $b;?></td>
</tr><tr>
	<th>BAJT</th>
	<td>B</td>
	<td><?php 
  echo $B;?></td>
</tr><tr>
	<th>KILOBIT</th>
	<td>kb</td>
	<td><?php 
  echo $kb;?></td>
</tr><tr>
	<th>KLOBAJT</th>
	<td>kB</td>
	<td><?php 
  echo $kB;?></td>
</tr></tbody>
	<th>MEGABIT</th>
	<td>Mb</td>
	<td><?php 
  echo $Mb;?></td>
</tr></tbody>
	<th>MEGABAJT</th>
	<td>MB</td>
	<td><?php 
  echo $MB;?></td>
</tr></tbody>
	<th>GIGABIT</th>
	<td>Gb</td>
	<td><?php 
  echo $Gb;?></td>
</tr></tbody>
	<th>GIGABAJT</th>
	<td>GB</td>
	<td><?php 
  echo $GB;?></td>
</tr></tbody>
	<th>TERABIT</th>
	<td>Tb</td>
	<td><?php 
  echo $Tb;?></td>
</tr></tbody>
	<th>TERABAJT</th>
	<td>TB</td>
	<td><?php 
  echo $TB;?></td>
</tr></tbody>
</table>
	</div>

</div> <!-- End Grid -->
</body>
</html>
