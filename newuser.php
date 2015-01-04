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

if($_POST['username'] == "" || $_POST['realname'] == "" || $_POST['password'] == "" || $_POST['passwordrep'] == ""){
?>
<p>Has deixat en blanc un camp obligatori. Si us plau, torna a omplir el formulari</p>
<form action="newuser.php" method="post">
<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td colspan="2" align="center" bgcolor=#cccccc>Alta de Nou Usuari</td>
</tr>
<tr><td width="40%"> </td></tr>
<tr>
<td align="right">Nom real: </td>
<td ><input type="Text" name="realname" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">User Name: </td>
<td ><input type="Text" name="username" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">Password: </td>
<td><input type="password" name="password" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">Repeteix password: </td>
<td ><input type="password" name="passwordrep" size="50" maxlength="50"></td>
</tr>

<tr>
<BR>
<td colspan="2" align="center"><input type="Submit" value="Alta"></td>
</tr>
</table>
</form>
<?php
}else if($_POST['password'] != $_POST['passwordrep']){
?>
<p>Els passwords introduits no coincideixen. Si us plau, torna a omplir el formulari.</p>
<form action="newuser.php" method="post">
<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td colspan="2" align="center" bgcolor=#cccccc>Alta de Nou Usuari</td>
</tr>
<tr><td width="40%"> </td></tr>
<tr>
<td align="right">Nom real: </td>
<td ><input type="Text" name="realname" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">User Name: </td>
<td ><input type="Text" name="username" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">Password: </td>
<td><input type="password" name="password" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">Repeteix password: </td>
<td ><input type="password" name="passwordrep" size="50" maxlength="50"></td>
</tr>

<tr>
<BR>
<td colspan="2" align="center"><input type="Submit" value="Alta"></td>
</tr>
</table>
</form>
<?php
}else{
	$db_user= 'root';
	$db_pass= 'root';
	$db_name= 'elbit';
  
	$link = mysqli_connect('localhost', $db_user, $db_pass, $db_name);

	// Check connection
	if (!$link) {
    	die("Connection failed: " . mysqli_connect_error());
	}

	$sql = "SELECT * FROM USERS WHERE USERNAME = '".$_POST['username']."'";

	$result = mysqli_query($link, $sql);

	$numrows = mysqli_num_rows($result);
	
	if($numrows > 0){
		?>
<p>Aquest username ja existeix. Si us plau, torna a omplir el formulari.</p>
<form action="newuser.php" method="post">
<table align="center" width="100%" cellspacing="2" cellpadding="2" border="0">
<tr>
<td colspan="2" align="center" bgcolor=#cccccc>Alta de Nou Usuari</td>
</tr>
<tr><td width="40%"> </td></tr>
<tr>
<td align="right">Nom real: </td>
<td ><input type="Text" name="realname" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">User Name: </td>
<td ><input type="Text" name="username" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">Password: </td>
<td><input type="password" name="password" size="50" maxlength="50"></td>
</tr>
<tr>
<td align="right">Repeteix password: </td>
<td ><input type="password" name="passwordrep" size="50" maxlength="50"></td>
</tr>

<tr>
<BR>
<td colspan="2" align="center"><input type="Submit" value="Alta"></td>
</tr>
</table>
</form>
<?php
	}else{

		$sql = "INSERT INTO USERS (USERNAME, PASSWORD, REALNAME) VALUES ('".$_POST['username']."', '".$_POST['password']."', '".$_POST['realname']."')";
		$result = mysqli_query($link, $sql);

		if ($result){
			
			$_SESSION["username"] = $_POST["username"]; 
			?>
            <p align="right"><a href="login.php"><?php echo $_SESSION["username"]; ?></a> | <a href="logout.php">Sortir</a></p>
    	    <p>Usuari creat amb èxit.</p>
    	    <?php	
		}else{
			?>
    	    Alguna cosa no ha anat bé. Si us plau, torna a provar-ho més tard.
    	    <?php
		}
	}
	mysqli_close($link);
}
?>
<td height="100%" align="


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
