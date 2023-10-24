  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paquetes disponibles</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paquetes</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card card-solid">
        <div class="card-body pb-0">
          <div class="row">
              <?php if(!empty($paquetes)):?>                       
                <?php foreach($paquetes as $paquete):?>

                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                      <div class="card bg-light d-flex flex-fill">
                        <div class="card-header text-muted border-bottom-0">
                          Paquete disponible
                        </div>
                        <div class="card-body pt-0">
                          <div class="row">
                            <div class="col-7">
                              <h2 class="lead"><b><?php echo $paquete->nombre;?></b></h2>
                              <p class="text-muted text-sm"><b>Descripcion: </b> <?php echo $paquete->descripcion;?> </p>
                              <ul class="ml-4 mb-0 fa-ul text-muted">
                                <li class="small"><span class="fa-li"></span> Contiene: Juegoss, baile, musica</li>
                                <li class="small"><span class="fa-li">                                  
                                        </span> <?php if($paquete->categoria == 1){ echo "Categoria: EXCLUSIVO";?>
                                                  <?php }else if($paquete->categoria == 2){ echo "Categoria: VIP";?>
                                                    <?php }else if($paquete->categoria == 3){ echo "Categoria: NORMAL";?>
                                                      <?php }else{ echo "Categoria: ECONOMICO";?>
                                                        <?php };?> 
                                </li>
                              </ul>
                            </div>
                            <div class="col-5 text-center">
                                  <!--img src="</?php echo base_url();?>assets/img/paquetes/almohada1.jpg" alt="user-avatar" class="img-circle img-fluid"-->
                                  <div class="product-image-thumb" ><img src="<?php echo base_url().$paquete->img;?>" alt="Product Image"></div> 
                                  
                            </div>
                          </div>
                        </div>
                        <div class="card-footer">
                          <div class="text-right">
                            <a href="#" class="btn btn-sm bg-teal">
                              <i class="fas fa-comments"></i>
                            </a>
                            <a href="<?php echo base_url();?>reserva/reservar" class="btn btn-sm btn-primary">
                              <i class="fas fa-user"></i> Ver Detalles
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                <?php endforeach;?>
              <?php endif; ?> 
          </div>
        </div>
        <!-- /.card-body 
        <div class="card-footer">
          <nav aria-label="Contacts Page Navigation">
            <ul class="pagination justify-content-center m-0">
              <li class="page-item active"><a class="page-link" href="#">1</a></li>
              <li class="page-item"><a class="page-link" href="#">2</a></li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">6</a></li>
              <li class="page-item"><a class="page-link" href="#">7</a></li>
              <li class="page-item"><a class="page-link" href="#">8</a></li>
            </ul>
          </nav>
        </div>-->
        <!-- /.card-footer -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->