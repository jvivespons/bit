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
    <?php
    $db_user= 'root';
	$db_pass= 'root';
	$db_name= 'elbit';
  
	$link = mysqli_connect('localhost', $db_user, $db_pass, $db_name);

	// Check connection
	if (!$link) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM USERS WHERE USERNAME = '".$_SESSION['username']."'";

	$result = mysqli_query($link, $sql);

	while ($row = mysqli_fetch_array($result)) {
	?>
    <table width="50%"">
    <tr>
    <td style="padding: 10px;"><h1>Dades del Perfil</h1></tr>
    <tr>
    <tr>
    <?php echo "<td style='padding: 10px;'><b>Nom d'usuari: </b></td><td>".$row["USERNAME"]."</td>"; ?>
    </tr>
        <tr>
    <?php echo "<td style='padding: 10px;'><b>Nom real: </b></td><td>".$row["REALNAME"]."</td>"; ?>
    </tr>
        <tr>
    <?php echo "<td style='padding: 10px;'><b>Nivell: </b></td><td>".$row["LEVEL"]."</td>"; ?>
    </tr>
        <tr>
    <?php echo "<td style='padding: 10px;'><b>Punts d'experiència: </b></td><td>".$row["XP"]."</td>"; ?>
    </tr>
        <tr>
    <?php echo "<td style='padding: 10px;'><b>Exercicis realitzats: </b></td><td>".$row["EXERCICESDONE"]."</td>"; ?>
    </tr>
        <tr>
    <?php echo "<td style='padding: 10px;'><b>Exercicis fallats: </b></td><td>".$row["EXERCICESFAIL"]."</td>"; ?>
    </tr>
    </table>
    <?php
}

mysqli_close($link);
    
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
</html>
