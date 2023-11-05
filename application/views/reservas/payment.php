<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>UI Payment</title>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Payment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
                <div class="card-header bg-warning">

                <h3 class="card-title">Payment</h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-4 mt-4">

                      <form action="<?php echo base_url();?>reserva/updateDeposito" method="POST"> 
                            <h6 class="mt-4 mb-0 font-weight-bold">POR FAVOR SIGUE LOS SIGUIENTES PASOS PARA CONTINUAR:</h6>                
                          
                            </br>
                            <p><span class="pr-2"><i class="fa-solid fa-check fa-beat" style="color: #0ee11c;"></i></i></span>Paso 1: Utiliza el codigo QR para realizar el deposito desde la plataforma de tu preferencia</p>
                            <p><span class="pr-2"><i class="fa-solid fa-check fa-beat" style="color: #0ee11c;"></i></i></span>Paso 2: Envia el comprobante por whatsapp, presionando en el boton correpondiente</p>
                          
                            <p class="pb-4"><span class="pr-2"><i class="fa-solid fa-check fa-beat" style="color: #0ee11c;"></i></i></span>Paso 3: Presiona el boton continuar</p>

                            <a href="https://api.whatsapp.com/send?phone=59170771664&text=Hola!%2C%20Realize%20la%20reserva%20de%20un%20paquete%2C%0Aenvio%20el%20comprobante%20de%20pago." target="_blank" class="btn btn-success"><span><i class="fa-brands fa-whatsapp"></i></i></span> Enviar comprobante</a>
                          
                            <input type="hidden" name="idReserva" id="idReserva" value="<?php echo $idReserva?>">
                            <button  type="submit" class="btn btn-primary">continuar</button> 
                      </form>
                  </div>
                  <div class="col-sm-4">
                    <img src="<?php echo base_url()."assets/img/qr.jpeg"?>" alt="QR Code" width="400" height="400"><br><br>                    
                  </div>
                  <div class="col-sm-4">
                    
                  </div>
                </div>
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

</body>
</html>
