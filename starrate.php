<html>
<head>
<script>
freezevar = false;
function rate(here)
{
var opa = 1; 
if( freezevar == true){
return ;
}
	else{
	var a = document.getElementById(here.id);
	b = new Array();
	b.push(a);
	while (a != undefined )
	{
	b.push(a);
	//a.src = "simlie2.jpg";
	a.style.opacity = opa;
	a = a.previousElementSibling;

	}
	}
}
function remrate(idof)
{
if( freezevar == true){
return ;
}
	else{
	opa = 0.5; //variable that stores the opacity of the iamges
	var e = document.getElementById(idof.id);
	//e.src = "simlie.png";
	e.style.opacity = opa;
	f = new Array();
	f.push(e);
	while (e != undefined ){
	f.push(e);
	//e.src = "simlie.png";
	e.style.opacity = opa;
	e = e.previousElementSibling;
	}
	}
}
function freezeRate()
{
freezevar = true;
}
</script>
</head>
<body>
<div>
<img style = "cursor: pointer;opacity:0.5;" name = "1" width = "50" height = "50" src = "simlie.png" id = "star1" onmouseover = rate(this) onmouseout = remrate(this) onclick = freezeRate() />
<img style = "cursor: pointer;opacity:0.5;" name = "2" width = "50" height = "50" src = "simlie.png" id = "star2" onmouseover = rate(this) onmouseout = remrate(this) onclick = freezeRate() />
<img style = "cursor: pointer;opacity:0.5;" name = "3" width = "50" height = "50" src = "simlie.png" id = "star3" onmouseover = rate(this) onmouseout = remrate(this) onclick = freezeRate() />
<img style = "cursor: pointer;opacity:0.5;" name = "4" width = "50" height = "50" src = "simlie.png" id = "star4" onmouseover = rate(this) onmouseout = remrate(this) onclick = freezeRate() />
<img style = "cursor: pointer;opacity:0.5;" name = "5" width = "50" height = "50" src = "simlie.png" id = "star5" onmouseover = rate(this) onmouseout = remrate(this) onclick = freezeRate() />
<div>
</body>
</html>