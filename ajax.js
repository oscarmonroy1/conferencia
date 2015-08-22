function Buscador(){var xmlhttp=false;try {xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");} catch (e) {try {xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");} catch (E) {xmlhttp = false;}}if (!xmlhttp && typeof XMLHttpRequest!='undefined') {xmlhttp = new XMLHttpRequest();}return xmlhttp;
}

function Buscar() {
	q = document.getElementById('valor').value;
	b = document.getElementById('resultados1');
	c = document.getElementById('resultados');
	ajax = Buscador();
	ajax.open("GET","procesar.php?q="+q);
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
			b.innerHTML = ajax.responseText;
		}
	}
	ajax.send(null)
}
function Editar(q) {

	c = document.getElementById('resultados');
	b = document.getElementById('resultados1');
	ajax = Buscador();
	ajax.open("GET","editar.php?q="+q);
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
			b.innerHTML = ajax.responseText;
		}
	}
	ajax.send(null)
}

function Respaldo(q,c) {
	c = document.getElementById('resultados');

	ajax = Buscador();
	ajax.open("GET","respaldo.php?id_alumno="+q);
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
			c.innerHTML = ajax.responseText;
		}
	}
	ajax.send(null)
}

function Confirmar(q) {
	c = document.getElementById('resultados');

	ajax = Buscador();
	ajax.open("GET","salida.php?id_alumno="+q);
	ajax.onreadystatechange=function() {
		if (ajax.readyState == 4) {
			c.innerHTML = ajax.responseText;
		}
	}
	ajax.send(null)
}

