

//Programmer: Enes Sert
function showTime(){

	new Ajax.Request( "theMoment.php",
	{
		method: "get",
		onSuccess: displayTime
	}
	);
}

function displayTime(ajax){
	$("time").value = ajax.responseText;
}
