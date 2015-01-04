<?php session_start(); ?>
<!--
===========================================================================
EL BIT GPL Source Code

Author: Jordi Vives Pons <jvivespons@gmail.com>

Copyright (C) 2014 - 2015, Jordi Vives Pons
This file is part of the EL BIT Source Code.  
EL BIT is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.
EL BIT is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
You should have received a copy of the GNU General Public License
along with EL BIT.  If not, see <http://www.gnu.org/licenses/>.
In addition, the EL BIT is also subject to certain additional terms. 
You should have received a copy of these additional terms immediately following
the terms and conditions of the GNU General Public License which accompanied the EL BIT.  
If not, please request a copy in writing from id Software at the address below.
===========================================================================
-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>B. I. T. (Binary Intensive Training)</title>
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
		<link href="app.css" rel="stylesheet" type="text/css" media="screen" />
		
<!-- Begin JavaScript -->

		<script type="text/javascript" src="lib/jquery-1.3.2.min.js"></script>
		<script type="text/javascript" src="lib/jquery.tools.js"></script>
    	<script type="text/javascript" src="lib/jquery.custom.js"></script>
    	<script type="text/javascript" src="js/app.js"></script>

    </head>
    <body>
        <div id="bg_top">
            <div id="menu">
                <ul>
                    <li><a href="index.php" class="active">Inici</a></li>
                    <li><a href="el-bit.php">El B. I. T.</a></li>
                    <li><a href="registre.php">Registre</a></li>
                    <li><a href="qui-som.php">Qui som?</a></li>
                    <li><a href="contacte.php">Contacte</a></li>
                </ul>
                <div style="clear: both"></div>
            </div>
            <div id="wrap">
                <br /><br /><br />
                <img src="images/logo.png" width="75%" title=""/>
                <br /><br /><br />
                <div style="clear: all"></div>
              <div class="prev_box">
              
              
              
  <div class="content">
  <?php
