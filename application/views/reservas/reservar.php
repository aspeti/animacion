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
              <h3 class="d-inline-block d-sm-none">LOWA Men’s Renegade GTX Mid Hiking Boots Review</h3>
              <div class="col-12">
              <img src="<?php echo base_url().$paquete->img;?>" class="product-image" alt="Product Image">
              </div>              
            </div>            
            <div class="col-12 col-sm-6">
            <form action="<?php echo base_url();?>reserva/agregar" method="POST">
            
              <h3 class="my-3"><?php echo $paquete->nombre;?></h3>              
              <?php if(!empty($detalles)):?>                       
                <?php foreach($detalles as $detalle):?>
                  <p><?php echo $detalle->cantidad.' '.$detalle->nombre.' '.$detalle->descripcion?></p>
                  <?php endforeach;?>
              <?php endif; ?> 
              <hr>
              <h4>Colores de Vestuario <small>Selecciona una</small></h4>
              <div class="btn-group btn-group-toggle" data-toggle="buttons">
                <label class="btn btn-default text-center active">
                  <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked>
                  Verde
                  <br>
                  <i class="fas fa-circle fa-2x text-green"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a2" autocomplete="off">
                  Azul
                  <br>
                  <i class="fas fa-circle fa-2x text-blue"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a3" autocomplete="off">
                  Purpura
                  <br>
                  <i class="fas fa-circle fa-2x text-purple"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a4" autocomplete="off">
                  Red
                  <br>
                  <i class="fas fa-circle fa-2x text-red"></i>
                </label>
                <label class="btn btn-default text-center">
                  <input type="radio" name="color_option" id="color_option_a5" autocomplete="off">
                  Orange
                  <br>
                  <i class="fas fa-circle fa-2x text-orange"></i>
                </label>
              </div> 

              <div class="bg-gray py-2 px-3 mt-4">
                <h2 class="mb-0" >
                <?php echo $paquete->precio;?>
                </h2>
                <input type="hidden" name="total" id="total" value="<?php echo $paquete->precio;?>">
                <input type="hidden" name="id_paquete" id="id_paquete" value="<?php echo $paquete->id_paquete;?>">
                <h4 class="mt-0">
                  <small>Precio en Bs</small>
                </h4>
              </div>
              
              <div class="mt-4 row">
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
                            <label for="humor">Selecccion de Chistes:</label>
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
              <div class="form-group row mt-4">   
                <div class="col-md-6">
                  <label for="direccion">Direccion del evento</label>
                  <input type="text" class="form-control" name="direccion" id="direccion" required>
                </div>
                <div class="col-md-3">
                  <label for="contacto">Contacto:</label>
                  <input type="text" class="form-control" name="contacto" id="contacto" required>
                </div>
              </div>
              <div class="form-group row mt-4">                                                   
                  <div class="col-md-3">
                    <label for="fecha">Fecha del Evento:</label>
                    <input type="date" class="form-control" name="fecha" id="fecha" required>
                  </div> 
                  <div class="col-md-3">
                    <label for="comprobante">Comprobante:</label>                                                    
                    <select name="comprobante" id="comprobante" class="form-control" required>
                        <option value="">Seleccione...</option>                      
                        <?php $dataComprobante = $comprobante->id_comprobante.'*'.$comprobante->cantidad.'*'.$comprobante->serie;?>
                        <option value="<?php echo $dataComprobante;?>"><?php echo $comprobante->nombre ;?></option>  
                      
                    </select>                                                  
                    <input type="hidden" id="idcomprobante" name="idcomprobante">                   
                  </div>                                                
                  <div class="col-md-3">
                    <label for="">Serie:</label>
                    <input type="text" class="form-control" name="serie" id="serie" readonly>
                    </div>
                    <div class="col-md-3">
                    <label for="">Numero:</label>
                        <input type="text" class="form-control" name="numero"  id="numero" readonly>
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

