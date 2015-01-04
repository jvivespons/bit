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
 
    <table  width="100%" align="center">
    <tr>
    <td style="padding: 10px;"><h1 align="center">Menú principal</h1></tr>
    <tr>
<<<<<<< HEAD
    <td style="padding: 10px;"><div align="center"><a href="ranquing.php">Veure rànquing</a></td>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center"><a href="profile.php">Perfil</a></td>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center"><a href="binex.php">Practicar codificació binaria</a></td>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center"><a href="asciiex.php">Practicar codificació ascii</a></td>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center"><a href="morseex.php">Practicar codificació morse</a></td>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center"><a href="bitchallenge.php">El bit challenge</a></td>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center"><a href="battle.php">Reptar oponent</a></td>
    </div>
    </tr>
    </table>
    
    <?php
    
    $db_user= 'root';
	$db_pass= 'root';
	$db_name= 'elbit';
  
	$link = mysqli_connect('localhost', $db_user, $db_pass, $db_name);

	// Check connection
	if (!$link) {
	    die("Connection failed: " . mysqli_connect_error());
	}
    
    $sqlprev = "SELECT * FROM USERS WHERE USERNAME = '".$_SESSION["username"]."'";
	$resultprev = mysqli_query($link, $sqlprev);
	$rowprev = mysqli_fetch_array($resultprev);
	$iduser = $rowprev["ID"];
    $sql = "SELECT * FROM BATTLES WHERE OP1 = '".$iduser."' OR OP2 = '".$iduser."'";

$result = mysqli_query($link, $sql);

echo "<br/><br/><table width='100%' border='0' align='center'>";
echo "<tr><th align='center'>Data</th><th align='center'>Estat de la batalla</th><th align='center'>Oponent 1</th><th align='center'>Encerts</th><th align='center'>Errors</th><th>Oponent 2</th><th>Encerts</th><th align='center'>Errors</th></tr>";
while ($row = mysqli_fetch_array($result)) {

	$battleid = $row["ID"];
	$op1 = $row["OP1"];
	$op1ok = $row["OP1OK"];
	$op1fail = $row["OP1FAIL"];
	$op2 = $row["OP2"];
	$op2ok = $row["OP2OK"];
	$op2fail = $row["OP2FAIL"];
	$closed = $row["CLOSED"];
	$date = $row["DATE"];
	
	
	$sql2 = "SELECT * FROM USERS WHERE ID = '".$op1."'";
	$result2 = mysqli_query($link, $sql2);
	$row2 = mysqli_fetch_array($result2);
	$op1username = $row2["USERNAME"];
	$sql3 = "SELECT * FROM USERS WHERE ID = '".$op2."'";
	$result3 = mysqli_query($link, $sql3);
	$row3 = mysqli_fetch_array($result3);
	$op2username = $row3["USERNAME"];
	
	if($closed == 0){
		if ($op1 == $iduser){
			if($op1ok != 0 || $op1fail != 0){
				echo "<tr><td align='center'>".$date."</td><td align='center'>Oberta</td><td align='center'>".$op1username."</td><td align='center'>".$op1ok."</td><td align='center'>".$op1fail."</td><td align='center'>".$op2username."</td><td align='center'>".$op2ok."</td><td align='center'>".$op2fail."</td></tr>";
			}else{
				echo "<tr><td align='center'>".$date."</td><td align='center'><a href='battleex.php?bid=".$battleid."&op1=".$op1."&op2=".$op2."'>Oberta</a></td><td align='center'>".$op1username."</td><td align='center'>".$op1ok."</td><td align='center'>".$op1fail."</td><td align='center'>".$op2username."</td><td align='center'>".$op2ok."</td><td align='center'>".$op2fail."</td></tr>";
			}
		}else{
			if($op2ok != 0 || $op2fail != 0){
				echo "<tr><td align='center'>".$date."</td><td align='center'>Oberta</td><td align='center'>".$op1username."</td><td align='center'>".$op1ok."</td><td align='center'>".$op1fail."</td><td align='center'>".$op2username."</td><td align='center'>".$op2ok."</td><td align='center'>".$op2fail."</td></tr>";
			}else{
				echo "<tr><td align='center'>".$date."</td><td align='center'><a href='battleex.php?bid=".$battleid."&op1=".$op1."&op2=".$op2."'>Oberta</a></td><td align='center'>".$op1username."</td><td align='center'>".$op1ok."</td><td align='center'>".$op1fail."</td><td align='center'>".$op2username."</td><td align='center'>".$op2ok."</td><td align='center'>".$op2fail."</td></tr>";
			}
		}
		
	}else{
		echo "<tr><td align='center'>".$date."</td><td align='center'>Tancada</td><td align='center'>".$op1username."</td><td align='center'>".$op1ok."</td><td align='center'>".$op1fail."</td><td align='center'>".$op2username."</td><td align='center'>".$op2ok."</td><td align='center'>".$op2fail."</td></tr>";	
	}
}

echo "</table>";


mysqli_close($link);
    
    
=======
    <td style="padding: 10px;"><div align="center"><a href="ranquing.php">Veure rànquing</a></t2>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center">Practicar codificació binaria
      </t2>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center">Practicar codificació ascii
      </t2>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center">Practicar codificació morse
      </t2>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center">El bit challenge
      </t2>
    </div>
    </tr>
    <tr>
    <td style="padding: 10px;"><div align="center">Reptar oponent
      </t2>
    </div>
    </tr>
    </table>
    <?php
>>>>>>> FETCH_HEAD
}else{
?>
<form action="login.php" method="post">
<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td colspan="2" align="center" bgcolor=#cccccc>Registre</td>
</tr>
<tr><td width="40%"> </td></tr>
<tr>
<td align="right">User Name: </td>
<td ><input type="Text" name="username" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">Password: </td>
<td><input type="password" name="password" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right"></td>
<td>Encara no estàs registrat? Segueix aquest <a href="alta.php">enllaç</a>.</td>
</tr>
<tr>
<BR>
<td colspan="2" align="center"><input type="Submit" value="Entra"></td>
</tr>
</table>
</form>
<?php
}
<<<<<<< HEAD


=======
>>>>>>> FETCH_HEAD
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
</html>
