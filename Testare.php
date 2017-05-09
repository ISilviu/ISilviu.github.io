	<!DOCTYPE html>
	<html>
	
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="test.css">
<link href="https://fonts.googleapis.com/css?family=Overlock" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Balthazar" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Mirza" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Antic+Slab" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Coda" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kranky" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Kranky|Lilita+One" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Baloo+Paaji" rel="stylesheet">
</head>
	
	<body>
	<ul class="navigare">
<li><a href="index.html">Acasa </a></li> 
<li> <a href="Contact.html"> Contact </a> </li>
<li> <a href="About.html"> Despre </a> </li>
<li><a href="Test.php"> Test </a></li>
</ul>
	
	<form method="POST">


<p>Nume complet : <input type="text" name="n" ></p>
<p> Care este cel mai dezvoltat district al New York-ului?<select name="Q1"> 
	<option value="1"> <p>Manhattan  </p> </option> 
	<option value="2"> <p>Queens </p> </option>
	<option value="3"> <p> Staten Island </p> </option>
	<option value="4"> <p> The Bronx </p> </option>
	<option value="5"> <p> Brooklyn </p> </option>
	</select> </p>
	
<p> In ce regiune a Americii se afla orasul New York?<select name="Q2"> 
	<option value="1"> <p>Sud  </p> </option> 
	<option value="2"> <p>Nord-Vest </p> </option>
	<option value="3"> <p> Sud-Est </p> </option>
	<option value="4"> <p> Nord-Est </p> </option>
	<option value="5"> <p> Centru </p> </option>
	</select> </p>

<p> Care dintre urmatoarele atractii turistice se afla in Bronx?<select name="Q3"> 
	<option value="1"> <p>Podul Brooklyn  </p> </option> 
	<option value="2"> <p>Empire State Building </p> </option>
	<option value="3"> <p> Stadionul Yankee </p> </option>
	<option value="4"> <p> Statuia Libertatii </p> </option>
	<option value="5"> <p> Citi Field </p> </option>
	</select> </p>	
	
<p> Care district din cele 5 este cel mai neglijat de autoritati?<select name="Q4"> 
<option value="1"> <p>Manhattan  </p> </option> 
	<option value="2"> <p>Queens </p> </option>
	<option value="3"> <p> Staten Island </p> </option>
	<option value="4"> <p> The Bronx </p> </option>
	<option value="5"> <p> Brooklyn </p> </option>	
	</select> </p>

<p> Cum se numeste arena care gazduieste anual turneul US Open?<select name="Q5">
<option value="1"> <p> Citi Field </p> </option> 
	<option value="2"> <p>McTiernan Arena </p> </option>
	<option value="3"> <p> Wimbledon </p> </option>
	<option value="4"> <p> Rolland-Garros </p> </option>
	<option value="5"> <p> Flushing-Meadows </p> </option>	
	</select> </p>

	
	
	<div align="center"><p> <input type="submit" value="Punctajul" name="trimite"> <input type="reset" value="Reseteaza"> </p> </div>
	</form>
	<?php
if(isset($_POST["trimite"]))
{
echo "<hr width=500 size=30 align=left color=blue>";

$n=$_POST["n"];

$b1=$_POST["Q1"];
$b2=$_POST["Q2"];
$b3=$_POST["Q3"];
$b4=$_POST["Q4"];
$b5=$_POST["Q5"];


if(!$n || !$b1 || !$b2 || !$b3 || !$b4 || !$b5)
echo "Zone incomplete";
else
{
echo "nume: $n<br>";
$s=0;
if($b1==1)
$s=$s+1;
if($b2==4)
$s=$s+1;
if($b3==3)
$s=$s+1;
if($b4==3)
$s=$s+1;
if($b5==5)
$s=$s+1;
echo "Punctajul tau este $s";
}
?>
}

	</body>
	</html>