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
       <form action="<?php echo base_url();?>Auth/login" method="post">
          <div class="row align-items-center">
                <div class="header-text mb-4">
                     <h2>Animacion y eventos</h2>
                     <p>Estamos felices de que este de vuelta</p>
                </div>
                <?php if($this->session->flashdata("error")):?>
                    <div class="alert alert-danger">
                      <p><?php echo $this->session->flashdata("error")?></p>
                    </div> 
                <?php endif; ?> 

                <div class="input-group mb-3">
                    <input type="text" class="form-control form-control-lg bg-light fs-6" placeholder="Correo electronico" name="email">
                </div>
                <div class="input-group mb-1">
                    <input type="password" class="form-control form-control-lg bg-light fs-6" placeholder="Contraseña" name="password">
                </div>
                <div class="input-group mb-5 d-flex justify-content-between">
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="formCheck">
                        <label for="formCheck" class="form-check-label text-secondary"><small>Recordarme</small></label>
                    </div>
                    <div class="forgot">
                        <small><a href="#">Olvide la contraseña?</a></small>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <button class="btn btn-lg btn-primary w-100 fs-6">Login</button>
                </div>            
                <!--div class="input-group mb-3">
                    <button class="btn btn-lg btn-light w-100 fs-6"><img src="images/google.png" style="width:20px" class="me-2"><small>Sign In with Google</small></button>
                </!--div-->
                <div class="row">
                    <small>No tienes cuenta? <a href="#">Registrate</a></small>
                </div>
          </div>
       </div> 
       </form>
      </div>
    </div>
</body>
</html>