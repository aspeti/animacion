<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/dist/css/adminlte.min.css">
  <!-- bootstrap style -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/styles/styles.css">
    <title>Login</title>
</head>
<body>
    <!----------------------- Main Container -------------------------->
     <div class="container d-flex justify-content-center align-items-center min-vh-100">
    <!----------------------- Login Container -------------------------->
       <div class="row border rounded-5 p-3 bg-white shadow box-area">
    <!--------------------------- Left Box ----------------------------->
       <div class="col-md-6 rounded-4 d-flex justify-content-center align-items-center flex-column left-box" style="background: #fffff;">
           <div class="featured-image mb-3" style="padding-top: 20px">
            <img src="<?php echo base_url();?>assets/img/login.jpg" class=" d-flex justify-content-center align-items-center" style="width: 420px; border-radius: 15px 15px;">
           </div>
      
       </div> 
    <!-------------------- ------ Right Box ---------------------------->
    
       <div class="col-md-6 right-box">
       <form action="<?php echo base_url();?>Auth/registroUsuario" method="post">
          <div class="row align-items-center">
                <div class="header-text mb-1">
                     <h2>Eventos y animaciones</h2>
                     <p>Estamos felices de que adquieras nuestros servicios</p>
                </div>       
                <div class="input-group mb-3">
                    <input type="nombre" class="form-control form-control-lg bg-light fs-6 <?php echo !empty(form_error("nombre")) ? 'is-invalid':' ';?>" 
                     placeholder="Nombre *" name="nombre" id="nombre" value="<?php echo set_value("nombre");?>">
                     <?php echo form_error("nombre","<span class='help-block'>","</span>")?>
                </div>

                <div class="input-group mb-3">
                    <input type="celular" class="form-control form-control-lg bg-light fs-6 <?php echo !empty(form_error("celular")) ? 'is-invalid':' ';?>" 
                        placeholder="Celular *" name="celular" id="celular" value="<?php echo set_value("celular");?>">
                        <?php echo form_error("celular","<span class='help-block'>","</span>")?>
                </div>

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6 <?php echo !empty(form_error("email")) ? 'is-invalid':' ';?>" 
                        placeholder="Correo electronico *" name="email" id="email" value="<?php echo set_value("email");?>">
                        <?php echo form_error("email","<span class='help-block'>","</span>")?>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6 <?php echo !empty(form_error("password")) ? 'is-invalid':' ';?>" 
                        placeholder="Contraseña *" name="password" id="password" value="<?php echo set_value("password");?>">
                        <?php echo form_error("password","<span class='help-block'>","</span>")?>
                </div>
                <div class="input-group mb-3">
                    <input type="password" class="form-control form-control-lg bg-light fs-6 <?php echo !empty(form_error("passconf")) ? 'is-invalid':' ';?>"
                        placeholder="Reescriba la Contraseña *" name="passconf" id="passconf" value="<?php echo set_value("passconf");?>">
                        <?php echo form_error("passconf","<span class='help-block'>","</span>")?>
                </div>

                <div class="input-group mb-1">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Registarse</button>
                </div>  
                <div class="row">
                    <small>Ya tienes cuenta? <a href="<?php echo base_url();?>Auth">Ingresar</a></small>
                </div>          
                <!--div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                </!--div
                <div class="row">
                    <small>No tienes cuenta? <a href="#">Volver</a></small>
                </div>-->
          </div>
       </div> 
       </form>
      </div>
    </div>
</body>
</html>