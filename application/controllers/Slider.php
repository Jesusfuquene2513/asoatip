<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

	public function __construct(){
        parent::__construct();
        $this-> load->model("SliderModel");
        $this-> load-> helper(array('form','url'));
    }
	

	


        


        public function cargar_slider(){

             $resultado = $this -> SliderModel -> cargar_slider();

             foreach($resultado as $slider){
            
echo '	<div class="hs-item set-bg natalia" data-setbg="https://cdn.pixabay.com/photo/2015/06/11/07/01/raramuris-805529_1280.jpg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="hs-text">
                                <h2>Photography Studio</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et<br /> dolore magna aliqua. Quis ipsum suspendisse ultrices
                                    gravida accumsan lacus vel facilisis.</p>
                                <a href="#" class="primary-btn">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>';

 
             }

        }

	
}