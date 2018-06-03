function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
        x.className += " responsive";
    } else {
        x.className = "topnav";
    }
}


function result(wynik){
	if (wynik == 1)
	{
		alert("SUKCES");
	} 
	else
		alert("COŚ POSZŁO NIE TAK ;(")
	
}



