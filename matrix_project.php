<!DOCTYPE html>
<html lang="pl-PL">
<head>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=PT+Serif&family=Playfair+Display&display=swap" rel="stylesheet">
	<style>
	body
		{
		background-color:#F2FAFC;
		font-family: 'PT Serif', serif;
		}
	
	#container
		{
		max-width: 1000px;
		margin-left:auto;
		margin-right:auto;
		}
	
	#title
		{
		background-color:#347C98;
		color:#F4F9FB;
		margin: 20px 0px 25px 0px;
		font-size: 70px;
		font-weight: bold;
		text-align:center;
		letter-spacing:2px;
		font-family: 'Playfair Display', serif;
		padding:30px;
		}
	
	#nav
		{
        float:left;
        background-color:#D0E4EC;
        width: 17.737%;
        min-height:6038px;
        padding:2%;
        border-right:3px dotted #666666;
        }
	
	.option	
		{
		margin:0px 5px 0px 5px;
		font-size:17px;
		text-align:center;
		width:170px;
		height:35px;
		padding:10px;
		border-bottom:1px solid #444444;
		display:flex;
		justify-content:center;
		align-items:center;
		}
		
	a:link {
		text-decoration: none;
		color:black;
		}		
	a:visited {
		display:flex;
		justify-content:center;
		align-items:center;
		text-decoration: none;
		color:black;
		}

	.first{
		position:fixed;
		top: 28%;
		margin-left: -1%;
		border-top:1px solid #444444;
	}	
	
	.second{
		position:fixed;
		top: 36%;
		margin-left: -1%;
	}	
	
	.third{
		position:fixed;
		top: 44%;
		margin-left: -1%;
	}	
		
	.forth{
		position:fixed;
		top: 52%;
		margin-left: -1%;
	}	
		
	.fifth{
		position:fixed;
		top: 60%;
		margin-left: -1%;
	}	
	
	.sixth{
		position:fixed;
		top: 68%;
		margin-left: -1%;
	}	
	
	.seventh{
		position:fixed;
		top: 76%;
		margin-left: -1%;
	}
		
	.option:hover
		{
		background-color: white;
		color:#123A68;
		cursor: pointer;
		opacity:0.5;
		}
	
	#content
        {
        float: right;
        background-color: #DBEAF0;
        min-height:580px;
        width: 69.9%;
        padding: 4%;
        text-align:justify;
        }
	
	#footer
		{
		clear:both;
		color:black;
		text-align:center;
		padding:20px;
		font-size:15px;
		}
	
	td
		{
		width: 20px;
		height:20px;
		text-align:center;
		}
	
	table{
		border-right-style: solid ;
		border-left-style: solid ;
		border-radius: 5px;
		margin-top:5px;
		}
	
	h3
		{
		text-align: center;
		border-top: 1.5px solid;
		border-bottom: 1.5px solid;
		padding: 14px;
		opacity: 0.7;
		margin-top: -15.5px;
		}
		
	h4{
		text-align:center;
	}

	/* przycisk pochodzi ze strony w3school */
	#myBtn {
	display: none; /* Hidden by default */
	position: fixed; /* Fixed/sticky position */
	bottom: 20px; /* Place the button at the bottom of the page */
	right: 30px; /* Place the button 30px from the right */
	z-index: 99; /* Make sure it does not overlap */
	border: none; /* Remove borders */
	outline: none; /* Remove outline */
	background-color: #347C98; /* Set a background color */
	color: white; /* Text color */
	cursor: pointer; /* Add a mouse pointer on hover */
	padding: 13px; /* Some padding */
	font-size: 15px; /* Increase font size */
	}

	#myBtn:hover {
	background-color: #555; /* Add a dark-grey background on hover */
	}
	
	#matrix{
		float:left;
		height:100px;
		padding:5px;
		display:flex;
		justify-content:center;
		align-items:center;
	}
	
	#znak{
		float:left;
	}
	
	#dzialanie{
		height:100px;
		padding:5px;
		float:left;
		display:flex;
		justify-content:center;
		align-items:center;
		
	}
	
	#det{
		float:left;
		display:flex; 
		justify-content:center; 
		align-items:center;
		padding:5px;
	}
	
	
	
	</style>
