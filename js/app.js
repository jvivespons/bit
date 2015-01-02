morsedict = {
" ": " / ",
"a": " . - ",
"b": " - . . . ",
"c": " - . - . ",
"d": " - . . ",
"e": " . ",
"f": " . . - . ",
"g": " - - . ",
"h": " . . . . ",
"i": " . . ",
"j": " . - - - ",
"k": " - . - ",
"l": " . - . . ",
"m": " - - ",
"n": " - . ",
"ñ": " - - . - - ",
"o": " - - - ",
"p": " . - - . ",
"q": " - - . - ",
"r": " . - . ",
"s": " . . . ",
"t": " - ",
"u": " . . - ",
"v": " . . . - ",
"w": " . - - ",
"x": " - . . - ",
"y": " - . - - ",
"z": " - - . . ",
"1": " . - - - - ",
"2": " . . - - - ",
"3": " . . . - - ",
"4": " . . . . - ",
"5": " . . . . . ",
"6": " - . . . . ",
"7": " - - . . . ",
"8": " - - - . . ",
"9": " - - - - . ",
"0": " - - - - - ",
".": " . - . - . - ",
",": " - - . . - - ",
"?": " . . - - . . ",
"=": " - . . . - ",
"-": " - . . . . - ",
"/": " - . . - . "
};


function showMorseRepresentation(text){
	var result = "";
	for(var i = 0; i < text.length; i++){
		result += morsedict[text[i]];
	}
	return result;
}

function showNaturalFromMorse(text){
	var result = "";
	var l = text.split("  ");
	for(var i = 0; i < l.length; i++){
		console.log(l[i]);
		if (l[i][0] != " "){
			var lletra = (_.invert(morsedict))[" " + l[i]];
		}else if(l[i][l[i].length - 1] != " "){
			var lletra = (_.invert(morsedict))[l[i] + " "];			
		}
		result += lletra;
	}
	return result;
}

function showBinariRepresentation(c){
var s = c.toString(2);
//var body = document.getElementById("content");
 	// Crea un elemento <table> y un elemento <tbody>
	var tabla   = document.createElement("table");
	tabla.setAttribute("align", "center");
	var tblBody = document.createElement("tbody");
 	// Crea las celdas

    // Crea las hileras de la tabla
    var hilera = document.createElement("tr");
    var celda = document.createElement("td");
    celda.innerHTML = String.fromCharCode(c);
    celda.style.textAlign = "center";
    celda.rowSpan = "2";
    hilera.appendChild(celda);
 	tblBody.appendChild(hilera);
 	
 	
    var celda = document.createElement("td");
    celda.innerHTML = s;
    celda.style.textAlign = "center";
    hilera.appendChild(celda);
 	tblBody.appendChild(hilera);

    var hilera = document.createElement("tr");
    var celda = document.createElement("td");
    var tablainterior = representOneByte(s);
   	celda.appendChild(tablainterior);
    celda.style.textAlign = "center";
    hilera.appendChild(celda);
 	tblBody.appendChild(hilera);
 	
 	

  	// posiciona el <tbody> debajo del elemento <table>
	tabla.appendChild(tblBody);
	// appends <table> into <body>
	//body.appendChild(tabla);
	// modifica el atributo "border" de la tabla y lo fija a "2";
	tabla.setAttribute("border", "0");
	tabla.cellPadding = "10px";
	tabla.cellSpacing = "10px";
	return tabla;
};

function representOneByte(bin){
 	// Crea un elemento <table> y un elemento <tbody>
	var tabla   = document.createElement("table");
	var tblBody = document.createElement("tbody");
 	// Crea las celdas

    	// Crea las hileras de la tabla
    	var hilera = document.createElement("tr");
 		for (var i = 0; i < 8; i++) {
      	// Crea un elemento <td> y un nodo de texto, haz que el nodo de
      	// texto sea el contenido de <td>, ubica el elemento <td> al final
      	// de la hilera de la tabla
      	var celda = document.createElement("td");
      	celda.innerHTML = "&nbsp;";
      	if(bin[i] == '1'){
			celda.style.backgroundColor = "#FFFFFF";
		}else{
			celda.style.backgroundColor = "#000000";
		}
      	hilera.appendChild(celda);
    	}
		// agrega la hilera al final de la tabla (al final del elemento tblbody)
 	   tblBody.appendChild(hilera);
 
  	// posiciona el <tbody> debajo del elemento <table>
	tabla.appendChild(tblBody);

	// modifica el atributo "border" de la tabla y lo fija a "2";
	tabla.setAttribute("border", "2");
	tabla.style.width="100%";
	return tabla;
}

function getAscii(){
	var s = $("#text").val();
	var result = "";
	for(var i = 0; i < s.length; i++){
		result += s.charCodeAt(i).toString() + " ";
	}
	$("#ascii").val(result);
};

function getBinary(){
	var body = document.getElementById("content");
 	// Crea un elemento <table> y un elemento <tbody>
	var tabla   = document.createElement("table");
	tabla.id = "result";
	var tblBody = document.createElement("tbody");
	var tempo;
	var s = $("#text").val();
	var result = "";
	for(var i = 0; i < s.length; i++){
		if (i == 0){
			var hilera = document.createElement("tr");
		}else if(i%3 == 0){
			tblBody.appendChild(hilera);
			var hilera = document.createElement("tr");
		}else{
		
		}
		tempo = showBinariRepresentation(s.charCodeAt(i));
		result += s.charCodeAt(i).toString(2) + " ";
	
    	var celda = document.createElement("td");
    	celda.appendChild(tempo);
    	celda.style.textAlign = "center";
    	hilera.appendChild(celda);	
	}
	if(hilera != null){
		tblBody.appendChild(hilera);
	}
	$("#binari").val(result);
	tabla.appendChild(tblBody);
	// appends <table> into <body>
	body.appendChild(tabla);
	// modifica el atributo "border" de la tabla y lo fija a "2";
	tabla.setAttribute("border", "0");
	tabla.cellPadding = "10px";
	tabla.style.width="100%";
};

function getConversion(){
	var result = document.getElementById("result");
	if (result != null){
		result.parentNode.removeChild(result);
	}
	getAscii();
	getBinary();
};
