$(document).ready(function(){

	 $.ajax({
      type: "POST",
      url: "Slider/cargar_slider",
      data: {
        
      }
    }).done(function(n) {
     //$("#dinamico").html(n);
         
         $(".natalia").each(function(){
             
             var ruta = $(this).attr("data-setbg");

        var comparacion = ruta.substr(0,4)

        if(comparacion == "http"){

        }else{

$(this).attr("data-setbg","../administrador/"+ruta+"");
            
           



            
         

        }
         });

     
      
      

      

     

 
      
      
    }).fail(function(n, t, i) {
      //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)

      



    })

});