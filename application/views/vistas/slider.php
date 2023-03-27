<?php
 $resultado = $this -> SliderModel -> cargar_slider();
?>
       <section class="hero-section">
        <div class="hs-slider owl-carousel" id="dinamico">
          <?php
             foreach($resultado as $slider){
                 
                 $ruta = $slider->slider_imagen;
                
                 
                 
                 if (strpos($ruta, 'http') !== false) {
                      $ruta_nueva = $ruta;
   
}else{
                  $ruta_nueva = "../administrador/".$ruta;    
                 }
            
echo '	<div class="hs-item set-bg" data-setbg="'.$ruta_nueva.'">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2>'.$slider->encabezado.'</h2>
                                <p>'.$slider->cuerpo.'</p>
                                <a href="#" class="primary-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

 
             }
            ?>
         
            
        </div>
    </section>