if(isset($_SESSION['username'])){
	?>
    <p align="right"><a href="login.php"><?php echo $_SESSION["username"]; ?></a> | <a href="logout.php">Sortir</a></p>



	<div id="max_time" ></div>

	<div>
		<a href="javascript:hideshow(document.getElementById('adiv'))">Necessites ajuda?</a>
		<div id="adiv" style="display: none">
		<br/>
		<p>Ho sentim, però aquesta vegada no hi ha ajuda! És una Gran Batalla, recordes? ;)</p>
		<br/>
		</div>	
	</div>
	<br/>
    <?php
    include("functions.php");
    $keys = array_keys($morsedict);
    $values = array_values($morsedict);
    $result = false;
    
    if(isset($_POST["type"])){
		$value1 = $_POST["value1"];
		$value2 = $_POST["value2"];
		$value3 = $_POST["value3"];
		$value4 = $_POST["value4"];
		$value5 = $_POST["value5"];
		$value6 = $_POST["value6"];
		$time = $_POST["time"];
		$answer1 = $_POST["answer1"];
		$answer2 = $_POST["answer2"];
		$answer3 = $_POST["answer3"];
		$answer4 = $_POST["answer4"];
		$answer5 = $_POST["answer5"];
		$answer6 = $_POST["answer6"];
		
		$op1 = $_POST["op1"];
		$op2 = $_POST["op2"];
		$bid = $_POST["bid"];
		
		$fails = $_POST["fails"];
		
		$excorrect = 0;
		$exfail = 0;
		if(bindec($answer1) == (string)$value1){
			$excorrect = $excorrect + 1;
		}else{
			$exfail = $exfail + 1;
		}
		if(decbin((int)$answer2) == decbin($value2)){
			$excorrect = $excorrect + 1;
		}else{
			$exfail = $exfail + 1;
		}
		if ($answer3 == $values[$value3]){
			$excorrect = $excorrect + 1;
		}else{
			$exfail = $exfail + 1;
		}
		if($answer4 == $keys[$value4]){
			$excorrect = $excorrect + 1;
		}else{
			$exfail = $exfail + 1;
		}
		if((int)$answer5 == $value5){
			$excorrect = $excorrect + 1;
		}else{
			$exfail = $exfail + 1;
		}
		if($answer6 == chr($value6)){
			$excorrect = $excorrect + 1;
		}else{
			$exfail = $exfail + 1;
		}
		
		$db_user= 'root';
		$db_pass= 'root';
		$db_name= 'elbit';
  
		$link = mysqli_connect('localhost', $db_user, $db_pass, $db_name);

		// Check connection
		if (!$link) {
		    die("Connection failed: " . mysqli_connect_error());
		}
		$time_actual = explode(":", explode(" ", $time)[1]);
		$hours = (int)($time_actual[0]);
		$minutes = (int)($time_actual[1]);
		$seconds = (int)($time_actual[2]);
		
		$sql = "SELECT * FROM USERS WHERE USERNAME = '".$_SESSION["username"]."'";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($result);
		$actualid = $row["ID"];
		
		$sql = "SELECT * FROM BATTLES WHERE ID = '".$bid."'";
		$result = mysqli_query($link, $sql);
		$row = mysqli_fetch_array($result);
		$op1ok = $row["OP1OK"];
		$op2ok = $row["OP2OK"];
		$op1fails = $row["OP1FAIL"];
		$op2fails = $row["OP2FAIL"];
		
		if ($op1 == $actualid){
	
			if ($op2ok != 0 || $op2fails != 0){
				$sql = "UPDATE BATTLES SET OP1OK = '".$excorrect."', OP1FAIL = '".$exfail."', CLOSED = '1' WHERE ID = '".$bid."'";	
				if ($excorrect > $op2ok){
					echo "<p>Enhorabona! Has guanyat la batalla. Obtens 50 punts!</p>";
					$resultxp = 50;
				}else{
					if ($excorrect == $op2ok){
						echo "<p>Heu empatat la batalla. Obtens 0 punts!</p>";
						$resultxp = 0;
					}else{
						echo "<p>Ho sentim! Has perdut la batalla. Obtens 0 punts!</p>";
						$resultxp = 0;
					}
				}
				$sql2 = "SELECT * FROM USERS WHERE USERNAME = '".$_SESSION["username"]."'";
				$result2 = mysqli_query($link, $sql2);
				while ($row2 = mysqli_fetch_array($result2)) {
					$level = $row2["LEVEL"];
					$xp = $row2["XP"];
				}
				$xp = $xp + $resultxp;
				if ($xp > ($level * 100) ){
					$level = $level + 1;
					echo "<br/><br/><h1>Felicitats! Has pujat de nivell! El teu nou nivell és ".$level."</h1>";
				}
				$sql3 = "UPDATE USERS SET XP = '".$xp."',  LEVEL = '".$level."' WHERE USERNAME='".$_SESSION["username"]."'";
				$result3 = mysqli_query($link, $sql3);	
				if($result3){
					echo "";
				}else{
					echo "<br/><br/><p>Alguna cosa ha anat malament.</p>";
				}
			
			}else{
				echo "<p>Els teus resultats han estat emmagatzemats a l'espera de què el teu oponent respongui.</p>";
			 	$sql = "UPDATE BATTLES SET OP1OK = '".$excorrect."', OP1FAIL = '".$exfail."' WHERE ID = '".$bid."'";
			}
		}else{
			
			if ($op1ok != 0 || $op1fails != 0){
				$sql = "UPDATE BATTLES SET OP2OK = '".$excorrect."', OP2FAIL = '".$exfail."', CLOSED = '1' WHERE ID = '".$bid."'";			
				if ($excorrect > $op1ok){
					echo "<p>Enhorabona! Has guanyat la batalla. Obtens 50 punts!</p>";
					$resultxp = 50;
				}else{
					if ($excorrect == $op1ok){
						echo "<p>Heu empatat la batalla. Obtens 0 punts!</p>";
						$resultxp = 0;
					}else{
						echo "<p>Ho sentim! Has perdut la batalla. Obtens 0 punts!</p>";
						$resultxp = 0;
					}
				}
				$sql2 = "SELECT * FROM USERS WHERE USERNAME = '".$_SESSION["username"]."'";
				$result2 = mysqli_query($link, $sql2);
				while ($row2 = mysqli_fetch_array($result2)) {
					$level = $row2["LEVEL"];
					$xp = $row2["XP"];
				}
				$xp = $xp + $resultxp;
				if ($xp > ($level * 100) ){
					$level = $level + 1;
					echo "<br/><br/><h1>Felicitats! Has pujat de nivell! El teu nou nivell és ".$level."</h1>";
				}
				$sql3 = "UPDATE USERS SET XP = '".$xp."',  LEVEL = '".$level."' WHERE USERNAME='".$_SESSION["username"]."'";
				$result3 = mysqli_query($link, $sql3);	
				if($result3){
					echo "";
				}else{
					echo "<br/><br/><p>Alguna cosa ha anat malament.</p>";
				}
			
			}else{
				echo "<p>Els teus resultats han estat emmagatzemats a l'espera de què el teu oponent respongui.</p>";
			 	$sql = "UPDATE BATTLES SET OP2OK = '".$excorrect."', OP2FAIL = '".$exfail."' WHERE ID = '".$bid."'";
			}
		}
		
		$result = mysqli_query($link, $sql);	
		if($result){
			echo "";
		}else{
			echo "<br/><br/><p>Alguna cosa ha anat malament.</p>";
		}
		$result = true;
		mysqli_close($link);
		
		
    }else{
		$type = rand(0, 1);
		$value1 = rand(0, 255);
		$value2 = rand(0, 255);
		$value3 = rand(0, 43);
		$value4 = rand(0, 43);
		$value5 = rand(32, 127);
		$value6 = rand(32, 127);
		$time = "Temps: 00:00:00";
		$fails = 0;
	}
	if($result == false){
		
			
			if (isset($_GET["op1"]) && isset($_GET["op2"])){
			$op1 = $_GET["op1"];
			$op2 = $_GET["op2"];
			
			$db_user= 'root';
			$db_pass= 'root';
			$db_name= 'elbit';
  
			$link = mysqli_connect('localhost', $db_user, $db_pass, $db_name);

			// Check connection
			if (!$link) {
			    die("Connection failed: " . mysqli_connect_error());
			}
		
			$sql = "SELECT * FROM USERS WHERE ID = '".$op1."'";
			$result = mysqli_query($link, $sql);
			$row = mysqli_fetch_array($result);
			$op1username = $row["USERNAME"];
			$sql = "SELECT * FROM USERS WHERE ID = '".$op2."'";
			$result = mysqli_query($link, $sql);
			$row = mysqli_fetch_array($result);
			$op2username = $row["USERNAME"];		
		
			echo "<h1>La Gran Batalla: ".$op1username." VS. ".$op2username."</h1>";
			echo "<br/>";
			echo "<br/>";
					
			if(!isset($_GET["bid"])){
				$sql = "INSERT INTO BATTLES (OP1, OP2) VALUES ('".$op1."', '".$op2."')";
				$result = mysqli_query($link, $sql);

				if ($result){
					echo "";
					$sql = "SELECT * FROM BATTLES order by ID desc limit 1";
					$result = mysqli_query($link, $sql);
					$row = mysqli_fetch_array($result);
					$bid = $row["ID"];
				}else{
					echo "<p>Alguna cosa ha anat malament.</p>";
					$bid = "";
				}
			}else{
				$bid = $_GET["bid"];
			}

			mysqli_close($link);
					
			echo "<form action='battleex.php' method='post'>";
			echo "<h1>Converteix correctament els 6 casos següents:</h1><br/><br/>";
			echo "<table border='0' width='100%' align='center' style='text-align:center'><tr>";
			echo "<tr><td colspan='2' align='left'>Converteix el següent nombre decimal a binari (8 bits):</td><tr>";
			echo "<td width='50%' value='".$value1."' style='font-size:48px;' align='center'>".$value1."</td><td width='50%' id='answercell'><input name='answer1' type='text' size='8' maxlength='8' style='font-size:48px;'></td></tr>";	
			$bin = str_repeat("0", (8 - strlen(decbin($value2)))).decbin($value2);
			echo "<tr><td colspan='2' align='left'>Converteix el següent nombre binari al seu corresponent nombre decimal:</td><tr>";
			echo "<td width='50%' value='".$value2."' style='font-size:48px;' align='center'>".$bin."</td><td width='50%' id='answercell'><input name='answer2' type='text' size='8' maxlength='8' style='font-size:48px;'></td></tr>";
			echo "<tr><td colspan='2' align='left'>Converteix el següent caràcter a codi morse:</td><tr>";
			echo "<td width='50%' value='".$value3."' style='font-size:48px;' align='center'>".$keys[$value3]."</td><td width='50%' id='answercell'><input name='answer3' type='text' size='8' maxlength='8' style='font-size:48px;'></td></tr>";	
			echo "<tr><td colspan='2' align='left'>Converteix el següent codi morse a caràcter:</td><tr>";
			echo "<td width='50%' value='".$value4."' style='font-size:48px;' align='center'>".$values[$value4]."</td><td width='50%' id='answercell'><input name='answer4' type='text' size='8' maxlength='8' style='font-size:48px;'></td></tr>";
			echo "<tr><td colspan='2' align='left'>Converteix el següent caràcter al seu corresponent codi ASCII:</td><tr>";
			echo "<td width='50%' value='".$value5."' style='font-size:48px;' align='center'>".chr($value5)."</td><td width='50%' id='answercell'><input name='answer5' type='text' size='8' maxlength='8' style='font-size:48px;'></td></tr>";	
			echo "<tr><td colspan='2' align='left'>Converteix el següent codi ASCII al seu caràcter corresponent:</td><tr>";
			echo "<td width='50%' value='".$value6."' style='font-size:48px;' align='center'>".$value6."</td><td width='50%' id='answercell'><input name='answer6' type='text' size='8' maxlength='8' style='font-size:48px;'></td></tr>";	
			echo "<tr><td colspan='2' align='right'>&nbsp;</td><tr><td colspan='2' align='right'><input type='Submit' value='Corregeix'></td></tr></table>";	
			echo "<input type='hidden' name='type' value='".$type."'>";	
			echo "<input type='hidden' name='value1' value='".$value1."'>";
			echo "<input type='hidden' name='value2' value='".$value2."'>";	
			echo "<input type='hidden' name='value3' value='".$value3."'>";
			echo "<input type='hidden' name='value4' value='".$value4."'>";
			echo "<input type='hidden' name='value5' value='".$value5."'>";
			echo "<input type='hidden' name='value6' value='".$value6."'>";														
			echo "<input type='hidden' name='fails' value='".$fails."'>";
			echo "<input type='hidden' name='bid' value='".$bid."'>";
			echo "<input type='hidden' name='op1' value='".$op1."'>";
			echo "<input type='hidden' name='op2' value='".$op2."'>";
			echo "<input id='time' type='hidden' name='time' value='".$time."'>";
			echo "</form>";
			
			
			}else{
				echo "<p>Has de reptar un oponent!</p>";
			}
			
	}


}else{
?>
<p>Encara no estàs registrat al sistema.</p>
<?php

}
?>


                    </div>     
              </div>
                <div id="footer_box">
                    <div id="footer">
                        <div class="more_top"></div>
                        <div class="footer_bg">
                            <div id="footer_text" style="float: left;">
                                <div style="text-align: center; font-size: 0.75em;">© Jordi Vives Pons</div>
                                <div style="text-align: center; font-size: 0.75em;">Máster en Programari Lliure</div>
                            </div>
                            <div class="footer_img">
                                <a href="http://www.uoc.edu"><img src="images/uoc.png" alt="" title=""/></a>
                            </div>
                            <div style="clear: both"></div>
                        </div>
                        <div class="more_bot"></div>
                  </div>
              </div>
                <div class="con_bot"></div>
                <div class="clear_con"></div>
            </div>
        </div>
    </body>


