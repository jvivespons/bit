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

                        <h5>Projecte Final de Màster - Màster en Programari Lliure - UOC</h5>
                        <p align="justify">Tauletes digitals, GPS, compres massives a través d'Internet, aplicacions intuïtives, pantalles tàctils, smartphones... És millor ser un consumidor o un creador de tecnologia? Avui dia és tema de debat en determinats cercles si val la pena o no aprendre a programar. Vivim envoltats de tecnologia; no obstant això, durant els primers anys d'escolarització els nens n'aprenen molt poc sobre aquesta. Encara que és comú veure infants usar cartró o materials reciclats per construir ciutats i ponts i esdevenir així “petits enginyers”, durant dècades els currículums de la primera infància s'han enfocat principalment a la lectoescriptura i les habilitats matemàtiques, afegint-s'hi recentment un enfocament més gran cap a la ciència. </p>
                        <p align="justify">&nbsp;</p>
                        <p align="justify">Sembla evident que els sistemes educatius de tot el món sofriran grans modificacions els propers anys propiciats per la revolució tecnològica. Alguns experts diuen que en els propers 15 anys, Internet convertirà les escoles en “entorns interactius” que posaran potes enlaire les formes tradicionals d'aprenentatge i canviaran la manera de ser dels docents, pares i estudiants.</p>
                        <p align="justify">&nbsp;</p>
                        <p align="justify">La investigació recent ha demostrat que infants de tan sols quatre anys poden entendre conceptes bàsics de programació i poden, fins i tot, construir robots simples. Els estudis inicials de Logo van demostrar que quan s'ensenya de forma estructurada, la programació pot ajudar a nens petits a millorar la memòria visual i el sentit numèric bàsic, a més de desenvolupar tècniques de resolució de problemes i habilitats lingüístiques. Investigacions realitzades per Papert i Resnick també van demostrar que aprendre a programar pot produir canvis en la manera de pensar de l'individu. Així, aquesta vegada, a la teoria construccionista de l'aprenentatge que ja es va posar en pràctica a la dècada dels 80 se li suma un nou factor: usar la programació per promoure el desenvolupament del pensament computacional, terme acunat per la investigadora Jeannette Wing l'any 2006. El pensament computacional, tal i com va ser introduït per Wing en el seu article, engloba un conjunt d'habilitats que inclouen: el modelat i l'abstracció; la divisió d'un problema en problemes més petits i manejables; la generalització per tal de resoldre, en comptes d'un problema en particular, la classe de problemes que el conté; i, finalment, la identificació de problemes i la formulació i prova de solucions com una sèrie de passos manipulables a través d'un algorisme. </p>
                        <p align="justify">&nbsp;</p>
                        <p align="justify">Ara bé, per què és important promoure que els estudiants de totes les edats desenvolupin el pensament computacional? Perquè aquest tipus de pensament els permetrà “aprofitar els avantatges de les transformacions revolucionàries que els canvis tecnològics accelerats han produït i fer, a més, les seves pròpies contribucions per a la solució dels grans desafiaments del segle XXI”. Mitjançant el desenvolupament del pensament computacional els estudiants poden millorar la seva habilitat de resoldre problemes, explotant així tot el potencial que ofereixen els ordinadors. </p>
                        <p align="justify">&nbsp;</p>
                        <p align="justify">Per acabar, només resta apuntar que l'objectiu d'aquest Projecte de Final de Màster d'implementar una aplicació web mitjançant eines de programari lliure es fonamenta en la creença que instruir els infants sobre el món construït pels éssers humans, és a dir, el món de la tecnologia i l'enginyeria, és tan important com instruir-los sobre el món natural, els números i les lletres, i que pot repercutir en un benefici enorme en el seu desenvolupament, tant personal com professional. </p>
                        
                        <h5>Què és el B. I. T.?</h5>
                        <p align="justify">Les sigles B. I. T. responen a Binary Intensive Training, una petita aplicació web desenvolupada pensant en ajudar a treballar als alumnes un dels aspectes de l'ampli ventall de conceptes que inclou el Pensament Computacional. Concretament es centra en què l'alumne descobreixi i entengui com s'ho fan els ordinadors per representar internament la informació (textos i imatges) que els hi proporcionem.</p>
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
