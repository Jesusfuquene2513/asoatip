<?php
session_start();

defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this-> load->model("BlogModel");
        $this-> load-> helper(array('form','url'));
    }
	

	public function index()
	{
		$this->load->view('vistas/gallery');
	}

	public function cargar_publicaciones(){
		extract($_POST);
$resultado = $this -> BlogModel -> cargar_publicaciones($inferior , $superior);

foreach($resultado as $publicacion){

	echo '
<div class="col-md-6 col-lg-6 wow fadeInUp publicacion album" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;" id="'.$publicacion->album_id.'">
                    <div class="service-item rounded overflow-hidden" style="background:white">
                        <img class="img-fluid" src="'.$publicacion->portada.'" alt="">
                        <div class="position-relative p-4 pt-0">
                            <div class="service-icon">
                               <img src="http://localhost/fupdeco/plantilla_front/img/marca.png" style="width:90%">
                            </div>
                            <h4 class="mb-3" style="border-left:10px solid #e3221c; padding-left: 3px;
                             ">'.$publicacion ->nombre_album.'</h4>
                            <p style="text-align: justify; color:black">'.$publicacion ->contenido.'</p>
                          
                        </div>
                    </div>
                </div>
	';

	}
}


public function cargar_publicacion_unica(){
		extract($_POST);
$resultado = $this -> BlogModel -> cargar_publicacion_unica($id_param);

foreach($resultado as $publicacion){

	echo '
<div class="  mt-3 mb-3 p-4 publicacion album" style="float:left; cursor:pointer" id="'.$publicacion->album_id.'">
<div class="row card ">
<div class=" " id="blog-img">
<div class="card-body">
<img src="https://s3.amazonaws.com/elcomun/imagenes/1528219067.jpg" style="width:100%">		
</div>

</div>
<div class="" id="blog-contenido">
<div class="card-body">
<h4 style="text-decoration:underline; color:#242c5c">'.$publicacion->titulo.'</h4>	
<br>
<p style="color:#242c5c">'.$publicacion->contenido.'</p>

<p style="font-weight:bolder; color:black">'.$publicacion->fecha_creacion.'</p>
</div>

</div>
</div>
</div>
	';

	}
}





public function total_publicaciones(){
$resultado = $this -> BlogModel -> total_publicaciones();
	
}


public function visor(){
	extract($_GET);
	//print_r($_GET);


	$instancia = new Blog();
	$peticion = $instancia -> galeria($album_id);
	
	
	
}

public function galeria($album_id){
	$_SESSION["album"]=$album_id;
	$this->load->view('vistas/visor2');
}

public function consultar_galeria(){
	extract($_POST);
	
	$resultado = $this -> BlogModel -> consultar_galeria($album);

	foreach($resultado as $elemento){
        
        $ruta = $elemento->portada;
                
                 
                 
                 if (strpos($ruta, 'http') !== false) {
                      $ruta_nueva = $ruta;
   
}else{
                  $ruta_nueva = "../administrador/".$ruta;    
                 }

		echo '<div class="col-lg-4 item-galeria card p-0" style="cursor:pointer; position:relative; float:left">
                    
                    
                    
     
                            <img src="'.$ruta_nueva.'" style="width:100%;" alt="">
                            <div class="nd" style="width:100%; margin:auto; height:50px; background:rgb(000,000,000,0.4); position:absolute; bottom:0; color:white; display:flex; align-items: center;"><span style="margin:auto; font-size:30px" id="boton-imagen"><a href="'.$ruta_nueva.'" data-lightbox="portfolio" style="color:white">+</a></span></div>
                               
                    
                    
                   
                  
                </div>';
        
       
        

	}
}


public function consultar_titulo(){
	extract($_POST);
	


	$resultado = $this -> BlogModel -> consultar_titulo($album);

	foreach($resultado as $titulo){

		echo $titulo ->nombre_album;

	}
}
    
    
    public function consultar_albumnes(){
        
        $resultado = $this -> BlogModel -> consultar_albumnes();
      foreach($resultado as $album){
           echo ' <li class="filtro btn btn-primary text-light" style="background:#3b5998; border:none" id="'.$album->album_id.'">'.$album->nombre_album.'</li>'; 
          
      }
        
    }

	
	
	

	
}