</head>
<body>

<button onclick="topFunction()" id="myBtn" title="Wróć na górę">Start</button>


<?php

$macierz_1= array(
	array(1,2,3),
	array(4,5,6),
	array(7,8,9),
	array(10,11,12),
);

$macierz_2= array(
	array(1,1,1),
	array(1,1,1),
	array(1,1,1),
	array(1,1,1),
);

$macierz_3= array(
	array(1.2452,2.346,3.346),
	array(12.7689,13.234,14.876),
	array(23.246,24.3156,25.5789),
);

$macierz_4= array(
	array(-7,6,45,5,-2,3),
	array(11,7,94,7,-4,5),
	array(-2,6,13,9,-12,-13),
);

$macierz_5= array(
	array(2,-7,1,4),
	array(1,17,1,5),
	array(-2,10,1,3),
);	

$macierz_6= array(
	array(2,-7,1,4,16),
	array(1,17,1,5,-2),
	array(-2,10,1,3,-8),
	array(1,1,-1,9,13),
	array(2,9,11,-7,3),
);	

$macierz_7= array(
	array(1,0,0,0,0),
	array(0,1,0,0,0),
	array(0,0,1,0,0),
	array(0,0,0,1,0),
	array(0,0,0,0,1),
);	

$macierz_8= array(
	array(1,-7),
	array(1,17),
	array(-2,15),
	array(9,14),
	array(1,-1),
	array(-2,10),
);	

$macierz_9= array(
	array(18,18),
	array(13,11),
	array(8,16),
	array(2,-10),
	array(12,10),
	array(6.5,-10),
);	

$macierz_10= array(
	array(-1,10,12,8,9,1),
	array(2,9,11,-7,3,-1),
);	

$macierz_11=array(
	array(12,4,2.5),
	array(-5,-1.6,4),
	array(2,1,-8),
);

$macierz_12=array(
	array(10,14),
	array(5,1),
);

$macierz_13=array(
	array(5.5,5),
	array(-5,7.1),
);

$macierz_14=array(
	array(2,1),
	array(2,1),
);

$macierz_15=array(
	array(1,2,3),
	array(5,2,0),
	array(6,4,3),
);


function matrix_print($matrix){
	$res="<table>\n";
	
	$nrow=count ($matrix);
	$ncol=count ($matrix[0]);
	
	for($i=0; $i<$nrow; $i++){
		$res.="<tr>\n";
		for($j=0; $j<$ncol;$j++){
			$res.= "<td>\n". round($matrix[$i][$j],2);
			$res.="</td>";
		}
		$res.="</tr>\n";
	}
	$res.="</table>\n";
	return $res;
}


function transposition($matrix){
	
	$new_matrix=array(array());
	$nrow=count ($matrix);
	$ncol=count ($matrix[0]);
	
	for($i=0; $i<$nrow; $i++){
		for($j=0; $j<$ncol;$j++){
			$new_matrix[$j][$i]=$matrix[$i][$j];
		}
	}
	echo matrix_print($new_matrix);

}


function sum($matrix1,$matrix2){
	if(count($matrix1)==count($matrix2) && count($matrix1[0])==count($matrix2[0]) ){
	
	$sum=array(array());
	$nrow=count ($matrix1);
	$ncol=count ($matrix2[0]);

	for ($i=0; $i<$nrow; $i++){
		for($j=0; $j<$ncol;$j++){
		$sum[$i][$j]=$matrix1[$i][$j]+$matrix2[$i][$j];
		}
	}
	echo matrix_print($sum);
	} else{
		Echo NULL;
		Echo'<p style="color: red;">Macierze nie są tych samych wymiarów.</p>';
	}
}


