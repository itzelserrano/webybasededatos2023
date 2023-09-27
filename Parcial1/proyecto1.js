$(document).ready(function (){
  var valor_dado = 0, a=0;

  $("#boton").click(function (e){
      valor_dado++;
    if(valor_dado >= 10){
      $("#huevo").attr("src", "imagenes/pollo.jpg")
      
    }
     if(valor_dado >= 20){
      $("#huevo").attr("src", "imagenes/gallo.jpg")
    }
    // if(valor_dado >= 30){
    //   $("#huevo").attr("src", "imagenes/kfc.jpg")
    // }
    if(valor_dado == 25){
      $("#boton").hide();
      $("#boton1").attr("style", "visibility", "visible")
      $("#boton2").attr("style", "visibility", "visible")
    }
    

      $("#numero").html(valor_dado)
  })
  $("#boton2").click(function (e){
    $("#huevo").attr("src", "imagenes/kfc.jpg")
    $("#boton1").hide();
    a++
    if(a >= 2){
      $("#huevo").attr("src", "imagenes/coca.jpg")
    }
  })
  $("#boton1").click(function (e){
    $("#huevo").attr("src", "imagenes/gallinero.jpg")
    $("#boton2").hide();
  })
  
})