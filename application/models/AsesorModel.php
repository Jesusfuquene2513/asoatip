<?php

class AsesorModel extends CI_model{

    public function __construct(){

        $this-> load ->database();
    }

   

    public function validar_login($usuario , $clave ){

 $this->db->select('*');
   

    $this->db->from('asesor');

    $this->db->where('usuario', $usuario);
      $this->db->where('clave', $clave);


    $query = $this->db->get();
 return $query-> result();
    



    }

    public function cargar_asesor($usuario , $clave ){

 $this->db->select('*');
   

    $this->db->from('asesor');

    $this->db->where('usuario', $usuario);
      $this->db->where('clave', $clave);


    $query = $this->db->get();
 return $query-> result();
    



    }


     public function cargar_eventos_asesor($usuario){

 $this->db->select('*');
   

    $this->db->from('agenda');

    $this->db->where('asesor', $usuario);
      


    $query = $this->db->get();
 return $query-> result();
    



    }

    public function actualizar_eventos_fechas_corridas($usuario){
       $this->db->select('*');
   

    $this->db->from('agenda');

     $this->db->where('asesor', $usuario);

    
      


    $query = $this->db->get();
 return $query-> result(); 
    }


    public function update_agenda_corrida($id_arg , $fecha){
 $this->db->select('faltantes');
   

    $this->db->from('agenda');

    $this->db->where('agenda_id', $id_arg);
      


    $query = $this->db->get();
 return $query-> result();

    }

    public function update_agenda_corrida_final($id_arg , $fecha){
 
//Arreglo con los datos a actualizar
$this->db->where('agenda_id', $id_arg);
    $this->db->set('faltantes', $fecha);
    return $this->db->update('agenda');

    }


    public function crear_asesor($asesor , $user , $password){

         return  $this-> db -> insert("asesor" , ["nombre_asesor" => $asesor,"usuario" => $user , "clave" => $password ]);


    }


    public function obtener_id_asesor($user){
$this->db->select('asesor_id');
   

    $this->db->from('asesor');

    $this->db->where('usuario', $user);
      


    $query = $this->db->get();
 return $query-> result();

    }


    public function crear_servios_asesor($asesor_identificador , $servicio_param){
 return  $this-> db -> insert("asesor_servicios" , ["asesor_id"=>$asesor_identificador , "servicio"=>$servicio_param]);

    }
    
    
	public function consultar_ultimo_registro_evento()
	{
		
		$query = $this->db->query("SELECT agenda_id FROM agenda");
		$registro = $query->num_rows();
		
		if ($registro == 0) {

			echo 0;
			
		}else{
			$this->db->select_max('agenda_id');
			$this->db->from('agenda');
			$query = $this->db->get();
			return $r=$query->result();	
		}
		
		
    }
    
	public function listar_eventos_asesor($asesor){
		$this->db->select('*');


		$this->db->from('agenda');

		$this->db->where('asesor', $asesor);





		$query = $this->db->get();
		return $query-> result(); 	
	}
	
	
	public function listar_clientes($asesor){
		$this->db->select('*');


		$this->db->from('reserva');

		$this->db->where('asesor', $asesor);





		$query = $this->db->get();
		return $query-> result(); 	
		
	}
	
	
	public function consultar_cliente_reserva($reserva){
		
		$this->db->select('*');


		$this->db->from('reserva');

		$this->db->where('reserva_id', $reserva);





		$query = $this->db->get();
		return $query-> result(); 	
		
		
	}

   public function listar_id_asesor($user){

      $this->db->select('asesor_id');


		$this->db->from('asesor');

		$this->db->where('usuario', $user);





		$query = $this->db->get();
		return $query-> result(); 

   }

   public function listar_servicios_asesor($asesor){

   

      $this->db->select('*');


		$this->db->from('asesor_servicios');

		$this->db->where('asesor_id', $asesor);





		$query = $this->db->get();
		return $query-> result(); 
   }


   public function cargar_asesor_reserva($programa){
      $this->db->select('*');


		$this->db->from('asesor_servicios');

		$this->db->where('servicio', $programa);
      $query = $this->db->get();
		return $query-> result(); 

   }


   public function info_Asesor($asesor_id){
      $this->db->select('*');


		$this->db->from('asesor');

		$this->db->where('asesor_id', $asesor_id);
      $query = $this->db->get();
		return $query-> result(); 
   }

 
public function consultar_asignaciones($asesor){
    $estado = 2;
    $this->db->select('*');


    $this->db->from('reserva');

    $this->db->where('encargado', $asesor);
    $this->db->where('estado', $estado);
  $query = $this->db->get();
    return $query-> result(); 
}


public function consultar_disponibilidad_horaria($fecha){
    $asesor = $_SESSION['asesor'];
    $this->db->select('hora');


    $this->db->from('agenda');

    $this->db->where('fecha_Asignada', $fecha);
    $this->db->where('asesor', $asesor);
  $query = $this->db->get();
    return $query-> result(); 
}


public function consultar_citas($asesor_arg){


   
    $this->db->select('*');


    $this->db->from('reserva');

    $this->db->where('encargado', $asesor_arg);
   
    
   
    $this->db->order_by("reserva_id", "asc");
  $query = $this->db->get();
    return $query-> result(); 
}


public function consultar_fecha($cod){
    $this->db->select('*');


    $this->db->from('reserva_final');

    $this->db->where('reserva_codigo', $cod);
    
   
  $query = $this->db->get();
    return $query-> result(); 

}


public function tomar_servicio_reportar($id_arg){
    $estado = 4;
    $this->db->where('reserva_id', $id_arg);
    $this->db->set('estado', $estado);
    return $this->db->update('reserva');
}


public function consultar_fecha_agendamiento($cod , $servicio){

    $this->db->select('*');


    $this->db->from('agenda');

    $this->db->where('evento_nombre', $servicio);
    $this->db->where('master', $cod);
    
   
  $query = $this->db->get();
    return $query-> result(); 

}
 

    

}