function multiply($matrix_1,$matrix_2){
	$m1c=count($matrix_1);
	$m2r=count($matrix_2[0]);
	
	if($m1c==$m2r){
		$array_multiply=array(array());
		
		for($i=0;$i<$m1c;$i++){
			for($j=0;$j<$m2r;$j++){
				$sum=0;
				for($x=0;$x<count($matrix_1[$i]);$x++){
					$sum += $matrix_1[$i][$x]*$matrix_2[$x][$j];
				}
				$array_multiply[$i][$j]=$sum;
			}
		}
		echo matrix_print($array_multiply);
	}else{
		Echo NULL;
		Echo '<p style="color: red;">Liczba wierszy w jednej macierzy nie równa się liczbie kolumn w drugiej.</p>';
	}
}


function det2($matrix){
	if(count($matrix)=="2" && count($matrix[0])=="2"){
		$det=$matrix[0][0]*$matrix[1][1] 
					-
					$matrix[0][1]*$matrix[1][0];
		return round($det,2);
	}else{
		echo '<p style="color: red;">Macierz nie jest 2x2.</p>';
	}
}

function det3($matrix){
	if(count($matrix)=="3" && count($matrix[0])=="3"){
		$det=$matrix[0][0]*$matrix[1][1]*$matrix[2][2] +
			$matrix[0][1]*$matrix[1][2]*$matrix[2][0] +
			$matrix[0][2]*$matrix[1][0]*$matrix[2][1] -
			$matrix[0][0]*$matrix[1][2]*$matrix[2][1] -
			$matrix[0][1]*$matrix[1][0]*$matrix[2][2] -
			$matrix[0][2]*$matrix[1][1]*$matrix[2][0];
		return round($det,2);
	}else{
		echo '<p style="color: red;">Macierz nie jest 3x3.</p>';
	}
}

function odwr2($matrix){
	if(count($matrix)==2 && count($matrix[0])==2){
		$det=det2($matrix);
		if($det=="0"){
			echo '<p style="color: red;">Wyznacznik równy 0, brak macierzy odwrotnej.</p>';
		}
		else{
			$odwr=array(array());
			$odwr[0][0]=($matrix[0][0])/$det;
			$odwr[1][1]=($matrix[1][1])/$det;
			$odwr[0][1]=((-1)*$matrix[0][1])/$det;
			$odwr[1][0]=((-1)*$matrix[1][0])/$det;
			echo matrix_print($odwr);
		}
	}
	else{
		echo '<p style="color: red;">Macierz nie jest 2x2.</p>';
	}
	
}

function odwr3($matrix){
	if(count($matrix)==3 && count($matrix[0])==3){
		$det=det3($matrix);
		if($det=="0"){
			echo '<p style="color: red;">Wyznacznik równy 0, brak macierzy odwrotnej.</p>';
		}	
		else{
			$odwr=array(array());
			$odwr[0][0]=($matrix[1][1]*$matrix[2][2]-$matrix[1][2]*$matrix[2][1])/$det;
			$odwr[0][1]=($matrix[0][2]*$matrix[2][1]-$matrix[0][1]*$matrix[2][2])/$det;
			$odwr[0][2]=($matrix[0][1]*$matrix[1][2]-$matrix[0][2]*$matrix[1][1])/$det;
			$odwr[1][0]=($matrix[1][2]*$matrix[2][0]-$matrix[1][0]*$matrix[2][2])/$det;
			$odwr[1][1]=($matrix[0][0]*$matrix[2][2]-$matrix[0][2]*$matrix[2][0])/$det;
			$odwr[1][2]=($matrix[0][2]*$matrix[1][0]-$matrix[0][0]*$matrix[1][2])/$det;
			$odwr[2][0]=($matrix[1][0]*$matrix[2][1]-$matrix[1][1]*$matrix[2][0])/$det;
			$odwr[2][1]=($matrix[0][1]*$matrix[2][0]-$matrix[0][0]*$matrix[2][1])/$det;
			$odwr[2][2]=($matrix[0][0]*$matrix[1][1]-$matrix[0][1]*$matrix[1][0])/$det;
			echo matrix_print($odwr);
		}
	}
	else{
		echo '<p style="color: red;">Macierz nie jest 3x3.</p>';
	}
}



