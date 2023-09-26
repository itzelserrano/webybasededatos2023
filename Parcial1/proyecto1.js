$(document).ready(function (){
  var valor_dado = 10;

  $("#boton").click(function (e){
      valor_dado--;
    if(valor_dado <= 0){
      $("#huevo").attr("src", "imagenes/pollo.jpg")
      
    }
      $("#numero").html(valor_dado)
  })
})