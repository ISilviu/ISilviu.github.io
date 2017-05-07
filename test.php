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
	
	<form method="post">


<p>Prenume : <input type="text" name="prenume" ></p>


<p>Nume :  <input type="text" name="nume"></p>


<p>Varsta : <input type="text" name="Varsta"  ></p>

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

	
	
	<div align="center"><p> <input type="submit" value="Trimite"> <input type="reset" value="Reseteaza"> </p> </div>
	</form>
	
	<?php 
	if(isset($_POST["submit"]))
	{$Nume=$_POST["Nume"];
	$Prenume=$_POST["Nume"];
	$Q1=$_POST["Q1"];
	$Q2=$_POST["Q2"];
	$Q3=$_POST["Q3"];
	$Q4=$_POST["Q4"];
	$Q5=$_POST["Q5"];
	$S=0;
	if($Q1=="1")
	$S=$S+1;
	if($Q2=="4")
	$S=$S+1;
	if($Q3=="3")
	$S=$S+1;
	if($Q4=="3")
	$S=$S+1;
	if($Q5=="5")
	$S=$S+1;
	echo "Felicitari ".$Nume."".$Prenume.", rezultatul tau este :".$S." de puncte";
	}
	
	?>
	</body>
	</html>