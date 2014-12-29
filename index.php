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
              <?php
if(isset($_SESSION['username'])){
	?>
    <p align="right"><a href="login.php"><?php echo $_SESSION["username"]; ?></a> | <a href="logout.php">Sortir</a></p>
    <?php
}
?>
              <div class="column1">Podeu usar aquesta petita eina per fer-vos una idea de com n'és de fàcil convertir texts complets en llegnuatge natural a textos en codi ASCII i en format binari.</div>
              <br /><br />
                <div id="content" class="column3">
                        <div class="col1">
                            <h3>Llenguatge natural</h3>
                            <input id="text" type="text" class="inputs" placeholder="text" /> <br /><br /><button id="convert" onclick="getConversion()">Converteix</button>
                            <div class="read"><a href="natural.php">Més info</a></div>
                        </div>
                        <div class="col2">
                            <h3>Codi ASCII</h3>
                            <input id ="ascii" type="text" readonly class="inputs" placeholder="ascii" /> <br /><br /><br />
                            <div class="read"><a href="ascii.php">Més info</a></div>
                        </div>
                        <div class="col3">
                          <h3>Codi Binari </h3>
                          <input id="binari" type="text" readonly class="inputs" placeholder="binari" /><br /><br /><br />
                            <div class="read"><a href="binari.php">Més info</a></div>
                        </div>
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
