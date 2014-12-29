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
                <img src="images/logo.png" width="75%" title="" />
                <br /><br /><br />
                <div style="clear: all"></div>
              <div class="prev_box">
              
              
              
  <div class="content">
    <?php
if(isset($_SESSION['username'])){
	?>
    <p align="right"><a href="login.php"><?php echo $_SESSION["username"]; ?></a> | <a href="logout.php">Sortir</a></p>
    <?php
}
?>
    <h5>Què és el sistema binari?</h5>
    <p align="justify">El sistema binari és un sistema de numeració en què els nombres es representen usant tan sols dues xifres: zero (0) i u (1). És el sistema natural de comptatge usat pels ordinadors, ja que internament treballen amb dos nivells de voltatge: encès (o amb presència de càrrega elèctrica, equivalent a 1) i apagat (o sense prèsencia de càrrega elèctrica, equivalent a 0).</p>

<h5>Breu introducció histórica</h5>

<p align="justify">La primera descripció que es coneix d’un sistema binari es remunta al segle III abans de la nostra era, quan el matemàtic indi Pingala va descobrir el concepte del número zero. Es poden trobar, per exemple, usos posteriors del sistema binari en textes clàssics de l’antiga China o en alguns tractats de Sir Francis Bacon (un dels pares de l’actual ciència) en què parlava de fer ús del sistema binari per codificar l’alfabet.

El sistema binari modern va ser documentat en la seva totalitat per Leibniz al segle XVII, en el seu article “Explication de l’Arithmétique Binaire”. En aquest, Leibniz ja va usar el 0 i l’1, com en el sistema de numeració binari actual.

No va ser però fins a l’any 1854 que el sistema binari va obtenir la notorietat que posseeix actualment: el matemàtic britànic George Boole va publicar un article detallant un sistema de lógica (que acabaria anomenant-se Àlgebra de Boole) sustentat sobre la teoria del sistema binari. L’Àlgebra de Boole va esdevenir un factor fonamental per al desenvolupament dels sistemes electrònics actuals.</p>

<h5>Representació d’un nombre decimal en sistema binari</h5>
<p align="justify">Es divideix el nombre en sistema decimal entre 2. El resultat d’aquesta divisió es torna a dividir entre 2, i així successivament fins que el dividend sigui menor que el divisor (2). És a dir, quan el número a dividir sigui 1 es finalitza la divisió.
Seguidament, s’ordenen els residus de les divisions des de l’últim fins al primer (es coloquen en ordre invers a com a apareixen a les divisions). Aquest serà el número binari resultant de la conversió.</p><br />

<img align="center" src="images/Conversionbinari.jpg" width="50%" title=""/>
<br />
<h5>Representació d’un nombre en sistema binari en sistema decimal</h5>
<br />
<p align="justify">
<ol>
	<li> Escrivim el número binari i la llista de potències del número 2 de dreta a esquerra.
    <br />
	<img src="images/670px-Convert-from-Binary-to-Decimal-Step-1-Version-2.jpg" width="50%" title=""/>
	</li>
	<li> Escrivim els dígits del número binari a sota de les seves potències corresponents.
    <br />
	<img src="images/670px-Convert-from-Binary-to-Decimal-Step-2-Version-2.jpg" width="50%" title=""/>
	</li>
	<li> Connectem els dígits del número binari amb les seves potències corresponents.
    <br />
	<img src="images/670px-Convert-from-Binary-to-Decimal-Step-3-Version-2.jpg" width="50%" title=""/>
	</li>
	<li> Escrivim el valor final de cada potència de dos, de tal manera que, si el dígit binari és 1 ens quedem amb la seva potència de dos.
    <br />
	<img src="images/670px-Convert-from-Binary-to-Decimal-Step-4-Version-2.jpg" width="50%" title=""/>
	</li>
	<li> Sumem els valors finals.
    <br />
	<img src="images/670px-Convert-from-Binary-to-Decimal-Step-5-Version-2.jpg" width="50%" title=""/>
	</li>
</ol>
</p><br />
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
