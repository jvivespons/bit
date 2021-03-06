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
    <h5>El codi MORSE</h5>
    <p lign="justify">El <strong>codi Morse</strong> és un mètode per transmetre informació <a href="http://ca.wikipedia.org/wiki/Tel%C3%A8graf" title="Telègraf">telegràfica</a>, utilitzant seqüències d'elements curts i llargs per representar les lletres, nombres, puntuació i altres caràcters especials d'un missatge. Els elements curts i llargs poden estar formats per <a href="http://ca.wikipedia.org/wiki/So" title="So">sons</a> o polsos, i se solen conèixer per &quot;punts&quot; i &quot;ratlles&quot;.</p>
    <p>&nbsp;</p>
    <p  lign="justify">El codi Morse internacional està compost per sis elements:</p>
    <p>&nbsp;</p>
    <p>1. Marca curta, punt (·)</p>
    <p>&nbsp;</p>
    <p>2. Una marca més llarga, ratlla (-)</p>
    <p>&nbsp;</p>
    <p>3. Espai entre caràcters (entre els punts i les ratlles d'un mateix caràcter)</p>
    <p>&nbsp;</p>
    <p>4. Espai curt (entre lletres)</p>
    <p>&nbsp;</p>
    <p>5. Espai mitjà (entre paraules)</p>
    <p>&nbsp;</p>
    <p>6. Espai llarg (entre frases — d'unes set unitats de temps)</p>
    <p>Aquests sis elements serveixen de base pel codi Morse internacional i per tant poden ser aplicats a l'ús del codi Morse a nivell mundial.</p>
    <p align="justify">&nbsp;</p><br />

<table border="1">
<tbody><tr>
<th>Caràcter</th>
<th>Codi</th>
<th>Caràcter</th>
<th>Codi</th>
<th>Caràcter</th>
<th>Codi</th>
<th>Caràcter</th>
<th>Codi</th>
<th>Caràcter</th>
<th>Codi</th>
<th>Caràcter</th>
<th>Codi</th>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/f/f3/A_morse_code.ogg" class="internal" title="A morse code.ogg">A</a></div></td>
<td><div align="center"><b>·&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/9/9e/J_morse_code.ogg" class="internal" title="J morse code.ogg">J</a></div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;—&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/d/d8/S_morse_code.ogg" class="internal" title="S morse code.ogg">S</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/9/9b/1_number_morse_code.ogg" class="internal" title="1 number morse code.ogg">1</a></div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;—&nbsp;—&nbsp;—</b></div></td>
<td><div align="center">Punt [.]</div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;·&nbsp;—&nbsp;·&nbsp;—</b></div></td>
<td><div align="center">Dos punts [:]</div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;—&nbsp;·&nbsp;·&nbsp;·</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/b/b1/B_morse_code.ogg" class="internal" title="B morse code.ogg">B</a></div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;·&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/6/6a/K_morse_code.ogg" class="internal" title="K morse code.ogg">K</a></div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/b/ba/T_morse_code.ogg" class="internal" title="T morse code.ogg">T</a></div></td>
<td><div align="center"><b>—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/e/ee/2_number_morse_code.ogg" class="internal" title="2 number morse code.ogg">2</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;—&nbsp;—&nbsp;—</b></div></td>
<td><div align="center">Coma [,]</div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;·&nbsp;·&nbsp;—&nbsp;—</b></div></td>
<td><div align="center">Punt i coma [;]</div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;—&nbsp;·&nbsp;—&nbsp;·</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/2/25/C_morse_code.ogg" class="internal" title="C morse code.ogg">C</a></div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;—&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/a/a8/L_morse_code.ogg" class="internal" title="L morse code.ogg">L</a></div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;·&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/3/34/U_morse_code.ogg" class="internal" title="U morse code.ogg">U</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/f/fd/3_number_morse_code.ogg" class="internal" title="3 number morse code.ogg">3</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;·&nbsp;—&nbsp;—</b></div></td>
<td>Interrogació [?]</td>
<td><div align="center"><b>·&nbsp;·&nbsp;—&nbsp;—&nbsp;·&nbsp;·</b></div></td>
<td><div align="center">Signe d'igualtat [=]</div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;·&nbsp;·&nbsp;—</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/9/92/D_morse_code.ogg" class="internal" title="D morse code.ogg">D</a></div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/9/97/M_morse_code.ogg" class="internal" title="M morse code.ogg">M</a></div></td>
<td><div align="center"><b>—&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/3/37/V_morse_code.ogg" class="internal" title="V morse code.ogg">V</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;·&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/5/5c/4_number_morse_code.ogg" class="internal" title="4 number morse code.ogg">4</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;·&nbsp;·&nbsp;—</b></div></td>
<td><div align="center">Apòstrof [']</div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;—&nbsp;—&nbsp;—&nbsp;·</b></div></td>
<td><div align="center">Símbol de suma [+]</div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;·&nbsp;—&nbsp;·</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/e/e7/E_morse_code.ogg" class="internal" title="E morse code.ogg">E</a></div></td>
<td><div align="center"><b>·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/5/5a/N_morse_code.ogg" class="internal" title="N morse code.ogg">N</a></div></td>
<td><div align="center"><b>—&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/6/68/W_morse_code.ogg" class="internal" title="W morse code.ogg">W</a></div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/5/52/5_number_morse_code.ogg" class="internal" title="5 number morse code.ogg">5</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;·&nbsp;·&nbsp;·</b></div></td>
<td><div align="center">Exclamació [!]</div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;—&nbsp;·&nbsp;—&nbsp;—</b></div></td>
<td><div align="center">Símbol de resta [-]</div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;·&nbsp;·&nbsp;·&nbsp;—</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/6/63/F_morse_code.ogg" class="internal" title="F morse code.ogg">F</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;—&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/4/41/O_morse_code.ogg" class="internal" title="O morse code.ogg">O</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/b/be/X_morse_code.ogg" class="internal" title="X morse code.ogg">X</a></div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;·&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/4/4d/6_number_morse_code.ogg" class="internal" title="6 number morse code.ogg">6</a></div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;·&nbsp;·&nbsp;·</b></div></td>
<td><div align="center">Barra [/]</div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;·&nbsp;—&nbsp;·</b></div></td>
<td><div align="center">Guió baix [_]</div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;—&nbsp;—&nbsp;·&nbsp;—</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/7/72/G_morse_code.ogg" class="internal" title="G morse code.ogg">G</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/c/c6/P_morse_code.ogg" class="internal" title="P morse code.ogg">P</a></div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;—&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/5/5d/Y_morse_code.ogg" class="internal" title="Y morse code.ogg">Y</a></div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;—&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/1/14/7_number_morse_code.ogg" class="internal" title="7 number morse code.ogg">7</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;·&nbsp;·&nbsp;·</b></div></td>
<td><div align="center">Parèntesi [(]</div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;—&nbsp;—&nbsp;·</b></div></td>
<td><div align="center">Cometes</div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;·&nbsp;·&nbsp;—&nbsp;·</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/9/93/H_morse_code.ogg" class="internal" title="H morse code.ogg">H</a></div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;·&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/f/f0/Q_morse_code.ogg" class="internal" title="Q morse code.ogg">Q</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;·&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/7/7a/Z_morse_code.ogg" class="internal" title="Z morse code.ogg">Z</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;·&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/3/3a/8_number_morse_code.ogg" class="internal" title="8 number morse code.ogg">8</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;—&nbsp;·&nbsp;·</b></div></td>
<td><div align="center">Parèntesi [)]</div></td>
<td><div align="center"><b>—&nbsp;·&nbsp;—&nbsp;—&nbsp;·&nbsp;—</b></div></td>
<td><div align="center">Símbol del dòlar [$]</div></td>
<td><div align="center"><b>·&nbsp;·&nbsp;·&nbsp;—&nbsp;·&nbsp;·&nbsp;—</b></div></td>
</tr>
<tr>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/d/d9/I_morse_code.ogg" class="internal" title="I morse code.ogg">I</a></div></td>
<td><div align="center"><b>·&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/e/ea/R_morse_code.ogg" class="internal" title="R morse code.ogg">R</a></div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;·</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/5/5d/0_number_morse_code.ogg" class="internal" title="0 number morse code.ogg">0</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;—&nbsp;—&nbsp;—</b></div></td>
<td><div align="center"><a href="//upload.wikimedia.org/wikipedia/commons/4/44/9_number_morse_code.ogg" class="internal" title="9 number morse code.ogg">9</a></div></td>
<td><div align="center"><b>—&nbsp;—&nbsp;—&nbsp;—&nbsp;·</b></div></td>
<td><div align="center">Ampersand [&amp;]</div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;·&nbsp;·&nbsp;·</b></div></td>
<td><div align="center">Arrova [@]</div></td>
<td><div align="center"><b>·&nbsp;—&nbsp;—&nbsp;·&nbsp;—&nbsp;·</b></div></td>
</tr>
</tbody></table>

<p>&nbsp;</p>
<p align="justify">Els missatges en Morse se solen transmetre per un aparell operat a mà, com pot ser un telègraf, per tant hi ha variacions introduïdes per l'habilitat de l'emissor i del receptor; operadors amb més experiència poden enviar i rebre missatges a velocitats més ràpides. Dels dos símbols utilitzats per representar lletres, els punts i les ratlles, el que marca la velocitat a la qual s'envia el missatge és el punt, que s'utilitza com a referència per a la temporització.</p>
<p>&nbsp;</p>
<p align="justify">La velocitat del codi Morse se sol especificar en &quot;paraules per minut&quot;. Una ratlla acostuma a ser 3 vegades més llarga que un punt. L'espai entre ratlles i punts d'un mateix caràcter té la longitud d'un punt; entre lletres d'una paraula la longitud d'una ratlla (3 punts); i entre paraules és de 7 punts. L'<strong>estàndard de París</strong> defineix la velocitat de la transmissió com el temps necessari per enviar la paraula &quot;Paris&quot; un cert nombre de vegades per minut. S'utilitza la paraula &quot;Paris&quot; com a referència perquè té precisament 50 punts de durada.</p>
<p>&nbsp;</p>
<p align="justify">A continuació hi ha una il·lustració de les convencions de temporització. La frase &quot;MORSE CODE&quot;, s'escriuria normalment això, on - representen ratlles i · representen punts:</p>
<p>&nbsp;</p>

<div align="center">
  <pre>-- --- ·-· ··· · / -·-· --- -·· · 
M O R S E (espai) C O D E</pre>
</div>

<h5>&nbsp;</h5>
  </div>
              </div>
              <div id="footer_box">
                <div id="footer">
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
