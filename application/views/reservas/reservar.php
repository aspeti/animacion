  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Reservar</h1></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Reserva</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-sm-6">
              <div class="col-12">
              <img src="<?php echo base_url().$paquete->img;?>" class="product-image" alt="Product Image">
              </div>              
            </div>            
            <div class="col-12 col-sm-6">
            <form action="<?php echo base_url();?>reserva/agregar" method="POST">            
              
              <h3 class="mt-4 mb-0"> Paquete :<span class="font-weight-bold" ><i class=" fa-solid  fa-bounce" style="color: #06a225;"><?php echo $paquete->nombre;?></i></span></h3>
             
              <h5 class="my-3">Detalles:</h5>            
              <?php if(!empty($detalles)):?>                       
                <?php foreach($detalles as $detalle):?>
                  <p><span><i class="fa-solid fa-star fa-beat fa-lg" style="color: #14db14;"></i> <?php echo $detalle->cantidad.' '.$detalle->nombre.' '.$detalle->descripcion?></i></span></p>
                  <?php endforeach;?>
              <?php endif; ?> 
              <hr>           


              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="m-3" >          
                <span><i class="fa-solid fa-sack-dollar" style="color: #14db14;"></i> <?php echo $paquete->precio." Bs"?></i></span>
                </h2>
                <input type="hidden" name="total" id="total" value="<?php echo $paquete->precio;?>">
                <input type="hidden" name="id_paquete" id="id_paquete" value="<?php echo $paquete->id_paquete;?>">               
              </div>          
              <h6 class="mt-4 mb-0 font-weight-bold">PERSONALIZA TU PAQUETE</h6>
              <p class="m-0"><small>Selecciona las opciones que mejor se adapte a tu evento, sin costo adicional.</small> </p>
              <div class="mt-0 row">
                        <div class="col-md-3">
                            <label for="adicional">Producto Adicional:</label>
                            <select name="adicional" id="adicional" class="form-control" required>
                                <option value="1" selected>Seleccione...</option>   
                                <?php foreach($productos as $producto):?>
                                  <?php if($producto->categoria == "Adicional"):?>
                                    <option value="<?php echo $producto->id_producto; ?>"> <?php echo $producto->nombre;?></option>
                                  <?php endif;?>
                                <?php endforeach;?>
                            </select>  
                        </div>   
                        <div class="col-md-3">
                            <label for="humor">Humor:</label>
                            <select name="humor" id="humor" class="form-control" required>
                                <option value="1" selected>Seleccione...</option>  
                                <?php foreach($productos as $producto):?>
                                  <?php if($producto->categoria == "Humor"):?>
                                    <option value="<?php echo $producto->id_producto; ?>"> <?php echo $producto->nombre;?></option>
                                  <?php endif;?>
                                <?php endforeach;?>
                            </select>     
                        </div>   
                        <div class="col-md-3">                                    
                            <label for="tematica">Tematica:</label>
                            <select name="tematica" id="tematica" class="form-control" required>
                                <option value="1" selected>Seleccione...</option>  
                                <?php foreach($productos as $producto):?>
                                  <?php if($producto->categoria == "Tematica"):?>
                                    <option value="<?php echo $producto->id_producto; ?>"> <?php echo $producto->nombre;?></option>
                                  <?php endif;?>
                                <?php endforeach;?>
                            </select>  
                        </div>                      
              </div>
              
              <h6 class="mt-4 mb-0 font-weight-bold">DEL LUGAR DEL EVENTO:</h6>
              <p class="m-0"><small>Los datos del evento es importante para que nuestro equipo llegue con facilidad.</small> </p>
              <div class="form-group row mt-1">   
                <div class="col-md-6">
                  <label for="direccion"><span class="pr-2"><i class="fa-solid fa-location-dot fa-beat" style="color: #0c5de9;"></i></span>Direccion del evento:</label>
                  <input type="text" class="form-control" name="direccion" id="direccion" required>
                </div>
                <div class="col-md-3">
                <label for="direccion"><span class="pr-2"><i class="fa-solid fa-phone fa-beat" style="color: #0a5ceb;"></i></span>Contacto:</label>
                  <input type="text" class="form-control" name="contacto" id="contacto" required>
                </div>
              </div>
              <div class="form-group row mt-4">                                                   
                  <div class="col-md-4">
                    <label for="fecha">Fecha del Evento:</label>
                    <input type="datetime-local" class="form-control" name="fecha" id="fecha" required>
                  </div> 
                  <div class="col-md-3">                   
                    <?php $dataComprobante = $comprobante->id_comprobante.'*'.$comprobante->cantidad.'*'.$comprobante->serie;?>   
                    <input type="hidden" id="comprobante" name="comprobante" value="<?php echo $dataComprobante;?>">                                                
                    <input type="hidden" id="idcomprobante" name="idcomprobante">                   
                  </div>                                                
                  <div class="col-md-3">
                    <label for=""></label>
                    <input type="hidden" class="form-control" name="serie" id="serie" readonly>
                    </div>
                    <div class="col-md-3">
                    <label for=""></label>
                        <input type="hidden" class="form-control" name="numero"  id="numero" readonly>
                    </div>                         
              </div>            

              <div class="mt-4 form-group">              
                <button type="submit" class="btn btn-primary btn-lg" >
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                      Reservar</button>                
              </div>
            </form>
            </div>
            
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

