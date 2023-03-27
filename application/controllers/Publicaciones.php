<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Publicaciones extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this-> load->model("BlogModel");
		
        $this-> load-> helper(array('form','url'));
    }
	public function index()
	{
		$this->load->view('vistas/publicaciones');
	}
    
    
    public function cargar_publicaciones(){
       
        $resultado = $this -> BlogModel -> cargar_publicaciones_blog();
        
        foreach($resultado as $blog){
            
           echo ' <div class="col-lg-4 card">
                    
                  
                    
     <div class="blog-item">
                        <div class="bi-pic col-lg-12">
                            <img src="'.$blog->portada.'" style="width:100%; height:350px" alt="" id="'.$blog->tipo_elemento.'" class="imagen-archivo">
                        </div>
                        <div class="bi-text col-lg-12">
                            <div class="label pt-1 pb-1" style="background:rgb(59, 89, 152)">Publicación</div>
                            <h4>'.$blog->titulo.'</h4>
                            <ul>
                                <li>Publicado por <span>Asoatip</span></li>
                                <li>'.$blog->fecha_creacion.'</li>
                                
                            </ul>
                            <p>'.$blog->contenido.'</p>
                        </div>
                    </div>                
                    
                    
                   
                  
                </div>'; 
        }
        
    }

	
}
