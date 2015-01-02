<?php session_start(); ?>
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
		
		<h5><a href="javascript:hideshow(document.getElementById('adiv2'))">Què és el sistema binari?</a></h5>
    	<div id="adiv2" style="display: none"><p align="justify">El sistema binari és un sistema de numeració en què els nombres es representen usant tan sols dues xifres: zero (0) i u (1). És el sistema natural de comptatge usat pels ordinadors, ja que internament treballen amb dos nivells de voltatge: encès (o amb presència de càrrega elèctrica, equivalent a 1) i apagat (o sense prèsencia de càrrega elèctrica, equivalent a 0).</p></div>

		<h5><a href="javascript:hideshow(document.getElementById('adiv3'))">Representació d’un nombre decimal en sistema binari</a></h5>
		<div id="adiv3" style="display: none"><p align="justify">Es divideix el nombre en sistema decimal entre 2. El resultat d’aquesta divisió es torna a dividir entre 2, i així successivament fins que el dividend sigui menor que el divisor (2). És a dir, quan el número a dividir sigui 1 es finalitza la divisió.
		Seguidament, s’ordenen els residus de les divisions des de l’últim fins al primer (es coloquen en ordre invers a com a apareixen a les divisions). Aquest serà el número binari resultant de la conversió.</p><br />

		<img align="center" src="images/Conversionbinari.jpg" width="20%" title=""/></div>
		
		<h5><a href="javascript:hideshow(document.getElementById('adiv4'))">Representació d’un nombre en sistema binari en sistema decimal</a></h5>
		<div id="adiv4" style="display: none">
		<p align="justify">
		<ol>
			<li> Escrivim el número binari i la llista de potències del número 2 de dreta a esquerra.
		    <br />
			<img src="images/670px-Convert-from-Binary-to-Decimal-Step-1-Version-2.jpg" width="20%" title=""/>
			</li>
			<li> Escrivim els dígits del número binari a sota de les seves potències corresponents.
		    <br />
			<img src="images/670px-Convert-from-Binary-to-Decimal-Step-2-Version-2.jpg" width="20%" title=""/>	
			</li>
			<li> Connectem els dígits del número binari amb les seves potències corresponents.
		    <br />
			<img src="images/670px-Convert-from-Binary-to-Decimal-Step-3-Version-2.jpg" width="20%" title=""/>
			</li>
			<li> Escrivim el valor final de cada potència de dos, de tal manera que, si el dígit binari és 1 ens quedem amb la seva potència de dos.
	    	<br />
			<img src="images/670px-Convert-from-Binary-to-Decimal-Step-4-Version-2.jpg" width="20%" title=""/>
			</li>
			<li> Sumem els valors finals.
   		 	<br />
			<img src="images/670px-Convert-from-Binary-to-Decimal-Step-5-Version-2.jpg" width="20%" title=""/>
			</li>
		</ol>
		</p></div>
		</div>	
	</div>
	<br/>
    <?php
    $result = false;
    if(isset($_POST["type"])){
    	$type = $_POST["type"];
		$value = $_POST["value"];
		$time = $_POST["time"];
		$answer = $_POST["answer"];
		$fails = $_POST["fails"];
		
		$db_user= 'root';
		$db_pass= 'root';
		$db_name= 'elbit';
  
		$link = mysqli_connect('localhost', $db_user, $db_pass, $db_name);

		// Check connection
		if (!$link) {
		    die("Connection failed: " . mysqli_connect_error());
		}
	
		if ($type == 1){
			//binari
			if(bindec($answer) == (string)$value){
				echo "<h1>Enhorabona! La teva resposta és correcta!</h1><br/><br/>";
				$time_actual = explode(":", explode(" ", $time)[1]);
				$hours = (int)($time_actual[0]);
				$minutes = (int)($time_actual[1]);
				$seconds = (int)($time_actual[2]);
				//echo "h ".$hours." m ".$minutes ." s ".$seconds;
				$resultxp = 10 - (((($hours * 3600) + ($minutes * 60) + $seconds) / 100) * 0.5) - ($fails * 0.5);
				if ($resultxp < 0){
					$resultxp = 0;
				}
				echo "<h1>Has obtingut ".$resultxp." punts d'experiència!</h1>";
				$sql = "SELECT * FROM USERS WHERE USERNAME = '".$_SESSION["username"]."'";
				$result = mysqli_query($link, $sql);	
				while ($row = mysqli_fetch_array($result)) {
					$level = $row["LEVEL"];
					$xp = $row["XP"];
					$exercicesdone = $row["EXERCICESDONE"];
					$exercicesfail = $row["EXERCICESFAIL"];
				}
				$xp = $xp + $resultxp;
				if ($xp > ($level * 100) ){
					$level = $level + 1;
					echo "<br/><br/><h1>Felicitats! Has pujat de nivell! El teu nou nivell és ".$level."</h1>";
				}
				$exercicesdone = $exercicesdone + 1;
				$exercicesfail = $exercicesfail + $fails;
				$sql = "UPDATE USERS SET XP = '".$xp."',  LEVEL = '".$level."', EXERCICESDONE='".$exercicesdone."', EXERCICESFAIL='".$exercicesfail."' WHERE USERNAME='".$_SESSION["username"]."'";
				$result = mysqli_query($link, $sql);	
				if($result){
					echo "";
				}else{
					echo "<br/><br/><p>Alguna cosa ha anat malament.</p>";
				}
				mysqli_close($link);
				$result = true;
			}else{
				echo "<h1>Ho sento la teva resposta és incorrecta! Torna-ho a provar!</h1><br/><br/>";
				$fails = $fails + 1;
				$result = false;
			}
		}else{
			//decimal
			if(decbin((int)$answer) == decbin($value)){
				echo "<h1>Enhorabona! La teva resposta és correcta!</h1><br/><br/>";
				$time_actual = explode(":", explode(" ", $time)[1]);
				$hours = (int)($time_actual[0]);
				$minutes = (int)($time_actual[1]);
				$seconds = (int)($time_actual[2]);
				//echo "h ".$hours." m ".$minutes ." s ".$seconds;
				$resultxp = 10 - (((($hours * 3600) + ($minutes * 60) + $seconds) / 100) * 0.5) - ($fails * 0.5);
				if ($resultxp < 0){
					$resultxp = 0;
				}
				echo "<h1>Has obtingut ".$resultxp." punts d'experiència!</h1>";
				$sql = "SELECT * FROM USERS WHERE USERNAME = '".$_SESSION["username"]."'";
				$result = mysqli_query($link, $sql);	
				while ($row = mysqli_fetch_array($result)) {
					$level = $row["LEVEL"];
					$xp = $row["XP"];
					$exercicesdone = $row["EXERCICESDONE"];
					$exercicesfail = $row["EXERCICESFAIL"];
				}
				$xp = $xp + $resultxp;
				if ($xp > ($level * 100) ){
					$level = $level + 1;
					echo "<br/><br/><h1>Felicitats! Has pujat de nivell! El teu nou nivell és ".$level."</h1>";
				}
				$exercicesdone = $exercicesdone + 1;
				$exercicesfail = $exercicesfail + $fails;
				$sql = "UPDATE USERS SET XP = '".$xp."',  LEVEL = '".$level."', EXERCICESDONE='".$exercicesdone."', EXERCICESFAIL='".$exercicesfail."' WHERE USERNAME='".$_SESSION["username"]."'";
				$result = mysqli_query($link, $sql);	
				if($result){
					echo "";
				}else{
					echo "<br/><br/><p>Alguna cosa ha anat malament.</p>";
				}
				mysqli_close($link);
				$result = true;
			}else{
				echo "<h1>Ho sento la teva resposta és incorrecta! Torna-ho a provar!</h1><br/><br/>";
				$fails = $fails + 1;
				$result = false;
			}
		}
		
		
    }else{
		$type = rand(0, 1);
		$value = rand(0, 255);
		$time = "Temps: 00:00:00";
		$fails = 0;
	}
	if($result == false){
		if ($type == 1){
			echo "<form action='binex.php' method='post'>";
			echo "<h1>Converteix el següent nombre decimal a binari (8 bits):</h1><br/><br/><br/><br/>";
			echo "<table border='0' width='100%' align='center' style='text-align:center'><tr>";	
			echo "<td width='50%' value='".$value."' style='font-size:48px;' align='center'>".$value."</td><td width='50%' id='answercell'><input name='answer' type='text' size='8' maxlength='8' style='font-size:48px;'></td>";	
			echo "</tr><tr><td colspan='2' align='right'>&nbsp;</td><tr><td colspan='2' align='right'><input type='Submit' value='Corregeix'></td></tr></table>";	
			echo "<input type='hidden' name='type' value='".$type."'>";	
			echo "<input type='hidden' name='value' value='".$value."'>";
			echo "<input type='hidden' name='fails' value='".$fails."'>";
			echo "<input id='time' type='hidden' name='time' value='".$time."'>";
			echo "</form>";
		}else{
			echo "<form action='binex.php' method='post'>";
			echo "<h1>Converteix el següent nombre binari al seu corresponent nombre decimal:</h1><br/><br/><br/><br/>";
			echo "<table border='0' width='100%' align='center' style='text-align:center'><tr>";	
			$bin = str_repeat("0", (8 - strlen(decbin($value)))).decbin($value);
			echo "<td width='50%' value='".$value."' style='font-size:48px;' align='center'>".$bin."</td><td width='50%' id='answercell'><input name='answer' type='text' size='8' maxlength='8' style='font-size:48px;'></td>";	
			echo "</tr><tr><td colspan='2' align='right'>&nbsp;</td><tr><td colspan='2' align='right'><input type='Submit' value='Corregeix'></td></tr></table>";	
			echo "<input type='hidden' name='type' value='".$type."'>";
			echo "<input type='hidden' name='value' value='".$value."'>";
			echo "<input type='hidden' name='fails' value='".$fails."'>";
			echo "<input id='time' type='hidden' name='time' value='".$time."'>";
			echo "</form>";
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