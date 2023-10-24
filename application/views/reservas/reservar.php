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
              <div class="col-12 product-image-thumbs">
                <!--div class="product-image-thumb active"><img src="</?php echo base_url();?>assets/img/prod1.jpg" alt="Product Image"></!div>
                <div class="product-image-thumb" ><img src="</?php echo base_url();?>assets/img/prod2.jpg" alt="Product Image"></div>
                <div-- class="product-image-thumb" ><img src="</?php echo base_url();?>assets/img/prod3.jpg" alt="Product Image"></div-->
           
              </div>
            </div>
            
            <div class="col-12 col-sm-6">
            <form action="<?php echo base_url();?>Reserva/viewPayment" method="POST">
            
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
                <h2 class="mb-0">
                <?php echo $paquete->precio;?>
                </h2>
                <h4 class="mt-0">
                  <small>Precio en Bs</small>
                </h4>
              </div>

              <div class="mt-4">
                <label for="">Producto Adicional:</label>
                <select name="" id="" class="form-control" required>
                    <?php foreach($productos as $producto):?>
                      <?php if($producto->categoria == "Adicional"):?>
                        <option value="<?php echo $producto->id_producto; ?>"> <?php echo $producto->nombre;?></option>
                      <?php endif;?>
                    <?php endforeach;?>
                </select>  
              
                <label for="">Selecccion de Chistes:</label>
                <select name="" id="" class="form-control" required>
                    <?php foreach($productos as $producto):?>
                      <?php if($producto->categoria == "Humor"):?>
                        <option value="<?php echo $producto->id_producto; ?>"> <?php echo $producto->nombre;?></option>
                      <?php endif;?>
                    <?php endforeach;?>
                </select>     
                                                    
                <label for="">Tematica de la presentacion:</label>
                <select name="" id="" class="form-control" required>
                    <?php foreach($productos as $producto):?>
                      <?php if($producto->categoria == "Tematica"):?>
                        <option value="<?php echo $producto->id_producto; ?>"> <?php echo $producto->nombre;?></option>
                      <?php endif;?>
                    <?php endforeach;?>
                </select>   
                                                
              </div>
              <div class="form-group row mt-4">                                                   
                <div class="col-md-3">
                  <label for="">Fecha del Evento:</label>
                  <input type="date" class="form-control" name="fecha"required>
                </div>
              </div>

              <div class="mt-4 form-group">
     
                <button type="submit" class="btn btn-primary btn-lg btn-flat" >
                  <i class="fas fa-cart-plus fa-lg mr-2"></i>
                      Reservar</button>

                <div class="btn btn-success btn-lg btn-flat">                
                  Realizar Deposito
                </div>
              </div>
              <!--
              <div class="mt-4 product-share">
                <a href="#" class="text-gray">
                  <i class="fab fa-facebook-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fab fa-twitter-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-envelope-square fa-2x"></i>
                </a>
                <a href="#" class="text-gray">
                  <i class="fas fa-rss-square fa-2x"></i>
                </a>
              </div>   --->
            </form>
            </div>
            
          </div>
          <div class="row mt-4">
            <nav class="w-100">
              <div class="nav nav-tabs" id="product-tab" role="tablist">
                <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Descripcion</a>
                <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Commentarios</a>
                <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
              </div>
            </nav>
            <div class="tab-content p-3" id="nav-tabContent">
              <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Descripcion de la animacion </div>
              <div class="tab-pane fade" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">  Nulla turpis elit, consequat eu eros ac, consectetur fringilla urna. Duis gravida ex pulvinar mauris ornare, eget porttitor enim vulputate. Mauris hendrerit, massa nec aliquam cursus, ex elit euismod lorem, vehicula rhoncus nisl dui sit amet eros. Nulla turpis lorem, dignissim a sapien eget, ultrices venenatis dolor. Curabitur vel turpis at magna elementum hendrerit vel id dui. Curabitur a ex ullamcorper, ornare velit vel, tincidunt ipsum. </div>
              <div class="tab-pane fade" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab"> Citur vel. Nulla iaculis malesuada scelerisque. Praesent vel ipsum felis. Ut molestie, purus aliquam placerat sollicitudin, mi ligula euismod neque, non bibendum nibh neque et erat. Etiam dignissim aliquam ligula, aliquet feugiat nibh rhoncus ut. Aliquam efficitur lacinia lacinia. Morbi ac molestie lectus, vitae hendrerit nisl. Nullam metus odio, malesuada in vehicula at, consectetur nec justo. Quisque suscipit odio velit, at accumsan urna vestibulum a. Proin dictum, urna ut varius consectetur, sapien justo porta lectus, at mollis nisi orci et nulla. Donec pellentesque tortor vel nisl commodo ullamcorper. Donec varius massa at semper posuere. Integer finibus orci vitae vehicula placerat. </div>
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