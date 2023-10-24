<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Editar</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paquete</li>
              <li class="breadcrumb-item active">Editar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">    
                
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Paquete</h3>
              </div>              
              <!-- /.card-header -->

              <!-- /.Alertr -->
              <?php if($this->session->flashdata("error")):?>
              <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dimiss="alert" aria-hidden="true">&times;</button>
                <p><i class="icon fa fa-ban"><?php $this->session->flashdata("error");?></i></p>
              </div>
              <?php endif;?>
              <!-- /.Alertr -->
         

              <!-- form start -->    
              <form action="<?php echo base_url();?>paquetes/update" method="POST" enctype="multipart/form-data">              
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="idPaquete" value="<?php echo $paquete->id_paquete; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre *</label>
                    <input type="text" class="form-control <?php echo !empty(form_error("nombre")) ? 'is-invalid':'';?>" placeholder="nombre" id="nombre" name="nombre"
                       value="<?php echo !empty(form_error("nombre")) ? set_value("nombre") : $paquete->nombre; ?>">
                    <?php echo form_error("nombre","<span class='help-block'>","</span>")?>   
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" value="<?php echo $paquete->descripcion; ?>">
                  </div>                
               
                  <div class="form-group">
                    <label for="categoria">Categoria</label>
                    <select type="text" class="form-control" placeholder="categoria" name="categoria">
                          <option value="<?php echo $paquete->categoria;?>" selected> 
                          <?php if($paquete->categoria == 1){ echo "EXCLUSIVO";?>
                                    <?php }else if($paquete->categoria == 2){ echo "VIP";?>
                                      <?php }else if($paquete->categoria == 3){ echo "NORMAL";?>
                                        <?php }else{ echo "ECONOMICO";?>
                                          <?php };?>    
                          </option>   
                          <option value="1">EXCLUSIVO</option>                                                            
                          <option value="2">VIP</option> 
                          <option value="3">NORMAL</option>  
                          <option value="4">ECONOMICO</option>   
                  
                    </select>  
                  </div> 
                  <div class="form-group">
                    <label for="customFile">Seleecione imagen</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="customFile" name="customFile" required>
                            <label class="custom-file-label" for="customFile">Seleccionar Archivo</label>
                        </div>                     
                    </div>
                   </div>           
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
                  <a type="button" class="btn btn-danger" href="<?php echo base_url();?>paquetes/">Cancelar</a>
                </div>
              </form>
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