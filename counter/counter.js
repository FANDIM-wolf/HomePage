  var button = document.getElementById("button");
  var buttonD = document.getElementById("buttonD");
  var i = 0; // начальное значение
  
  button.addEventListener('click', function(e) {
  i = i + 20;
  document.getElementById("text").innerHTML = i;
  document.getElementById("block").style.marginLeft = i+"px";
  });
  buttonD.addEventListener('click', function(e) {
  i = i + 20;
  document.getElementById("text").innerHTML = i;
  document.getElementById("block").style.marginTop = i+"px";
  });