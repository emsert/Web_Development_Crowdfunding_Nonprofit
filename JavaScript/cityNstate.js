

// Programmer: Enes Sert
function getPlace(valueOfZipCode){

    new Ajax.Request( "cityNstate.php",
    {
      method: "get",
      parameters: {zip:valueOfZipCode},
      onSuccess: displayCityState
    } );
}

function displayCityState(ajax){
      var result = ajax.responseText;
      var place = result.split(', ');

      $("city").value = place[0];
      $("state").value = place[1];
}
