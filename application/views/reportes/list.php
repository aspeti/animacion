  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reportes</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
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
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1">
                <i class="fa-solid fa-sack-dollar"></i>
              </span>
              <div class="info-box-content">

                 
                <span class="info-box-text">TOTAl PAGOS</span>
                <?php $TotalPagos = 0;?> 
                <?php if(!empty($reservas)):?>                        
                      <?php foreach($reservas as $reserva):?>
                        <?php $TotalPagos = $TotalPagos + $reserva->total;?> 
                      <?php endforeach;?>
                 <?php endif; ?>  
                <span class="info-box-number"><?php echo $TotalPagos; ?> <small>Bs</small></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>       
        </div>  

        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <!--h3 class="card-title">lISTA DE VENTAS</!h3-->                              
                  <form action="<?php echo base_url() ?>reportes" method="POST">
                      <div class=" form-group  row">
                        <label for="" class="control-label">Fecha Inicio:</label>   
                        <div class="col-md-2 mr-4">                          
                          <input type="date" class="form-control" name="fechainicio" id="fechainicio" value="<?php echo !empty($fecha_inicio)? $fecha_inicio:'';?>" required/>
                        </div>
                        <label for="" class="control-label">Fecha Fin:</label>   
                        <div class="col-md-2 mr-4">                          
                          <input type="date" class="form-control" name="fechafin" id="fechafin" value="<?php echo !empty($fecha_fin)? $fecha_fin:'';?>" required/>
                        </div>
                        <div class=" col-5">   
                          <input type="submit" class="btn btn-success" name="filtrar" id=filtrar value="Filtrar" >  
                          <a href="<?php echo base_url();?>reportes" type="button" class="btn btn-warning">Reestablecer</a>                       
                        </div> 
                      </div> 
                  </form>
                  <form action="<?php echo base_url() ?>reportes/reporte/" method="POST"  target="_blank" >
                      <div class=" form-group  row"> 
                          <input type="hidden" class="form-control" name="inicio" id="inicio" value="<?php echo !empty($fecha_inicio)? $fecha_inicio:'';?>"/>
                          <input type="hidden" class="form-control" name="fin" id="fin" value="<?php echo !empty($fecha_fin)? $fecha_fin:'';?>"/>
                          <input type="submit" class="btn btn-primary" name="filtrar" id=filtrar value="Exportar">                         
                        </div> 
                      </div> 
                  </form>                  
              </div>  
        
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>#</th>
                    <th>Cliente</th>
                    <th>paquete</th>
                    <th>Fecha de evento</th>
                    <th>num comprobante </th>
                    <th>Total</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(!empty($reservas)):?>
                      <?php $cont = 1;?>      
                      <?php foreach($reservas as $reserva):?>
                  <tr>
                    <td><?php echo $cont;?></td>
                    <td><?php echo $reserva->cliente;?></td>
                    <td><?php echo $reserva->paquete;?></td>
                    <td><?php echo date('d-m-Y H:i', strtotime($reserva->fecha_evento)); ?></td> 
                    <td><?php echo $reserva->num_documento;?></td>
                    <td><?php echo $reserva->total;?></td>                                
                    <td>
                        <div class="btn-group">
                          <a class="btn btn-warning" href="<?php echo base_url();?>reportes/comprobante/<?php echo $reserva->id_reserva;?>" class="btn btn-info" target="_blank"><span class="fas fa-file-text" ></span></a>   
                                           
                        </div>
                    </td>  
                  </tr>
                      <?php $cont++;?>                 
                  <?php endforeach;?>
                  <?php endif; ?>  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>#</th>
                    <th>Cliente</th>
                    <th>paquete</th>
                    <th>Fecha de evento</th>
                    <th>num comprobante </th>
                    <th>Total</th>
                    <th>Acciones</th>
                  </tr>
                  </tfoot>
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