?>

	<div id="container">
	
		<div id="title"> Macierze w PHP</div>
		
		<div id="nav">
			<div class="first">
				<a href="#top">
					<p class="option">
					O projekcie
					</p>
				</a> 
			</div>
			<div class="second">
				<a href="#wyswietlanie_macierzy">
					<p class="option">
					Wyświetlanie macierzy
					</p>
				</a> 
			</div>
			<div class="third">
				<a href="#transponowanie_macierzy">
					<p class="option">
					Transponowanie macierzy
					</p>
				</a> 
			</div>
			<div class="forth">
				<a href="#dodawanie_macierzy">
					<p class="option">
					Dodawanie macierzy
					</p>
				</a> 
			</div>
			<div class="fifth">
				<a href="#mnozenie_macierzy">
					<p class="option">
					Mnożenie macierzy przez siebie
					</p>
				</a>
			</div>
			<div class="sixth">
				<a href="#wyznacznik_macierzy">
					<p class="option">
					Wyznacznik macierzy
					</p>
				</a>
			</div>
			<div class="seventh">
				<a href="#macierz_odwrotna">
					<p class="option">
					Macierz odwrotna
					</p>
				</a>
			</div>
		</div>
		
		<div id="content">
		
			<h3>O projekcie</h3>
			<p style="line-height: 0.8cm;">Zadanie polegało na stworzeniu strony w językach HTML/CSS  z odpowiednimi funkcjami dotyczącymi macierzy w języku PHP.
			Obecne opracowanie zawiera następujące rozwiązania:<br>
			- wyświetlanie macierzy, <br>
			- transponowanie macierzy, <br>
			- dodawanie różnych macierzy, <br>
			- mnożenie macierzy przez siebie, <br>
			- obliczanie wyznacznika macierzy,<br>
			- znajdowanie macierzy odwrotnej.</p>
			<br><br>
				
			<br>
			<div id="wyswietlanie_macierzy">
			<h3>Wyświetlanie macierzy</h3>
			</div>
			Wartości wszystkich macierzy (oraz wyznaczniki) są wyświetlane w zaokroglęniu do 2 miejsc po przecinku.
			<br><br>
				
					Macierz o wymiarach 4x3:
				<?php
					echo matrix_print($macierz_1);
				?>
				<br> Macierz o wymiarach 3x3:
				<?php
					echo matrix_print($macierz_3);
				?>
				<br>Macierz o wymiarach 3x6:
				<?php
					echo matrix_print($macierz_4);
				?>
				<br>Macierz o wymiarach 2x4:
				<?php
					echo matrix_print($macierz_5);
				?>
				<br>
				
			<br><br><br>	
			<div id="transponowanie_macierzy">
			<h3>Transponowanie macierzy</h3>
			</div>
				<div id="matrix" style="height: 110px;">
					<?php
						echo matrix_print($macierz_1);
					?>	
				</div>
				<div id="znak">
					T
				</div>
				<div id="dzialanie" style="height: 110px;">
					=
				</div>
				<div id="matrix" style="height: 110px;">				
					<?php
						echo transposition($macierz_1);
					?>
				</div>		
				<div style="clear:both;"></div>
			
				<br>
			
				<div id="matrix" style="height: 150px;">
					<?php
						echo matrix_print($macierz_9);
					?>	
				</div>
				<div id="znak">
					T
				</div>
				<div id="dzialanie" style="height: 150px;">
					=
				</div>
				<div id="matrix" style="height: 150px;">				
					<?php
						echo transposition($macierz_9);
					?>
				</div>		
				<div style="clear:both;"></div>
			
				<br> 
			
				<div id="matrix" style="height: 110px;">
					<?php
						echo matrix_print($macierz_2)
					?>	
				</div>
				<div id="znak">
					T
				</div>
				<div id="dzialanie" style="height: 110px;">
					=
				</div>
				<div id="matrix" style="height: 110px;">				
					<?php
						echo transposition($macierz_2);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br>
				
			<br><br><br>
			<div id="dodawanie_macierzy">
			<h3>Dodawanie macierzy</h3>	
			</div>
		
				<p style="font-style: italic;">a) macierze o takich samych wymiarach: </p>
				
				<div id="matrix">
					<?php
						echo matrix_print($macierz_1);
					?>	
				</div>
				<div id="dzialanie">
					+
				</div>
				<div id="matrix">				
					<?php
						echo matrix_print($macierz_2);
					?>
				</div>		
				<div id="dzialanie">
					=
				</div>
					<div id="matrix">				
					<?php
						echo sum($macierz_1,$macierz_2);
					?>
				</div>	
				<div style="clear:both;"></div>
				
				<br>
				<div id="matrix" style="height:150px;">
					<?php
						echo matrix_print($macierz_6);
					?>	
				</div>
				<div id="dzialanie" style="height:150px;">
					+
				</div>
				<div id="matrix" style="height:150px;">				
					<?php 
						echo matrix_print($macierz_7);
					?>
				</div>		
				<div id="dzialanie" style="height:150px;">
					=
				</div>
					<div id="matrix" style="height:150px;">				
					<?php
						echo sum($macierz_6,$macierz_7);
					?>
				</div>	
				<div style="clear:both;"></div>

				<br>
				<div id="matrix" style="height:150px;">
					<?php
						echo matrix_print($macierz_8);
					?>	
				</div>
				<div id="dzialanie" style="height:150px;">
					+
				</div>
				<div id="matrix" style="height:150px;">				
					<?php
						echo matrix_print($macierz_9);
					?>
				</div>		
				<div id="dzialanie" style="height:150px;">
					=
				</div>
					<div id="matrix" style="height:150px;">				
					<?php
						echo sum($macierz_8,$macierz_9);
					?>
				</div>	
				<div style="clear:both;"></div>

				<br><br>
				<p style="font-style: italic;">b) macierze o różnych wymiarach: </p>
			
				<div id="matrix">
					<?php
						echo matrix_print($macierz_3);
					?>	
				</div>
				<div id="dzialanie">
					+
				</div>
				<div id="matrix">				
					<?php
						echo matrix_print($macierz_4);
					?>
				</div>		
				<div id="dzialanie">
					=
				</div>
					<div id="matrix">				
					<?php
						echo sum($macierz_3,$macierz_4);
					?>
				</div>	
				<div style="clear:both;"></div>
				<br>

				<div id="matrix" style="height:150px;">
					<?php
						echo matrix_print($macierz_7);
					?>	
				</div>
				<div id="dzialanie" style="height:150px;">
					+
				</div>
				<div id="matrix" style="height:150px;">				
					<?php
						echo matrix_print($macierz_8);
					?>
				</div>		
				<div id="dzialanie" style="height:150px;">
					=
				</div>
					<div id="matrix" style="height:150px;">				
					<?php
						echo sum($macierz_7,$macierz_8);
					?>
				</div>	
				<div style="clear:both;"></div>
			<br><br><br><br>
			<div id="mnozenie_macierzy">
			<h3>Mnożenie macierzy przez siebie</h3>	
			</div>
				
					<p style="font-style: italic;"> a) macierze o odpowiednich wymiarach: </p>
				
				<div id="matrix">
					<?php
						echo matrix_print($macierz_1);
					?>	
				</div>
				<div id="dzialanie">
					*
				</div>
				<div id="matrix">				
					<?php
						echo matrix_print($macierz_5);
					?>
				</div>		
				<div id="dzialanie">
					=
				</div>
					<div id="matrix">				
					<?php
						echo multiply($macierz_1,$macierz_5);
					?>
				</div>	
				<div style="clear:both;"></div>
				
				<br>
				<div id="matrix" style="height:150px;">
					<?php
						echo matrix_print($macierz_8);
					?>	
				</div>
				<div id="dzialanie" style="height:150px;">
					*
				</div>
				<div id="matrix" style="height:150px;">				
					<?php
						echo matrix_print($macierz_10);
					?>
				</div>		
				<div id="dzialanie" style="height:150px;">
					=
				</div>
					<div id="matrix" style="height:150px;">				
					<?php
						echo multiply($macierz_8,$macierz_10);
					?>
				</div>	
				<div style="clear:both;"></div>
				
				<br><br>
					<p style="font-style: italic;"> b) macierze o nieodpowiednich wymiarach: </p>
			
				<div id="matrix">
					<?php
						echo matrix_print($macierz_1);
					?>	
				</div>
				<div id="dzialanie">
					*
				</div>
				<div id="matrix">				
					<?php
						echo matrix_print($macierz_4);
					?>
					
				</div>		
				<div id="dzialanie">
					=
				</div>
					<div id="matrix" style="max-width:390px;">				
					<?php
						echo multiply($macierz_1,$macierz_4);
					?>
				</div>	
				<div style="clear:both;"></div>
				
				<br>
				<div id="matrix" style="height:140px;">
					<?php
						echo matrix_print($macierz_6);
					?>	
				</div>
				<div id="dzialanie" style="height:140px;">
					*
				</div>
				<div id="matrix" style="height:140px;">				
					<?php
						echo matrix_print($macierz_8);
					?>
				</div>		
				<div id="dzialanie" style="height:140px;">
					=
				</div>
					<div id="matrix" style="max-width:450px; height:140px;">				
					<?php
						echo multiply($macierz_6,$macierz_8);
					?>
				</div>	
				<div style="clear:both;"></div>
				
			<br><br><br>
			<div id="wyznacznik_macierzy">
			<h3>Wyznacznik macierzy</h3>	
			</div>
			<h4>Wyznacznik macierzy o wymiarach 2x2: </h4>
				<p style="font-style: italic;">a) macierz o odpowiednich wymiarach:</p>
				<div id="det" style="height:60px; ">
					Det
				</div>
				<div id="matrix" style="height:60px;">
					<?php
						echo matrix_print($macierz_12);
					?>	
				</div>
				<div id="dzialanie" style="height:60px;">
					=
				</div>
				<div id="dzialanie" style="height:60px;">				
					<?php
						echo det2($macierz_12);
					?>
				</div>		
				<div style="clear:both;"></div>
				
				<div id="det" style="height:100px;">
					Det
				</div>
				<div id="matrix" style="height:100px;">
					<?php
						echo matrix_print($macierz_13);
					?>	
				</div>
				<div id="dzialanie" style="height:100px;">
					=
				</div>
				<div id="dzialanie" style="height:100px;">				
					<?php
						echo det2($macierz_13);
					?>
				</div>		
				<div style="clear:both;"></div>
				
				<p style="font-style: italic;"> b) macierz o niedpowiednich wymiarach: </p>
					<div id="det" style="height:100px;">
					Det
				</div>
				<div id="matrix" style="height:100px;">
					<?php
						echo matrix_print($macierz_11);
					?>	
				</div>
				<div id="dzialanie" style="height:100px;">
					=
				</div>
				<div id="dzialanie" style="height:100px;">				
					<?php
						echo det2($macierz_11);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br>
				<h4>Wyznacznik macierzy o wymiarach 3x3: </h4>
				<p style="font-style: italic;">a) macierz o odpowiednich wymiarach:</p>
				<div id="det" style="height:90px; ">
					Det
				</div>
				<div id="matrix" style="height:90px;">
					<?php
						echo matrix_print($macierz_3);
					?>	
				</div>
				<div id="dzialanie" style="height:90px;">
					=
				</div>
				<div id="dzialanie" style="height:90px;">				
					<?php
						echo det3($macierz_3);
					?>
				</div>		
				<div style="clear:both;"></div>
				
				<div id="det" style="height:100px;">
					Det
				</div>
				<div id="matrix" style="height:100px;">
					<?php
						echo matrix_print($macierz_11);
					?>	
				</div>
				<div id="dzialanie" style="height:100px;">
					=
				</div>
				<div id="dzialanie" style="height:100px;">				
					<?php
						echo det3($macierz_11);
					?>
				</div>		
				<div style="clear:both;"></div>
				
				<br>
				<p style="font-style: italic;"> b) macierz o niedpowiednich wymiarach: </p>
					<div id="det" style="height:100px;">
					Det
				</div>
				<div id="matrix" style="height:100px;">
					<?php
						echo matrix_print($macierz_1);
					?>	
				</div>
				<div id="dzialanie" style="height:100px;">
					=
				</div>
				<div id="dzialanie" style="height:100px;">				
					<?php
						echo det3($macierz_1);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br>
				
			<br><br><br>
			<div id="macierz_odwrotna">
			<h3>Macierz odwrotna</h3>	
			</div>
				<h4>Macierz odwrotna macierzy o wymiarach 2x2: </h4>
				<p style="font-style: italic;"> a) macierz o odpowiednich wymiarach: </p>
				
				<div id="matrix" style="height: 60px;">
					<?php
						echo matrix_print($macierz_12);
					?>	
				</div>
				<div id="znak">
					-1
				</div>
				<div id="dzialanie" style="height: 60px;">
					=
				</div>
				<div id="matrix" style="height: 60px;">				
					<?php
						echo odwr2($macierz_12);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br>
				<p style="font-style: italic;"> b) macierz o niedpowiednich wymiarach: </p>
				
				<div id="matrix" style="height: 100px;">
					<?php
						echo matrix_print($macierz_1);
					?>	
				</div>
				<div id="znak">
					-1
				</div>
				<div id="dzialanie" style="height: 100px;">
					=
				</div>
				<div id="matrix" style="height: 100px;">				
					<?php
						echo odwr2($macierz_1);
					?>
				</div>		
				<div style="clear:both;"></div>
				
				<br>
				<p style="font-style: italic;"> c) w przypadku braku macierzy odwrotnej: </p>
			
				<div id="matrix" style="height: 60px;">
					<?php
						echo matrix_print($macierz_14);
					?>	
				</div>
				<div id="znak">
					-1
				</div>
				<div id="dzialanie" style="height: 60px;">
					=
				</div>
				<div id="matrix" style="height: 60px;">				
					<?php
						echo odwr2($macierz_14);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br><br>
				
				<h4>Macierz odwrotna macierzy o wymiarach 3x3: </h4>
				<p style="font-style: italic;"> a) macierz o odpowiednich wymiarach: </p>
								<div id="matrix" style="height: 80px;">
					<?php
						echo matrix_print($macierz_11);
					?>	
				</div>
				<div id="znak">
					-1
				</div>
				<div id="dzialanie" style="height: 80px;">
					=
				</div>
				<div id="matrix" style="height: 80px;">				
					<?php
						echo odwr3($macierz_11);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br>
				
				<p style="font-style: italic;"> b) macierz o niedpowiednich wymiarach: </p>
				<div id="matrix" style="height: 150px;">
					<?php
						echo matrix_print($macierz_9);
					?>	
				</div>
				<div id="znak">
					-1
				</div>
				<div id="dzialanie" style="height: 150px;">
					=
				</div>
				<div id="matrix" style="height: 150px;">				
					<?php
						echo odwr3($macierz_9);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br> 

				<p style="font-style: italic;"> c) w przypadku braku macierzy odwrotnej: </p>
				<div id="matrix" style="height: 80px;">
					<?php
						echo matrix_print($macierz_15);
					?>	
				</div>
				<div id="znak">
					-1
				</div>
				<div id="dzialanie" style="height: 80px;">
					=
				</div>
				<div id="matrix" style="height: 80px;">				
					<?php
						echo odwr3($macierz_15);
					?>
				</div>		
				<div style="clear:both;"></div>
				<br>
				
				
		</div>
			
		<div style="clear:both;"></div>

		<div id="footer">
		Nikola Jarząbek, 9.05.2021 r.
		</div>

	</div>
	
	
	<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>

</body>
</html>