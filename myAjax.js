function change_country(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","ajax.php?country="+document.getElementById("countrySelect").value,false);
  xmlhttp.send(null);
  document.getElementById('stateSelect').innerHTML = xmlhttp.responseText;
}


function change_state(){
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.open("GET","ajax.php?state="+document.getElementById("stateSelect").value,false);
  xmlhttp.send(null);
  document.getElementById('citySelect').innerHTML = xmlhttp.responseText;
}
