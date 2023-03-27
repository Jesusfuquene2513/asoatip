<?php
if(isset($_SESSION['cliente'])){
    
}else{
   $_SESSION['cliente'] = 1;
    contadorvisitas();
  
}

// La variable $_SESSION['usuario'] es un ejemplo.

//Verifico el tiempo si esta seteado, caso contrario lo seteo.
if(isset($_SESSION['time'])){
 $tiempo = $_SESSION['time'];
}else{
 $tiempo = strtotime(date("Y-m-d H:i:s"));
}

$inactividad =100;   //Exprecion en segundos.

$actual =  strtotime(date("Y-m-d H:i:s"));

if( ($actual-$tiempo) >= $inactividad){
 contadorvisitas();
 // En caso que este sea mayor del tiempo seteado lo deslogea.
}else{
 $_SESSION['time'] =$actual;
}



//contadorvisitas();
function contadorvisitas()
    {
       
     $ruta_archivo = 'contadorvisitas.txt';
    $path = 'application/contador/'.$ruta_archivo;
  $archivo = file_get_contents($path);
  $suma = $archivo + 1;
  
    
    $archivo2 = file_get_contents($path);
$fp = fopen($path, 'w');
fwrite($fp, $suma ); 
    $_SESSION["visitantes"] = $suma;
    fclose($fp);  
       
    }
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Phozogy Template">
    <meta name="keywords" content="Phozogy, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ASOATIP</title>
   <link rel="icon" href="../plantilla/assets/img/icon.ico" type="image/x-icon"/>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Quantico:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../plantilla_front/assets/css/bootstrap.min.css" type="text/css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../plantilla_front/assets/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="../plantilla_front/assets/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../plantilla_front/assets/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../plantilla_front/assets/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../plantilla_front/assets/css/style.css" type="text/css">
    <link rel="stylesheet" href="../plantilla_front/css/main.css" type="text/css">
    <link rel="stylesheet" href="../plantilla_front/css/redes.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <link href="../plantilla/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
   <style>
       body{
           overflow-x: hidden;
           
       }
    </style>
</head>

<body>
    <?php
    $dia = date('d');

    $mes = date('m');
    
    switch ($mes) {
        case '01':
           $mes = "Enero";
            break;
        
       case '02':
           $mes = "Febrero";
           break;
           case '03':
               $mes = "Marzo";
               break;
    
               case '04':
                   $mes = "Abril";
                   break;
                   case '05':
                       $mes = "Mayo";
                       break;
                       case '06':
                           $mes = "Junio";
                           break;
                           case '07':
                               $mes = "Julio";
                               break;
                               case '08':
                                   $mes = "Agosto";
                                   break;
                                   case '09':
                                       $mes = "Septiembre";
                                       break;
                                       case '10':
                                           $mes = "Octubre";
                                           break;
                                           case '11':
                                               $mes = "Noviembre";
                                               break;
                                               case '12':
                                                   $mes = "Diciembre";
                                                   break;
    
                                                   
    }
    $year = date('Y');
    ?>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                <div class="site-navbar-wrap">

<div id="sticky-wrapper" class="sticky-wrapper" style=""><div class="site-navbar site-navbar-target js-sticky-header" style="width: 100%; -webkit-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.75);
-moz-box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.75);
box-shadow: 0px 1px 2px 0px rgba(0,0,0,0.75);">
<div class="container-fluid p-0">
<div class="row align-items-center" style="" id="barra">

<div class="col-sm-12 col-12 p-0">
<nav class="site-navigation text-center" role="navigation">
<div class="container-fluid" style="">

