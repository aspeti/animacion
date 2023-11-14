
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MisReservas</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reportes</li>
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

            <div class="card">
              
              <!-- /.card-header -->
              <div class="card-body">           

                <table id="lista" class="table table-bordered table-striped">
                  <thead>                 
                  <tr>
                    <th>#</th>
                    <th>Cliente</th>                  
                    <th>Fecha Evento</th>
                    <th>Direccion</th>
                    <th>Deposito</th>
                    <th>Estado de Reserva</th></th>
                    <th>Total</th>
                    <th>Recibo</th>
                  
                  </tr>
                  </thead>
                  <tbody>
                        <?php if(!empty($reservas)):?>
                              <?php $cont = 1;?>
                            <?php foreach($reservas as $reserva):?>
                                      <tr>
                                        <td><?php echo $cont;?></td>
                                        <td><?php echo $reserva->cliente;?></td>  
                                        <td><?php echo $reserva->fecha_evento;?></td> 
                                        <td><?php echo $reserva->direccion_evento;?></td> 
                                        <td><?php echo $reserva->pagado ? "Si" : "NO"; ?></td>
                                        <!---td></?php echo $reserva->confirmacion ? "CONFIRMADA" : "POR CONFIRMAR"; ?></-td--> 
                                        <?php if($reserva->confirmacion == 0){?>
                                          <td><span class="font-weight-bold" style="color: #FD7E14;">Por Confirmar</span></td> 
                                        <?php } elseif ($reserva->confirmacion == 1){ ?> 
                                          <td><span class="font-weight-bold" ><i class="fa-solid fa-check" style="color: #039900;">Confirmado</i></span></td> 
                                        <?php } else { ?>  
                                          <td><span class="font-weight-bold" ><i class="fa-solid fa-check" style="color: #DC3545;">Cancelado</i></span></td> 
                                          <?php } ; ?>  
                                          
                                        <td><?php echo $reserva->total;?></td>  
                                        <td> <a class="btn btn-warning" href="<?php echo base_url();?>reportes/comprobante/<?php echo $reserva->id_reserva;?>" 
                                        class="btn btn-info" target="_blank"><span class="fas fa-file-text" ></span></a><td>                                      
                                      </tr>  
                              <?php $cont++;?>
                        <?php endforeach;?>
                        <?php endif; ?>                                               
                  </tbody>     
                  <tr>
                    <th>#</th>
                    <th>Cliente</th> 
                    <th>Fecha Evento</th>
                    <th>Direccion</th>
                    <th>Deposto</th>
                    <th>Estado de Reserva</th></th>
                    <th>Total</th>  
                    <th>Recibo</th>                 
                  </tr>
                </table>
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

  <!-- /.modal -->
  <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Info</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer justify-content-between">
              <!--<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>-->
              <!--button type="button" class="btn btn-primary">Save changes</!button*-->
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->