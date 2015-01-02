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
		
		<h5><a href="javascript:hideshow(document.getElementById('adiv2'))">El codi ASCII</a></h5>
    	<div id="adiv2" style="display: none"><p align="justify">ASCII (de l'anglès American Standard Code for Information Interchange) és un codi estàndard americà per a l'intercanvi d'informació. L'ASCII és un joc de caràcters que assigna valors numèrics (del 0 al 127, 7 bits de longitud) a les lletres, xifres i signes de puntuació. Tambe existeixen codis ASCII extensos (del 0 al 255, 8 bits de longitud) que permeten representar caràcters no anglesos com poden ser accents o la ç. </p></div>

		<h5><a href="javascript:hideshow(document.getElementById('adiv3'))">Visió General</a></h5>
		<div id="adiv3" style="display: none"><p align="justify">Gairebé tots els sistemes informàtics actuals utilitzen el codi ASCII o una extensió compatible per representar textos i per al control de dispositius que treballen amb text. Els ordinadors tan sols entenen nombres. El codi ascii és la representació numèrica d'un caràcter, conformant una correspondència entre cadenes de bits i una sèrie de símbols, permetent d'aquesta manera la comunicació entre dispositius digitals així com el seu processament i emmagatzematge. El codi de caràcters ASCII (o la seva extensió) s'usa gairebé en tots els ordinadors, especialment amb ordinadors personals i estacions de treball.</p></div>
		
		<h5><a href="javascript:hideshow(document.getElementById('adiv4'))">Els caràcters de controls ASCII</a></h5>
		<div id="adiv4" style="display: none">
		<p align="justify">El codi ASCII reserva els primers 32 codis (numerats del 0 al 31 en decimal) para caràcters de control: codis no pensats originalment per representar informació imprimible, sinó per controlar dispositius (com impressores) que usaven ASCII. Per exemple, el caràcter 10 representa la funció "nova línia" (line feed), que fa que una impressora avanci el paper, i el caràcter 27 representa la tecla "escapi" que sovint es troba en la cantonada superior esquerra dels teclats comuns. El codi 127 (els set bits a un), un altre caràcter especial, equival a "suprimir" ("delete"). Encara que aquesta funció s'assembla a altres caràcters de control, els dissenyadors d'ASCII van idear aquest codi per poder "esborrar" una secció de paper perforat (un mitjà d'emmagatzematge popular fins a la dècada de 1980) mitjançant la perforació de tots els forats possibles d'una posició de caràcter concreta, reemplaçant qualsevol informació prèvia. Atès que el codi 0 era ignorat, va ser possible deixar buits (regions de forats) i més tard fer correccions.</p><br />

<table align="center" border="2" style="padding: 0.5em; border: 1px #aaa solid; border-collapse: collapse;background:#F9F9F9" cellpadding="4">
<tbody><tr valign="bottom" style="background:#F2F2F2">
<th>Binari</th>
<th>Decimal</th>
<th>Hex</th>
<th>Abreviatura</th>
<th>Repr</th>
<th>AT</th>
<th>Nom/Significat</th>
</tr>
<tr>
<td>0000&nbsp;0000</td>
<td align="center">0</td>
<td align="center">00</td>
<td align="center">NUL</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^@</td>
<td>Caràcter Nul</td>
</tr>
<tr>
<td>0000&nbsp;0001</td>
<td align="center">1</td>
<td align="center">01</td>
<td align="center">SOH</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>Inici
<p>d'Encapçalat</p>
</td>
</tr>
<tr>
<td>0000&nbsp;0010</td>
<td align="center">2</td>
<td align="center">02</td>
<td align="center">STX</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^B</td>
<td>Inicio de Text</td>
</tr>
<tr>
<td>0000&nbsp;0011</td>
<td align="center">3</td>
<td align="center">03</td>
<td align="center">ETX</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^C</td>
<td>Fi de Text</td>
</tr>
<tr>
<td>0000&nbsp;0100</td>
<td align="center">4</td>
<td align="center">04</td>
<td align="center">EOT</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^D</td>
<td>Fi de Transmissió</td>
</tr>
<tr>
<td>0000&nbsp;0101</td>
<td align="center">5</td>
<td align="center">05</td>
<td align="center">ENQ</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^I</td>
<td>Enquiry</td>
</tr>
<tr>
<td>0000&nbsp;0110</td>
<td align="center">6</td>
<td align="center">06</td>
<td align="center">ACK</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^F</td>
<td>Acknowledgement</td>
</tr>
<tr>
<td>0000&nbsp;0111</td>
<td align="center">7</td>
<td align="center">07</td>
<td align="center">BEL</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^G</td>
<td>Timbri</td>
</tr>
<tr>
<td>0000&nbsp;1000</td>
<td align="center">8</td>
<td align="center">08</td>
<td align="center">BS</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^H</td>
<td>Reculada</td>
</tr>
<tr>
<td>0000&nbsp;1001</td>
<td align="center">9</td>
<td align="center">09</td>
<td align="center">HT</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^I</td>
<td>Tabulació horitzontal</td>
</tr>
<tr>
<td>0000&nbsp;1010</td>
<td align="center">10</td>
<td align="center">0A</td>
<td align="center">LF</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^J</td>
<td><a href="/wiki/Salt_de_l%C3%ADnia" title="Salt de línia">Line feed</a> (Salt de línia)</td>
</tr>
<tr>
<td>0000&nbsp;1011</td>
<td align="center">11</td>
<td align="center">0B</td>
<td align="center">VT</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^K</td>
<td>Tabulació Vertical</td>
</tr>
<tr>
<td>0000&nbsp;1100</td>
<td align="center">12</td>
<td align="center">0C</td>
<td align="center">FF</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^L</td>
<td>Form feed</td>
</tr>
<tr>
<td>0000&nbsp;1101</td>
<td align="center">13</td>
<td align="center">0D</td>
<td align="center">CR</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^M</td>
<td><a href="/wiki/Retorn_de_carro" title="Retorn de carro">Carriage return</a></td>
</tr>
<tr>
<td>0000&nbsp;1110</td>
<td align="center">14</td>
<td align="center">0I</td>
<td align="center">SOTA</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^N</td>
<td>Shift Out</td>
</tr>
<tr>
<td>0000&nbsp;1111</td>
<td align="center">15</td>
<td align="center">0F</td>
<td align="center">SI</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^O</td>
<td>Shift In</td>
</tr>
<tr>
<td>0001&nbsp;0000</td>
<td align="center">16</td>
<td align="center">10</td>
<td align="center">DLE</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^P</td>
<td>Data Link Escapi</td>
</tr>
<tr>
<td>0001&nbsp;0001</td>
<td align="center">17</td>
<td align="center">11</td>
<td align="center">DC1</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^Q</td>
<td>Device Control 1&nbsp;? oft. XON</td>
</tr>
<tr>
<td>0001&nbsp;0010</td>
<td align="center">18</td>
<td align="center">12</td>
<td align="center">DC2</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^R</td>
<td>Device Control 2</td>
</tr>
<tr>
<td>0001&nbsp;0011</td>
<td align="center">19</td>
<td align="center">13</td>
<td align="center">DC3</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^S</td>
<td>Device Control 3&nbsp;? oft. XOFF</td>
</tr>
<tr>
<td>0001&nbsp;0100</td>
<td align="center">20</td>
<td align="center">14</td>
<td align="center">DC4</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^T</td>
<td>Device Control 4</td>
</tr>
<tr>
<td>0001&nbsp;0101</td>
<td align="center">21</td>
<td align="center">15</td>
<td align="center">NAK</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^O</td>
<td>Negative Acknowledgement</td>
</tr>
<tr>
<td>0001&nbsp;0110</td>
<td align="center">22</td>
<td align="center">16</td>
<td align="center">SYN</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^V</td>
<td>Synchronous Aneu-li</td>
</tr>
<tr>
<td>0001&nbsp;0111</td>
<td align="center">23</td>
<td align="center">17</td>
<td align="center">ETB</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^W</td>
<td>End of Trans. Block</td>
</tr>
<tr>
<td>0001&nbsp;1000</td>
<td align="center">24</td>
<td align="center">18</td>
<td align="center">CA</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^X</td>
<td>Cancell</td>
</tr>
<tr>
<td>0001&nbsp;1001</td>
<td align="center">25</td>
<td align="center">19</td>
<td align="center">EM</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^I</td>
<td>End of Medium</td>
</tr>
<tr>
<td>0001&nbsp;1010</td>
<td align="center">26</td>
<td align="center">1A</td>
<td align="center">SUB</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^Z</td>
<td>Substitute</td>
</tr>
<tr>
<td>0001&nbsp;1011</td>
<td align="center">27</td>
<td align="center">1B</td>
<td align="center">ESC</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^[ or ESC</td>
<td>Escapi</td>
</tr>
<tr>
<td>0001&nbsp;1100</td>
<td align="center">28</td>
<td align="center">1C</td>
<td align="center">FS</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^\</td>
<td>File Separator</td>
</tr>
<tr>
<td>0001&nbsp;1101</td>
<td align="center">29</td>
<td align="center">1D</td>
<td align="center">GS</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^]</td>
<td>Group Separator</td>
</tr>
<tr>
<td>0001&nbsp;1110</td>
<td align="center">30</td>
<td align="center">1I</td>
<td align="center">RS</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^^</td>
<td>Record Separator</td>
</tr>
<tr>
<td>0001&nbsp;1111</td>
<td align="center">31</td>
<td align="center">1F</td>
<td align="center">US</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^_</td>
<td>Unit Separator</td>
</tr>
<tr>
<td>0111&nbsp;1111</td>
<td align="center">127</td>
<td align="center">7F</td>
<td align="center">DE EL</td>
<td align="center" style="font-family:'lluïda sans unicode','arial unicode ms'">?</td>
<td>^?, <a href="/w/index.php?title=Delete_key&amp;action=edit&amp;redlink=1" class="new" title="Delete key (encara no existeix)">Delete</a>, or <a href="/w/index.php?title=Backspace&amp;action=edit&amp;redlink=1" class="new" title="Backspace (encara no existeix)">Backspace</a></td>
<td>Delete</td>
</tr>
</tbody></table>
		</div>
		
		<h5><a href="javascript:hideshow(document.getElementById('adiv5'))">Els caràcters imprimimbles ASCII</a></h5>
		<div id="adiv5" style="display: none">
		<p align="justify">El codi del caràcter espai, designa a l'espai entre paraules, i es produeix normalment per la barra espaciadora d'un teclat. Els codis del 33 al 126 es coneixen com a caràcters imprimibles, i representen lletres, dígits, signes de puntuació i diversos símbols.

L'ASCII de set bits proporciona set caràcters "nacionals" i, si la combinació concreta de maquinari i programari ho permet, pot utilitzar combinacions de tecles per simular altres caràcters internacionals: en aquests casos un backspace pot precedir a un accent obert o greu (en els estàndards britànic i americà, però només en aquests estàndards, es diu també "opening single quotation mark"), una titlla o una "marca de respiració".</p><br />

<table border="0" cellspacing="1" cellpadding="0">
<tbody><tr valign="top">
<td>
<table border="2" style="padding: 0.5em; border: 1px #aaa solid; border-collapse: collapse;background:#F9F9F9" cellpadding="4">
<tbody><tr valign="bottom" style="background:#F2F2F2">
<th>Binari</th>
<th>Dec</th>
<th>Hex</th>
<th>Representació</th>
</tr>
<tr>
<td>0010&nbsp;0000</td>
<td align="center">32</td>
<td align="center">20</td>
<td align="center"><a href="/wiki/Espai_tipogr%C3%A0fic" title="Espai tipogràfic">espai</a> (&nbsp;)</td>
</tr>
<tr>
<td>0010&nbsp;0001</td>
<td align="center">33</td>
<td align="center">21</td>
<td align="center"><a href="/wiki/Signe_d%27exclamaci%C3%B3" title="Signe d'exclamació">!</a></td>
</tr>
<tr>
<td>0010&nbsp;0010</td>
<td align="center">34</td>
<td align="center">22</td>
<td align="center"><a href="/wiki/Cometes_(tipografia)" title="Cometes (tipografia)">"</a></td>
</tr>
<tr>
<td>0010&nbsp;0011</td>
<td align="center">35</td>
<td align="center">23</td>
<td align="center"><a href="/wiki/Quadradet" title="Quadradet">#</a></td>
</tr>
<tr>
<td>0010&nbsp;0100</td>
<td align="center">36</td>
<td align="center">24</td>
<td align="center"><a href="/wiki/$" title="$">$</a></td>
</tr>
<tr>
<td>0010&nbsp;0101</td>
<td align="center">37</td>
<td align="center">25</td>
<td align="center"><a href="/wiki/Percentatge" title="Percentatge">%</a></td>
</tr>
<tr>
<td>0010&nbsp;0110</td>
<td align="center">38</td>
<td align="center">26</td>
<td align="center"><a href="/wiki/%26" title="&amp;" class="mw-redirect">&amp;</a></td>
</tr>
<tr>
<td>0010&nbsp;0111</td>
<td align="center">39</td>
<td align="center">27</td>
<td align="center"><a href="/wiki/Ap%C3%B2strof" title="Apòstrof">'</a></td>
</tr>
<tr>
<td>0010&nbsp;1000</td>
<td align="center">40</td>
<td align="center">28</td>
<td align="center"><a href="/wiki/Par%C3%A8ntesi" title="Parèntesi">(</a></td>
</tr>
<tr>
<td>0010&nbsp;1001</td>
<td align="center">41</td>
<td align="center">29</td>
<td align="center"><a href="/wiki/Par%C3%A8ntesi" title="Parèntesi">)</a></td>
</tr>
<tr>
<td>0010&nbsp;1010</td>
<td align="center">42</td>
<td align="center">2A</td>
<td align="center"><a href="/wiki/Asterisc" title="Asterisc">*</a></td>
</tr>
<tr>
<td>0010&nbsp;1011</td>
<td align="center">43</td>
<td align="center">2B</td>
<td align="center"><a href="/wiki/Signe_de_sumar" title="Signe de sumar">+</a></td>
</tr>
<tr>
<td>0010&nbsp;1100</td>
<td align="center">44</td>
<td align="center">2C</td>
<td align="center"><a href="/wiki/Coma_(puntuaci%C3%B3)" title="Coma (puntuació)">,</a></td>
</tr>
<tr>
<td>0010&nbsp;1101</td>
<td align="center">45</td>
<td align="center">2D</td>
<td align="center"><a href="/wiki/Guionet" title="Guionet">-</a></td>
</tr>
<tr>
<td>0010&nbsp;1110</td>
<td align="center">46</td>
<td align="center">2E</td>
<td align="center"><a href="/wiki/Punt_(puntuaci%C3%B3)" title="Punt (puntuació)" class="mw-redirect">.</a></td>
</tr>
<tr>
<td>0010&nbsp;1111</td>
<td align="center">47</td>
<td align="center">2F</td>
<td align="center"><a href="/wiki/Barra_obliqua" title="Barra obliqua">/</a></td>
</tr>
<tr>
<td>0011&nbsp;0000</td>
<td align="center">48</td>
<td align="center">30</td>
<td align="center"><a href="/wiki/Nombre_zero" title="Nombre zero" class="mw-redirect">0</a></td>
</tr>
<tr>
<td>0011&nbsp;0001</td>
<td align="center">49</td>
<td align="center">31</td>
<td align="center"><a href="/wiki/Nombre_u" title="Nombre u" class="mw-redirect">1</a></td>
</tr>
<tr>
<td>0011&nbsp;0010</td>
<td align="center">50</td>
<td align="center">32</td>
<td align="center"><a href="/wiki/Dos" title="Dos">2</a></td>
</tr>
<tr>
<td>0011&nbsp;0011</td>
<td align="center">51</td>
<td align="center">33</td>
<td align="center"><a href="/wiki/Nombre_tres" title="Nombre tres" class="mw-redirect">3</a></td>
</tr>
<tr>
<td>0011&nbsp;0100</td>
<td align="center">52</td>
<td align="center">34</td>
<td align="center"><a href="/wiki/Quatre" title="Quatre">4</a></td>
</tr>
<tr>
<td>0011&nbsp;0101</td>
<td align="center">53</td>
<td align="center">35</td>
<td align="center"><a href="/wiki/Cinc" title="Cinc">5</a></td>
</tr>
<tr>
<td>0011&nbsp;0110</td>
<td align="center">54</td>
<td align="center">36</td>
<td align="center"><a href="/wiki/Sis" title="Sis">6</a></td>
</tr>
<tr>
<td>0011&nbsp;0111</td>
<td align="center">55</td>
<td align="center">37</td>
<td align="center"><a href="/wiki/Nombre_set" title="Nombre set">7</a></td>
</tr>
<tr>
<td>0011&nbsp;1000</td>
<td align="center">56</td>
<td align="center">38</td>
<td align="center"><a href="/wiki/Vuit" title="Vuit">8</a></td>
</tr>
<tr>
<td>0011&nbsp;1001</td>
<td align="center">57</td>
<td align="center">39</td>
<td align="center"><a href="/wiki/Nombre_nou" title="Nombre nou">9</a></td>
</tr>
<tr>
<td>0011&nbsp;1010</td>
<td align="center">58</td>
<td align="center">3A</td>
<td align="center"><a href="/wiki/Dos_punts" title="Dos punts">:</a></td>
</tr>
<tr>
<td>0011&nbsp;1011</td>
<td align="center">59</td>
<td align="center">3B</td>
<td align="center"><a href="/wiki/Punt_i_coma" title="Punt i coma">;</a></td>
</tr>
<tr>
<td>0011&nbsp;1100</td>
<td align="center">60</td>
<td align="center">3C</td>
<td align="center"><a href="/wiki/Clau_angular" title="Clau angular">&lt;</a></td>
</tr>
<tr>
<td>0011&nbsp;1101</td>
<td align="center">61</td>
<td align="center">3D</td>
<td align="center"><a href="/wiki/Signe_igual" title="Signe igual">=</a></td>
</tr>
<tr>
<td>0011&nbsp;1110</td>
<td align="center">62</td>
<td align="center">3E</td>
<td align="center"><a href="/wiki/Clau_angular" title="Clau angular">&gt;</a></td>
</tr>
<tr>
<td>0011&nbsp;1111</td>
<td align="center">63</td>
<td align="center">3F</td>
<td align="center"><a href="/wiki/Signe_d%27interrogaci%C3%B3" title="Signe d'interrogació">?</a></td>
</tr>
</tbody></table>
</td>
<td>&nbsp;</td>
<td>
<table border="2" style="padding: 0.5em; border: 1px #aaa solid; border-collapse: collapse;background:#F9F9F9" cellpadding="4">
<tbody><tr valign="bottom" style="background:#F1F2F2">
<th>Binari</th>
<th>Dec</th>
<th>Hex</th>
<th>Representació</th>
</tr>
<tr>
<td>0100&nbsp;0000</td>
<td align="center">64</td>
<td align="center">40</td>
<td align="center"><a href="/wiki/@" title="@">@</a></td>
</tr>
<tr>
<td>0100&nbsp;0001</td>
<td align="center">65</td>
<td align="center">41</td>
<td align="center"><a href="/wiki/A" title="A">A</a></td>
</tr>
<tr>
<td>0100&nbsp;0010</td>
<td align="center">66</td>
<td align="center">42</td>
<td align="center"><a href="/wiki/B" title="B">B</a></td>
</tr>
<tr>
<td>0100&nbsp;0011</td>
<td align="center">67</td>
<td align="center">43</td>
<td align="center"><a href="/wiki/C" title="C">C</a></td>
</tr>
<tr>
<td>0100&nbsp;0100</td>
<td align="center">68</td>
<td align="center">44</td>
<td align="center"><a href="/wiki/D" title="D">D</a></td>
</tr>
<tr>
<td>0100&nbsp;0101</td>
<td align="center">69</td>
<td align="center">45</td>
<td align="center"><a href="/wiki/E" title="E">E</a></td>
</tr>
<tr>
<td>0100&nbsp;0110</td>
<td align="center">70</td>
<td align="center">46</td>
<td align="center"><a href="/wiki/F" title="F">F</a></td>
</tr>
<tr>
<td>0100&nbsp;0111</td>
<td align="center">71</td>
<td align="center">47</td>
<td align="center"><a href="/wiki/G" title="G">G</a></td>
</tr>
<tr>
<td>0100&nbsp;1000</td>
<td align="center">72</td>
<td align="center">48</td>
<td align="center"><a href="/wiki/H" title="H">H</a></td>
</tr>
<tr>
<td>0100&nbsp;1001</td>
<td align="center">73</td>
<td align="center">49</td>
<td align="center"><a href="/wiki/I" title="I">I</a></td>
</tr>
<tr>
<td>0100&nbsp;1010</td>
<td align="center">74</td>
<td align="center">4A</td>
<td align="center"><a href="/wiki/J" title="J">J</a></td>
</tr>
<tr>
<td>0100&nbsp;1011</td>
<td align="center">75</td>
<td align="center">4B</td>
<td align="center"><a href="/wiki/K" title="K">K</a></td>
</tr>
<tr>
<td>0100&nbsp;1100</td>
<td align="center">76</td>
<td align="center">4C</td>
<td align="center"><a href="/wiki/L" title="L">L</a></td>
</tr>
<tr>
<td>0100&nbsp;1101</td>
<td align="center">77</td>
<td align="center">4D</td>
<td align="center"><a href="/wiki/M" title="M">M</a></td>
</tr>
<tr>
<td>0100&nbsp;1110</td>
<td align="center">78</td>
<td align="center">4E</td>
<td align="center"><a href="/wiki/N" title="N">N</a></td>
</tr>
<tr>
<td>0100&nbsp;1111</td>
<td align="center">79</td>
<td align="center">4F</td>
<td align="center"><a href="/wiki/O" title="O">O</a></td>
</tr>
<tr>
<td>0101&nbsp;0000</td>
<td align="center">80</td>
<td align="center">50</td>
<td align="center"><a href="/wiki/P" title="P">P</a></td>
</tr>
<tr>
<td>0101&nbsp;0001</td>
<td align="center">81</td>
<td align="center">51</td>
<td align="center"><a href="/wiki/Q" title="Q">Q</a></td>
</tr>
<tr>
<td>0101&nbsp;0010</td>
<td align="center">82</td>
<td align="center">52</td>
<td align="center"><a href="/wiki/Erra" title="Erra" class="mw-redirect">R</a></td>
</tr>
<tr>
<td>0101&nbsp;0011</td>
<td align="center">83</td>
<td align="center">53</td>
<td align="center"><a href="/wiki/S" title="S">S</a></td>
</tr>
<tr>
<td>0101&nbsp;0100</td>
<td align="center">84</td>
<td align="center">54</td>
<td align="center"><a href="/wiki/T" title="T">T</a></td>
</tr>
<tr>
<td>0101&nbsp;0101</td>
<td align="center">85</td>
<td align="center">55</td>
<td align="center"><a href="/wiki/U" title="U">U</a></td>
</tr>
<tr>
<td>0101&nbsp;0110</td>
<td align="center">86</td>
<td align="center">56</td>
<td align="center"><a href="/wiki/V" title="V">V</a></td>
</tr>
<tr>
<td>0101&nbsp;0111</td>
<td align="center">87</td>
<td align="center">57</td>
<td align="center"><a href="/wiki/W" title="W">W</a></td>
</tr>
<tr>
<td>0101&nbsp;1000</td>
<td align="center">88</td>
<td align="center">58</td>
<td align="center"><a href="/wiki/X" title="X">X</a></td>
</tr>
<tr>
<td>0101&nbsp;1001</td>
<td align="center">89</td>
<td align="center">59</td>
<td align="center"><a href="/wiki/Y" title="Y">Y</a></td>
</tr>
<tr>
<td>0101&nbsp;1010</td>
<td align="center">90</td>
<td align="center">5A</td>
<td align="center"><a href="/wiki/Z" title="Z">Z</a></td>
</tr>
<tr>
<td>0101&nbsp;1011</td>
<td align="center">91</td>
<td align="center">5B</td>
<td align="center"><a href="/wiki/Par%C3%A8ntesi" title="Parèntesi">[</a></td>
</tr>
<tr>
<td>0101&nbsp;1100</td>
<td align="center">92</td>
<td align="center">5C</td>
<td align="center"><a href="/wiki/Barra_inversa" title="Barra inversa" class="mw-redirect">\</a></td>
</tr>
<tr>
<td>0101&nbsp;1101</td>
<td align="center">93</td>
<td align="center">5D</td>
<td align="center"><a href="/wiki/Par%C3%A8ntesi" title="Parèntesi">]</a></td>
</tr>
<tr>
<td>0101&nbsp;1110</td>
<td align="center">94</td>
<td align="center">5E</td>
<td align="center"><a href="/wiki/Accent_circumflex" title="Accent circumflex">^</a></td>
</tr>
<tr>
<td>0101&nbsp;1111</td>
<td align="center">95</td>
<td align="center">5F</td>
<td align="center"><a href="/w/index.php?title=Gui%C3%B3_baix&amp;action=edit&amp;redlink=1" class="new" title="Guió baix (encara no existeix)">_</a></td>
</tr>
</tbody></table>
</td>
<td>&nbsp;</td>
<td>
<table border="2" style="padding: 0.5em; border: 1px #aaa solid; border-collapse: collapse;background:#F9F9F9" cellpadding="4">
<tbody><tr valign="bottom" style="background:#F1F2F2">
<th>Binari</th>
<th>Dec</th>
<th>Hex</th>
<th>Representació</th>
</tr>
<tr>
<td>0110&nbsp;0000</td>
<td align="center">96</td>
<td align="center">60</td>
<td align="center"><a href="/wiki/Accent_greu" title="Accent greu">`</a></td>
</tr>
<tr>
<td>0110&nbsp;0001</td>
<td align="center">97</td>
<td align="center">61</td>
<td align="center"><a href="/wiki/A" title="A">a</a></td>
</tr>
<tr>
<td>0110&nbsp;0010</td>
<td align="center">98</td>
<td align="center">62</td>
<td align="center"><a href="/wiki/B" title="B">b</a></td>
</tr>
<tr>
<td>0110&nbsp;0011</td>
<td align="center">99</td>
<td align="center">63</td>
<td align="center"><a href="/wiki/C" title="C">c</a></td>
</tr>
<tr>
<td>0110&nbsp;0100</td>
<td align="center">100</td>
<td align="center">64</td>
<td align="center"><a href="/wiki/D" title="D">d</a></td>
</tr>
<tr>
<td>0110&nbsp;0101</td>
<td align="center">101</td>
<td align="center">65</td>
<td align="center"><a href="/wiki/E" title="E">e</a></td>
</tr>
<tr>
<td>0110&nbsp;0110</td>
<td align="center">102</td>
<td align="center">66</td>
<td align="center"><a href="/wiki/F" title="F">f</a></td>
</tr>
<tr>
<td>0110&nbsp;0111</td>
<td align="center">103</td>
<td align="center">67</td>
<td align="center"><a href="/wiki/G" title="G">g</a></td>
</tr>
<tr>
<td>0110&nbsp;1000</td>
<td align="center">104</td>
<td align="center">68</td>
<td align="center"><a href="/wiki/H" title="H">h</a></td>
</tr>
<tr>
<td>0110&nbsp;1001</td>
<td align="center">105</td>
<td align="center">69</td>
<td align="center"><a href="/wiki/I" title="I">i</a></td>
</tr>
<tr>
<td>0110&nbsp;1010</td>
<td align="center">106</td>
<td align="center">6A</td>
<td align="center"><a href="/wiki/J" title="J">j</a></td>
</tr>
<tr>
<td>0110&nbsp;1011</td>
<td align="center">107</td>
<td align="center">6B</td>
<td align="center"><a href="/wiki/K" title="K">k</a></td>
</tr>
<tr>
<td>0110&nbsp;1100</td>
<td align="center">108</td>
<td align="center">6C</td>
<td align="center"><a href="/wiki/L" title="L">l</a></td>
</tr>
<tr>
<td>0110&nbsp;1101</td>
<td align="center">109</td>
<td align="center">6D</td>
<td align="center"><a href="/wiki/M" title="M">m</a></td>
</tr>
<tr>
<td>0110&nbsp;1110</td>
<td align="center">110</td>
<td align="center">6E</td>
<td align="center"><a href="/wiki/N" title="N">n</a></td>
</tr>
<tr>
<td>0110&nbsp;1111</td>
<td align="center">111</td>
<td align="center">6F</td>
<td align="center"><a href="/wiki/O" title="O">o</a></td>
</tr>
<tr>
<td>0111&nbsp;0000</td>
<td align="center">112</td>
<td align="center">70</td>
<td align="center"><a href="/wiki/P" title="P">p</a></td>
</tr>
<tr>
<td>0111&nbsp;0001</td>
<td align="center">113</td>
<td align="center">71</td>
<td align="center"><a href="/wiki/Q" title="Q">q</a></td>
</tr>
<tr>
<td>0111&nbsp;0010</td>
<td align="center">114</td>
<td align="center">72</td>
<td align="center"><a href="/wiki/Erra" title="Erra" class="mw-redirect">r</a></td>
</tr>
<tr>
<td>0111&nbsp;0011</td>
<td align="center">115</td>
<td align="center">73</td>
<td align="center"><a href="/wiki/S" title="S">s</a></td>
</tr>
<tr>
<td>0111&nbsp;0100</td>
<td align="center">116</td>
<td align="center">74</td>
<td align="center"><a href="/wiki/T" title="T">t</a></td>
</tr>
<tr>
<td>0111&nbsp;0101</td>
<td align="center">117</td>
<td align="center">75</td>
<td align="center"><a href="/wiki/U" title="U">u</a></td>
</tr>
<tr>
<td>0111&nbsp;0110</td>
<td align="center">118</td>
<td align="center">76</td>
<td align="center"><a href="/wiki/V" title="V">v</a></td>
</tr>
<tr>
<td>0111&nbsp;0111</td>
<td align="center">119</td>
<td align="center">77</td>
<td align="center"><a href="/wiki/W" title="W">w</a></td>
</tr>
<tr>
<td>0111&nbsp;1000</td>
<td align="center">120</td>
<td align="center">78</td>
<td align="center"><a href="/wiki/X" title="X">x</a></td>
</tr>
<tr>
<td>0111&nbsp;1001</td>
<td align="center">121</td>
<td align="center">79</td>
<td align="center"><a href="/wiki/Y" title="Y">y</a></td>
</tr>
<tr>
<td>0111&nbsp;1010</td>
<td align="center">122</td>
<td align="center">7A</td>
<td align="center"><a href="/wiki/Z" title="Z">z</a></td>
</tr>
<tr>
<td>0111&nbsp;1011</td>
<td align="center">123</td>
<td align="center">7B</td>
<td align="center"><a href="/wiki/Par%C3%A8ntesi" title="Parèntesi">{</a></td>
</tr>
<tr>
<td>0111&nbsp;1100</td>
<td align="center">124</td>
<td align="center">7C</td>
<td align="center"><a href="/wiki/Pleca" title="Pleca" class="mw-redirect">|</a></td>
</tr>
<tr>
<td>0111&nbsp;1101</td>
<td align="center">125</td>
<td align="center">7D</td>
<td align="center"><a href="/wiki/Par%C3%A8ntesi" title="Parèntesi">}</a></td>
</tr>
<tr>
<td>0111&nbsp;1110</td>
<td align="center">126</td>
<td align="center">7E</td>
<td align="center"><a href="/wiki/Titlla" title="Titlla">~</a></td>
</tr>
</tbody></table>
</td>
</tr>
</tbody></table>
		
		</div>
		
		</div>	
	</div>
	<br/>
    <?php
    include("functions.php");
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
			//ascii
			if((int)$answer == $value){
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
			//caracter
			if($answer == chr($value)){
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
		$value = rand(32, 127);
		$time = "Temps: 00:00:00";
		$fails = 0;
	}
	if($result == false){
		if ($type == 1){
			echo "<form action='asciiex.php' method='post'>";
			echo "<h1>Converteix el següent caràcter al seu corresponent codi ASCII:</h1><br/><br/><br/><br/>";
			echo "<table border='0' width='100%' align='center' style='text-align:center'><tr>";	
			echo "<td width='50%' value='".$value."' style='font-size:48px;' align='center'>".chr($value)."</td><td width='50%' id='answercell'><input name='answer' type='text' size='8' maxlength='8' style='font-size:48px;'></td>";	
			echo "</tr><tr><td colspan='2' align='right'>&nbsp;</td><tr><td colspan='2' align='right'><input type='Submit' value='Corregeix'></td></tr></table>";	
			echo "<input type='hidden' name='type' value='".$type."'>";	
			echo "<input type='hidden' name='value' value='".$value."'>";
			echo "<input type='hidden' name='fails' value='".$fails."'>";
			echo "<input id='time' type='hidden' name='time' value='".$time."'>";
			echo "</form>";
		}else{
			echo "<form action='asciiex.php' method='post'>";
			echo "<h1>Converteix el següent codi ASCII al seu caràcter corresponent:</h1><br/><br/><br/><br/>";
			echo "<table border='0' width='100%' align='center' style='text-align:center'><tr>";	
			echo "<td width='50%' value='".$value."' style='font-size:48px;' align='center'>".$value."</td><td width='50%' id='answercell'><input name='answer' type='text' size='8' maxlength='8' style='font-size:48px;'></td>";	
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