<script>

function hideshow(which){
	if (!document.getElementById){
		return;
	}
	if (which.style.display=="block"){
		which.style.display="none";
	}
	else{
		which.style.display="block";
	}
}

function convertTwoDigitsString(num){
	if (num < 10){
		return "0" + num.toString();	
	}else{
		return num.toString();	
	}
}

//<div id="max_time" >Temps: 00:00:00</div>
 $(document).ready(function() {
	setInterval(function(){
		$("#max_time").html($("#time").attr("value"));
		var time_actual = $("#max_time").html().split(" ")[1].split(":");
				var hours = parseInt(time_actual[0]);
				var minutes = parseInt(time_actual[1]);
				var seconds = parseInt(time_actual[2]);

				seconds += 1
				if (seconds > 59){
					seconds = 0;
					minutes += 1;
					if (minutes > 59 ){
						minutes = 0;
						hours += 1;	
					}
				}				
				
				if ((hours*60*60 + minutes * 60 + seconds) > parseInt(600)){
					$("#max_time").html("Temps: " + convertTwoDigitsString(hours) + ":" + convertTwoDigitsString(minutes) + ":" + convertTwoDigitsString(seconds));
					$("#time").attr("value", "Temps: " + convertTwoDigitsString(hours) + ":" + convertTwoDigitsString(minutes) + ":" + convertTwoDigitsString(seconds));
					$("#max_time").css("color", "red");	
					$("#max_time").css("font-weight", "bold");
				}else{
					$("#max_time").html("Temps: " + convertTwoDigitsString(hours) + ":" + convertTwoDigitsString(minutes) + ":" + convertTwoDigitsString(seconds));						
					$("#time").attr("value", "Temps: " + convertTwoDigitsString(hours) + ":" + convertTwoDigitsString(minutes) + ":" + convertTwoDigitsString(seconds));
				}
	}, 1000); 
 });

</script>

</html>