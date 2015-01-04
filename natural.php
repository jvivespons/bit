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
    <?php
}
?>
    <h5>El Llenguatge Natural</h5>
    <p align="justify">En la filosofia del llenguatge, el llenguatge natural és la llengua o idioma parlat o escrit per humans per a propòsits generals de comunicació. Són aquelles llengües que han estat generades espontàniament en un grupo de parlants amb propòsit de comunicar-se, a diferència d'altres llengües, com poden ser una llengua construida, els llenguatges de programació o els llenguatges formals usats en l'estudi de la lògica formal, especialment la lògica matemàtica.</p>
    <p align="justify">Una llengua o idioma és un sistema de comunicació (verbal o signal) propi d'una comunitat humana. </p>
    <p align="justify">&nbsp;</p>
    <p align="justify">Tot i que sovint s'empren erròniament com a sinònims, no és el mateix una llengua o idioma que el llenguatge, la capacitat humana general.
      
      Tota llengua intenta representar el món mitjançant les paraules i la seva combinació en frases. Les regles de combinació, la formació de nous mots i el que ells signifiquen, són l'objecte d'estudi de la lingüística. Les llengües naturals, a diferència de les artificials o llenguatges formals, presenten sovint ambigüitats, ja que reflecteixen la manera de veure el món d'un grup de parlants.</p>
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
