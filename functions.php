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

<?php

$morsedict = array(
" " => "/",
"a" => ".-",
"b" => "-...",
"c" => "-.-.",
"d" => "-..",
"e" => ".",
"f" => "..-.",
"g" => "--.",
"h" => "....",
"i" => "..",
"j" => ".---",
"k" => "-.-",
"l" => ".-..",
"m" => "--",
"n" => "-.",
"ñ" => "--.--",
"o" => "---",
"p" => ".--.",
"q" => "--.-",
"r" => ".-.",
"s" => "...",
"t" => "-",
"u" => "..-",
"v" => "...-",
"w" => ".--",
"x" => "-..-",
"y" => "-.--",
"z" => "--..",
"1" => ".----",
"2" => "..---",
"3" => "...--",
"4" => "....-",
"5" => ".....",
"6" => "-....",
"7" => "--...",
"8" => "---..",
"9" => "----.",
"0" => "-----",
"." => ".-.-.-",
"," => "--..--",
"?" => "..--..",
"=" => "-...-",
"-" => "-....-",
"/" => "-..-."
);

function string_to_ascii($string){
    $ascii = NULL;
 
    for ($i = 0; $i < strlen($string); $i++) 
    { 
    	$ascii += ord($string[$i]); 
    }
 
    return($ascii);
}

function string_to_morse($string, $morsedict){
    $morse = NULL;
 
    for ($i = 0; $i < strlen($string); $i++) 
    { 
    	$morse += $morsedict($string[$i]); 
    }
 
    return($morse);
}

?>