function oscuro(){
  var main = document.body;
  main.classList.toggle("modooscuro");
  //document.cookie = "oscuro=true"; -> Aquí mi intención es crear una cookie para que el modo oscuro persista, pero no lo he terminado.
}

//SLIDER:
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}