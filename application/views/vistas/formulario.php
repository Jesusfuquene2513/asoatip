
        <div class="container card" style="margin:auto; padding-top: 150px;background:rgb(255 , 255 , 255 , 0.9);">
            <div class="row">
               
                <div class="col-lg-12 col-md-12">
                   <div class="row col-lg-11 m-auto">
                       <div class="col-xl-12 form-group formulario-campos p-1 mt-1 mb-1" style="text-align: center">   
               <div class="section-title">
                    <h2 style="color:black"><span id="titulo-formulario">Formulario de Contacto</span></h2>
               </div>
<div class="row">    <div class="form-group col-xl-4 col-lg-6  col-md-4 p-1 mt-1 mb-1 formulario-campos">
                        <label for="" style="color: black; font-weight:bolder;">Nombre completo</label>
                        <input type="text" class="form-control" id="nombre_contacto" name="nombre_contacto" style="border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;">
                        <input type="text" name="peticion" value="35" class="d-none">
                    </div>
                    <div class="form-group col-xl-4 col-lg-6 col-md-4  p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="color: black; font-weight:bolder;">Tipo Identificación</label>
                        <select name="tipo_documento" id="sel-documento" class="form-control" style="cursor: pointer; border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;">
                            <option value="0">Seleccione tipo de identificación</option>
                            <option value="1">Cedula de ciudadania</option>
                            <option value="2">Cedula extranjera</option>
                            <option value="3">Pasaporte</option>
                            <option value="4">NIT</option>
                        </select>
                    </div>
                    <div class="form-group col-xl-4 col-lg-6  col-md-4 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="color: black; font-weight:bolder;">Numéro de identificación</label>
                        <input type="text" name="numero_identificacion" class="form-control" disabled="" id="documento" style="border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;">
                    </div>
                    <div class="form-group col-xl-6 col-lg-6 col-md-6 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="color: black; font-weight:bolder;">Teléfono</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" style="border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;">
                    </div>
                   
                     <div class="form-group col-xl-6 col-lg-4 col-md-6 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="color: black; font-weight:bolder;">Seleccione Departamento</label>
                        <select class="form-control" id="sel-departamento" style="cursor: pointer; border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;" name="departamento"><option value="0">Seleccione un departamento</option><option value="5">ANTIOQUIA</option><option value="8">ATLÁNTICO</option><option value="11">BOGOTÁ, D.C.</option><option value="13">BOLÍVAR</option><option value="15">BOYACÁ</option><option value="17">CALDAS</option><option value="18">CAQUETÁ</option><option value="19">CAUCA</option><option value="20">CESAR</option><option value="23">CÓRDOBA</option><option value="25">CUNDINAMARCA</option><option value="27">CHOCÓ</option><option value="41">HUILA</option><option value="44">LA GUAJIRA</option><option value="47">MAGDALENA</option><option value="50">META</option><option value="52">NARIÑO</option><option value="54">NORTE DE SANTANDER</option><option value="63">QUINDIO</option><option value="66">RISARALDA</option><option value="68">SANTANDER</option><option value="70">SUCRE</option><option value="73">TOLIMA</option><option value="76">VALLE DEL CAUCA</option><option value="81">ARAUCA</option><option value="85">CASANARE</option><option value="86">PUTUMAYO</option><option value="88">ARCHIPIÉLAGO DE SAN ANDRÉS, PROVIDENCIA Y SANTA CATALINA</option><option value="91">AMAZONAS</option><option value="94">GUAINÍA</option><option value="95">GUAVIARE</option><option value="97">VAUPÉS</option><option value="99">VICHADA</option></select>
                    </div>
                    <div class="form-group col-xl-6 col-lg-4 col-md-6 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="color: black; font-weight:bolder;">Seleccione Municipio</label>
                        <select name="municipio" class="form-control" id="sel-municipio" disabled="disabled" style="cursor: pointer; border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;">

                        </select>
                    </div>
                     <div class="form-group col-xl-6 col-lg-4 col-md-6  p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <label for="" style="color: black; font-weight:bolder;">Correo electronico</label>
                        <input type="text" class="form-control" id="correo" name="correo" style="border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;">
                    </div>
                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-11 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <textarea name="consulta" id="consulta"  class="form-control" style="resize: none;width:100%; height: 150px; border: 1px solid black; font-weight:bolder; color: black; font-weight:bolder;"></textarea>
                    </div>
                    <div class="form-group col-xl-12 col-lg-12 col-md-12 col-sm-12 col-11 p-1 mt-1 mb-1 formulario-campos" style="float:left">
                        <center>
                            <input type="button" class="btn btn-primary" value="Enviar" id="enviar-peticion-contacto" style="--bs-btn-box-shadow:inset 0 0px 0 rgba(255, 255, 255, 0.15),0 0px 0px rgba(0, 0, 0, 0.075); background: rgb(52, 60, 148); border: none;">
                        </center>
                    </div>

                </div>
            </div>
                   </div>
                </div>
            </div>
        </div>
        <div class="container-fluid p-5" style="background:#04ac91">
            <div class="row p-0">
                <div class="col-lg-3 ">

                <div class="fs-widget">
                        <h5>ASOATIP</h5>
                        <p>Imolor amet consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                      
                    </div>
                   
                </div>
               
                <div class="col-lg-4 ">
                    <div class="fs-widget">
                        <h5>Mapa del Sitio</h5>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">Services</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5 ">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3982.662999052456!2d-76.54279238476781!3d3.4319469523049317!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e30a7673b6d8c77%3A0x97cfd3d57b3d0e70!2sCorporaci%C3%B3n%20Empresarial%20Internacional%20Redepyme!5e0!3m2!1ses-419!2sco!4v1679936533304!5m2!1ses-419!2sco" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="col-lg-12">
                   <div class="row">
                   <div class="col-lg-12">
                    <form action="Contacto/procesar_contacto_index" method="post">
<div class="row container-fluid m-auto  p-5" id="footer" style="">
   
            <div class="row m-auto" style="color:white">
            
                <div class="col-xl-12 col-lg-11 col-md-12 m-auto">

                    
                </div>
            </div>


        </div>
        </form>                </div>
                   </div>
                </div>
            </div>  
        </div>
   