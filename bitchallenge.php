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
		<br/>
		<p>Ho sentim, però aquesta vegada no hi ha ajuda! És el MEGAREPTE, recordes? ;)</p>
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
		
		$fails = $_POST["fails"];
		
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
		
		while ($row = mysqli_fetch_array($result)) {
					$level = $row["LEVEL"];
					$xp = $row["XP"];
					$exercicesdone = $row["EXERCICESDONE"];
					$exercicesfail = $row["EXERCICESFAIL"];
		}
		
			if((bindec($answer1) == (string)$value1) && (decbin((int)$answer2) == decbin($value2)) && ($answer3 == $values[$value3]) && ($answer4 == $keys[$value4]) && ((int)$answer5 == $value5) && ($answer6 == chr($value6))){
				echo "<h1>Enhorabona! La teva resposta és correcta!</h1><br/><br/>";
				
				$resultxp = 50 - (((($hours * 3600) + ($minutes * 60) + $seconds) / 20) * 1) - ($fails * 0.5);
				if ($resultxp < 0){
					$resultxp = 0;
				}
				echo "<h1>Has obtingut ".$resultxp." punts d'experiència!</h1>";
					
				$xp = $xp + $resultxp;
				if ($xp > ($level * 100) ){
					$level = $level + 1;
					echo "<br/><br/><h1>Felicitats! Has pujat de nivell! El teu nou nivell és ".$level."</h1>";
				}
				$exercicesdone = $exercicesdone + 1;
				$exercicesfail = $exercicesfail + $fails;
				
				$result = true;
			}else{
				echo "<h1>Ho sento, no has superat el MEGAREPTE!</h1><br/><br/><h1>Algunes de les teves respostes són incorrectes!</h1><br/><br/>";
				$exercicesfail = $exercicesfail + 1;
				$result = false;
			}
		
			$sql = "UPDATE USERS SET XP = '".$xp."',  LEVEL = '".$level."', EXERCICESDONE='".$exercicesdone."', EXERCICESFAIL='".$exercicesfail."' WHERE USERNAME='".$_SESSION["username"]."'";
			$result = mysqli_query($link, $sql);	
			if($result){
				echo "";
			}else{
				echo "<br/><br/><p>Alguna cosa ha anat malament.</p>";
			}
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
		
			echo "<h1>El Bit Challenge (MEGAREPTE)</h1>";
			echo "<br/>";
			echo "<form action='bitchallenge.php' method='post'>";
			echo "<h1>Converteix correctament els 6 casos següents i guanya fins a 50 punts!</h1><br/><br/>";
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
			echo "<input id='time' type='hidden' name='time' value='".$time."'>";
			echo "</form>";
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