<?php
session_start();
extract($_GET);
if(isset($_SESSION['administrador'])){

}else{

    header('Location: login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>DASHBOARD - ASOATIP</title>
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="plantilla/assets/img/icon.ico" type="image/x-icon"/>

    <!-- Fonts and icons -->
    <script src="plantilla/assets/js/plugin/webfont/webfont.min.js"></script>
    <script>
        WebFont.load({
            google: {"families":["Open+Sans:300,400,600,700"]},
            custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands"], urls: ['plantilla/assets/css/fonts.css']},
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <style>
        .item-carga-imagen img{
    cursor:pointer
}
select{
    cursor:pointer
}
.video-multimedia{
    width: 100%;
}

.capa{
    background-color: rgb(255, 255, 255 , 0.1);
    cursor:pointer
}
@media only screen and (max-width: 600px) {
    .item-carga-imagen , .archivo-multimedia , .video-multimedia{
        height: 330px;
    }
    .img-tabla{
        width: 100%;
        height: 50px;
    }

    .capa{
        width: 95%;
        height: 330px; 
    }
    
}
@media only screen and (min-width: 600px) {
    .item-carga-imagen , .archivo-multimedia , .video-multimedia{
        height: 130px;
    }
    .img-tabla{
        width: 100%;
        height: 80px;
    }
    .capa{
        width: 90%;
        height: 130px; 
    }
}
@media only screen and (min-width: 768px) {
    .item-carga-imagen , .archivo-multimedia , .video-multimedia{
        height: 130px;
    }
    .img-tabla{
        width: 80%;
        height: 100px;
    }
    .capa{
        width: 90%;
        height: 130px; 
    }
}
@media only screen and (min-width: 992px) {
    .item-carga-imagen , .archivo-multimedia , .video-multimedia{
        height: 130px;
    }
    .img-tabla{
        width: 80%;
        height: 150px;
    }

    .capa{
        width: 90%;
        height: 130px; 
    }
}
@media only screen and (min-width: 1200px) {
    .item-carga-imagen , .archivo-multimedia , .video-multimedia{
        height: 130px;
    }
    #contenedor-carga{
        height: 400px;
        overflow-y: scroll;
    }
    .img-tabla{
        width: 80%;
        height: 150px;
    }
    .capa{
        width: 90%;
        height: 130px; 
    }
    .video-tabla{
        width: 80%;
    }
}
    </style>

    <!-- CSS Files -->
    <link rel="stylesheet" href="plantilla/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="plantilla/assets/css/azzara.min.css">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="plantilla/assets/css/demo.css">
</head>
<body class="user" id="<?php echo $window ?>">
    <div class="wrapper">
        <!--
                Tip 1: You can change the background color of the main header using: data-background-color="blue | purple | light-blue | green | orange | red"
        -->
        <div class="main-header" style="background:#00a58c">
            <!-- Logo Header -->
            <div class="logo-header" style="background:white; border-bottom:1px solid #00a58c">
                
                <a href="index.html" class="logo">
                    <img src="plantilla/assets/img/logo.png" alt="navbar brand" class="navbar-brand" style="width:170px">
                </a>
                <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                        <i class="fa fa-bars"></i>
                    </span>
                </button>
                <button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
                <div class="navbar-minimize">
                    <button class="btn btn-minimize btn-rounded">
                        <i class="fa fa-bars"></i>
                    </button>
                </div>
            </div>
            <!-- End Logo Header -->

            <!-- Navbar Header -->
            <nav class="navbar navbar-header navbar-expand-lg">
                
                <div class="container-fluid">
                    <div class="collapse" id="search-nav">
                       
                    </div>
                    <ul class="navbar-nav topbar-nav ml-md-auto align-items-center" style="display:none">
                        <li class="nav-item toggle-nav-search hidden-caret">
                            <a class="nav-link" data-toggle="collapse" href="#search-nav" role="button" aria-expanded="false" aria-controls="search-nav">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="messageDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-envelope"></i>
                            </a>
                            <ul class="dropdown-menu messages-notif-box animated fadeIn" aria-labelledby="messageDropdown">
                                <li>
                                    <div class="dropdown-title d-flex justify-content-between align-items-center">
                                        Messages                                    
                                        <a href="#" class="small">Mark all as read</a>
                                    </div>
                                </li>
                                <li>
                                    <div class="message-notif-scroll scrollbar-outer">
                                        <div class="notif-center">
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="plantilla/assets/img/jm_denis.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jimmy Denis</span>
                                                    <span class="block">
                                                        How are you ?
                                                    </span>
                                                    <span class="time">5 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="plantilla/assets/img/chadengle.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Chad</span>
                                                    <span class="block">
                                                        Ok, Thanks !
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="plantilla/assets/img/mlane.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Jhon Doe</span>
                                                    <span class="block">
                                                        Ready for the meeting today...
                                                    </span>
                                                    <span class="time">12 minutes ago</span> 
                                                </div>
                                            </a>
                                            <a href="#">
                                                <div class="notif-img"> 
                                                    <img src="plantilla/assets/img/talha.jpg" alt="Img Profile">
                                                </div>
                                                <div class="notif-content">
                                                    <span class="subject">Talha</span>
                                                    <span class="block">
                                                        Hi, Apa Kabar ?
                                                    </span>
                                                    <span class="time">17 minutes ago</span> 
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all messages<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="nav-link dropdown-toggle" href="#" id="notifDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="notification">4</span>
                            </a>
                            <ul class="dropdown-menu notif-box animated fadeIn" aria-labelledby="notifDropdown">
                                <li>
                                    <div class="dropdown-title">You have 4 new notification</div>
                                </li>
                                <li>
                                    <div class="notif-center">
                                        <a href="#">
                                            <div class="notif-icon notif-primary"> <i class="fa fa-user-plus"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    New user registered
                                                </span>
                                                <span class="time">5 minutes ago</span> 
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-success"> <i class="fa fa-comment"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Rahmad commented on Admin
                                                </span>
                                                <span class="time">12 minutes ago</span> 
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-img"> 
                                                <img src="plantilla/assets/img/profile2.jpg" alt="Img Profile">
                                            </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Reza send messages to you
                                                </span>
                                                <span class="time">12 minutes ago</span> 
                                            </div>
                                        </a>
                                        <a href="#">
                                            <div class="notif-icon notif-danger"> <i class="fa fa-heart"></i> </div>
                                            <div class="notif-content">
                                                <span class="block">
                                                    Farrah liked Admin
                                                </span>
                                                <span class="time">17 minutes ago</span> 
                                            </div>
                                        </a>
                                    </div>
                                </li>
                                <li>
                                    <a class="see-all" href="javascript:void(0);">See all notifications<i class="fa fa-angle-right"></i> </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown hidden-caret">
                            <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                <div class="avatar-sm">
                                    <img src="plantilla/assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-user animated fadeIn">
                                <li>
                                    <div class="user-box">
                                        <div class="avatar-lg"><img src="plantilla/assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                                        <div class="u-text">
                                            <h4>Hizrian</h4>
                                            <p class="text-muted"></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">My Profile</a>
                                    <a class="dropdown-item" href="#">My Balance</a>
                                    <a class="dropdown-item" href="#">Inbox</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Account Setting</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Logout</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </nav>
            <!-- End Navbar -->
        </div>

        <!-- Sidebar -->
        <div class="sidebar">
            
            <div class="sidebar-background"></div>
            <div class="sidebar-wrapper scrollbar-inner" style="background:#00a58c">
                <div class="sidebar-content">
                    <div class="user">
                        
                        <div class="info">
                            <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                <span>
                                   
                                    <span class="user-level" style="color:white"><?php echo $_SESSION['administrador']; ?></span>
                                    <span class="caret"></span>
                                </span>
                            </a>
                            <div class="clearfix"></div>

                            <div class="collapse in" id="collapseExample">
                                <ul class="nav">
                                   
                                    <li>
                                        <a href="logout.php">
                                            <span class="link-collapse">Salir</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <ul class="nav">
                       
                        <li class="nav-section">
                            <span class="sidebar-mini-icon">
                                <i class="fa fa-ellipsis-h"></i>
                            </span>
                            <h4 class="text-section">Administrador</h4>
                        </li>
                        <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Multimedia</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-multimedia" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear elemento</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-multimedia" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Listar Elementos</span>
                                        </a>
                                    </li>
                                                                   </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Programas</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-programa" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear Programas</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-programas" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Listar Programas</span>
                                        </a>
                                    </li>
                                                                   </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Funcionarios</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-funcionario" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear Funcionario</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-funcionarios" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Ver Funcionarios</span>
                                        </a>
                                    </li>
                                                                   </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Aliados</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-aliado" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear aliado</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-aliados" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Ver aliados</span>
                                        </a>
                                    </li>
                                                                   </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Publicaciones</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-publicacion" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear Publicación</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-publicaciones" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Ver publicaiones</span>
                                        </a>
                                    </li>
                                                                   </ul>
                            </div>
                        </li>

                        <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Galería</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-galeria" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear Album</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-albumnes" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Ver Albumnes</span>
                                        </a>
                                    </li>

                                    <li id="btn-crear-imagen-galeria" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear Foto</span>
                                        </a>
                                    </li>

                                     <li id="btn-listar-imagen-galeria" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Ver Fotos</span>
                                        </a>
                                    </li>
                                    
                                                                   </ul>
                            </div>
                        </li>


                         <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Slider</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-slider" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear Banner</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-slider" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Ver Banners</span>
                                        </a>
                                    </li>
                                                                   </ul>
                            </div>
                        </li>


                        <li class="nav-item">
                            <a data-toggle="collapse" href="" class="modulo">
                                <i class="fas fa-layer-group"></i>
                                <p>Contactos</p>
                                <span class="caret"></span>
                            </a>
                            <div class="collapse" id="base">
                                <ul class="nav nav-collapse">
                                    <li id="btn-crear-solicitud" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Crear Contacto</span>
                                        </a>
                                    </li>
                                    <li id="btn-listar-solicitud" style="list-style: none">
                                        <a href="#" disabled>
                                            <span class="sub-item">Ver Contactos</span>
                                        </a>
                                    </li>
                                                                   </ul>
                            </div>
                        </li>
                        
                       
                       
                        
                        
                        
                        
                       
                    </ul>
                </div>
            </div>
        </div>
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                <div class="page-inner">
                    <div class="page-header">
                        <h4 class="page-title">PANEL DE ADMINISTRACIÓN</h4>
                    </div>
                    <div class="page-category" id="contenedor-dinamico" style="border:solid 2px #00a58c">Starter Description</div>
                </div>
            </div>
            
        </div>
        
    </div>
    <!--   Core JS Files   -->
    <script src="plantilla/assets/js/core/jquery.3.2.1.min.js"></script>
    <script src="plantilla/assets/js/core/popper.min.js"></script>
    <script src="plantilla/assets/js/core/bootstrap.min.js"></script>

    <!-- jQuery UI -->
    <script src="plantilla/assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
    <script src="plantilla/assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

    <!-- jQuery Scrollbar -->
    <script src="plantilla/assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

    <!-- Moment JS -->
    <script src="plantilla/assets/js/plugin/moment/moment.min.js"></script>

    <!-- Chart JS -->
    <script src="plantilla/assets/js/plugin/chart.js/chart.min.js"></script>

    <!-- jQuery Sparkline -->
    <script src="plantilla/assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

    <!-- Chart Circle -->
    <script src="plantilla/assets/js/plugin/chart-circle/circles.min.js"></script>

    <!-- Datatables -->
    <script src="plantilla/assets/js/plugin/datatables/datatables.min.js"></script>

    <!-- Bootstrap Notify -->
    <script src="plantilla/assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

    <!-- Bootstrap Toggle -->
    <script src="plantilla/assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

    <!-- jQuery Vector Maps -->
    <script src="plantilla/assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
    <script src="plantilla/assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

    <!-- Google Maps Plugin -->
    <script src="plantilla/assets/js/plugin/gmaps/gmaps.js"></script>

    <!-- Sweet Alert -->
    <script src="plantilla/assets/js/plugin/sweetalert/sweetalert.min.js"></script>

    <!-- Azzara JS -->
    <script src="plantilla/assets/js/ready.min.js"></script>
    <script src="plantilla/js/enrutador.js"></script>
</body>
</html>