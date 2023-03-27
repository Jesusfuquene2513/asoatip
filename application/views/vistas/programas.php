<?php
$resultado = $this -> ServiciosModel -> consultar_servicios_cliente();
?>
<div class="container" style="padding-top:150px; display: table;">

  <?php
            $contacto = "573182525189";
            foreach($resultado as $row){
                
                $ruta = $row->portada_programa;
                
                 
                 
                 if (strpos($ruta, 'http') !== false) {
                      $ruta_nueva = $ruta;
   
}else{
                  $ruta_nueva = "../administrador/".$ruta;    
                 }


                 echo '<div class="col-lg-4 col-md-6 col-sm-6 col-12 mt-3 mb-3 p-1" style="float:left;">
                    
                  
                    
     <div class="blog-item pt-2 pb-2 bg-white card">
                        <div class="bi-pic col-lg-12">
                            <img src="'.$ruta_nueva.'" style="width:100%; height:300px" alt="" id="2" class="imagen-archivo">
                        </div>
                        <div class="bi-text col-lg-12">
                            <div class="label pt-1 pb-1" style="background:#E1306C">Programa</div>
                            <h4>'.$row->nombre_programa.'</h4>
                           
                            <p>'.$row->contenido_programa.'</p>
                            <br>
                            <button class="btn" style="background:#E1306C; color:white"><a href="https://api.whatsapp.com/send?phone='.$contacto.'" style="color:white" target="_blank">Solicitar</a></button>
                        </div>
                    </div>                
                    
                    
                   
                  
                </div>';
              }
                 ?>
</div>





    
            
            
            
            
            
        
    