<center><div class="mainnd" style="position:relative; ">
  <div style="width:100%; background:white;display:table; height:30px; background:#d93b3a" id="fechas">
      <div style="width:60%; margin:auto; height:30px; display:flex; align-items: center; ">
        <center><i class="fa fa-calendar mr-2"></i><span style="color:white; margin:auto" id="fecha"><?php echo $dia."-".$mes."-".$year ?></span></center>
      <center><i class="fa fa-clock ml-2"></i><span style="color:white; margin:auto" id="hora"></span></center>
      </div>
   </div>
   <div style="width:100%; background:white;display:flex; align-items: center; border-bottom:3px solid #0b9977; ">
       <img src="../plantilla/assets/img/logo.png" alt="" class="logo-tipo m-auto">
       <button style="position:absolute; right:0; border:none; color:white;  background: rgb(214,178,92);
background: linear-gradient(90deg, rgba(214,178,92,1) 0%, rgba(11,153,119,1) 13%, rgba(217,59,58,1) 28%, rgba(214,178,92,1) 57%, rgba(52,60,148,1) 77%, rgba(11,153,119,1) 100%); height:40px; width:40px; border-radius:50%; font-size:25px;" id="bar"><i class="fa fa-bars"></i></button>
   </div>
   
    <div id="caja" style=" margin:auto;">
        <ul class="site-menu main-menu js-clone-nav  d-lg-block" style="width:100%; ">
  
<li class="active text-center"><div class="text-center" style="width:100%">
   <a href="../index.php/Home" class="nav-link text-center">Inicio</a> 
</div></li>
<li class="active text-center"><div class="text-center" style="width:100%" >
   <a href="../index.php/About" class="nav-link text-center">Nosotros</a> 
</div></li>
<li class="active text-center"><div class="text-center" style="width:100%" >
   <a href="../index.php/Portafolio" class="nav-link text-center">Programas</a> 
</div></li>
<li class="active text-center"><div class="text-center" style="width:100%" >
  <a href="../index.php/Blog" class="nav-link text-center">Galería</a>  
</div></li>
<li class="active text-center"><div class="text-center" style="width:100%" >
  <a href="../index.php/Publicaciones" class="nav-link text-center">Blog</a> 
</div></li>
<li class="active text-center"><div class="text-center" style="width:100%" >
  <a href="../index.php/Contacto" class="nav-link text-center">Contactanos</a>  
</div></li>

</ul>
    </div>
</div></center>
</div>
</nav>
</div>
</div>
</div>
</div></div>
</div>
                </div>
            </div>
        </div>
    </header>
    
    
    
    <div class="sticky-container">
    <ul class="sticky">
        <li class="r">
          <button style="width:50px; height:50px; border-radius:50%; " class="red red1"><i class="fa fa-facebook"></i></button>
            <a href="#" style="position:relative; left:20px; color:white; font-weight:bolder;">Facebook</a>
          
        </li>
        <li class="r">
          <button style="width:50px; height:50px; border-radius:50%; " class="red red2"><i class="fa fa-instagram"></i></button>
           <a href="#" style="position:relative; left:20px; color:white; font-weight:bolder;">Instagram</a>
           
          
        </li>
        <li class="r">
          <button style="width:50px; height:50px; border-radius:50%; " class="red red3"><i class="fa fa-twitter"></i></button>
           
            <a href="#" style="position:relative; left:20px; color:white; font-weight:bolder;">Twitter</a>
        </li>
        <li class="r">
          <button style="width:50px; height:50px; border-radius:50%; " class="red red4"><i class="fa fa-youtube"></i></button>
            <a href="#" style="position:relative; left:20px; color:white; font-weight:bolder;">Youtube</a>
          
        </li>
        <li class="r">
          <button style="width:50px; height:50px; border-radius:50%; " class="red red5"><i class="fa fa-whatsapp"></i></button>
            <a target="_blank" href="https://api.whatsapp.com/send?phone=573182525189&text=Buen%20Dia%20Quiero%20Recibir%20Información%20Sobre%20ustedes%20Muchas%20gracias" style="position:relative; left:20px; color:white; font-weight:bolder;">WhatsApp</a>
          
        </li>
       
    </ul>
</div>
    <!-- Header End -->

   