<head>
<link rel="stylesheet" href="<?php echo URL; ?>public/css/style.css" />
</head>


<script type="text/javascript">
function wypelnij(wartosc) {
	document.form_reservation.elements.price.value = wartosc*document.form_reservation.elements.type_ticket.value;

	var x = document.getElementById("type_ticket");
	var i = x.selectedIndex;
	var z = x.options[i].text;

	
	document.form_reservation.elements.type_ticket_by_name.value = z;

//	var x = document.getElementById("mySelect");
    
   // document.getElementById("demo").innerHTML = x.options[i].text;
}


</script>
<p id="demo"></p>
<form name="form_reservation" action="http://localhost/mvc/service/reservationSave" method="post">

	<label>Ilość</label><input type="number" name="amount" value="1" onChange="wypelnij(value)" /><br />
    <label>Rodzaj ulgi:</label><select id="type_ticket" name="type_ticket" onChange="wypelnij(amount.value)">
		<option id="w1" name="Normalny" value="<?php echo $this->service['price_normal'];?>">Normalny</option>
		<option name="Ulgowy" value="<?php echo $this->service['price_reduced'];?>">Ulgowy</option>
	</select><br />
	<input name="type_ticket_by_name" type="text" value="Normalny" hidden></input>

	<input name="ID_service" type="text" value="<?php echo $this->service['IDservice']?>" hidden></input>

	<input name="spot_free" type="text" value="<?php echo $this->service['spot_free']?>" hidden></input>

	<input name="ID_user" type="text" value="<?php echo Session::get('IDuser')?>" hidden></input>
	
    <label>Cena</label><input type="text" name="price" value="<?php echo $this->service['price_normal']?>"> <br />
	<label>&nbsp;</label><input type="submit" />

</form>






