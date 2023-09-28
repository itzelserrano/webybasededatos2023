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
  $("#boton1").click(function (e){
    $("#huevo").attr("src", "imagenes/gallofeliz.jfif")
    $("#boton2").hide();
    a++
    if(a >= 2){
      $("#huevo").attr("src", "imagenes/gallogallina.jfif")
    }
    if(a >= 3){
      $("#huevo").attr("src", "imagenes/gallinero.jpg")
    }
    if(a >= 4){
      $("#huevo").attr("src", "imagenes/viejo2.jfif")
    }
    if(a >= 5){
      $("#huevo").attr("src", "imagenes/atadud.jfif")
    }
  })

  
  $("#boton2").click(function (e){
    $("#huevo").attr("src", "imagenes/murido.jfif")
    $("#boton1").hide();
    a++
     if(a >= 2){
      $("#huevo").attr("src", "imagenes/olla.jfif")
    }
    if(a >= 3){
      $("#huevo").attr("src", "imagenes/kfc.jpg")
    }
    if(a >= 4){
      $("#huevo").attr("src", "imagenes/coca.jpg")
    }
    if(a >= 5){
      $("#huevo").attr("src", "imagenes/huesoo.jfif")
    }
   })
 
  
})