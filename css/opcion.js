
function cargarNuevaPagina(r) {
closeNav();

  var elementos = document.querySelectorAll(".Formulario");

  // Oculta todos los divs
  elementos.forEach(function (elemento) {
    elemento.style.display = "none";
  });


  
  var iframe = document.getElementById("miFrame");
  iframe.src = r;
  iframe.style.display = "block";
}
function closeNav() {
  document.getElementById("myNav").style.width = "0%";
}
