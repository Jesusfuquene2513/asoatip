$(document).ready(function(){



    
    
    
    
    $.ajax({
      type: "POST",
      url: "Blog/consultar_albumnes",
      data: {
        
      }
    }).done(function(n) {
      $("#filtros").html(n);
        
       
        
        $(".filtro").click(function(){
            var id = $(this).attr("id");
            
             $.ajax({
      type: "POST",
      url: "Blog/consultar_galeria",
      data: {
        album: id
      }
    }).done(function(n) {
      $("#galeria-dinamica").html(n);


     
         
         



      
         
         



       

    

	

     

 
      
      
    }).fail(function(n, t, i) {
      //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)

      



    })
            
            
        });
        
        
         $(".filtro").each(function(index){
            
            if(index == 0){
                
                $(this).click();
               
               }
            
        });


     



      
         
         



       

    

	

     

 
      
      
    }).fail(function(n, t, i) {
      //$("#carrusel-dinamico").html("The following error occured: " + t + " " + i)

      



    })
    
    
    
    

});