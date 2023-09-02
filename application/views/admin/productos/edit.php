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
              <li class="breadcrumb-item active">Producto</li>
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
          <div class="col-12">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">    
                
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Producto</h3>
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
              <form action="<?php echo base_url();?>productos/update" method="POST">              
                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" name="idProducto" value="<?php echo $producto->id_producto; ?>">
                  </div>
                  <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" placeholder="nombre" name="nombre" value="<?php echo $producto->nombre; ?>">
                  </div>
                  <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input type="text" class="form-control" placeholder="Descripcion" name="descripcion" value="<?php echo $producto->descripcion; ?>">
                  </div>                 
                  <div class="form-group">
                    <label for="precio">Precio</label>
                    <input type="text" class="form-control" placeholder="precio" name="precio" value="<?php echo $producto->precio; ?>">
                  </div>
                  <div class="form-group">
                    <label for="idCategoria">Categoria</label>
                    <select type="text" class="form-control" placeholder="categoria" name="idCategoria">                      
                      <?php foreach($categorias as $categoria):?>
                        <?php if($categoria->id_categoria == $producto->id_categoria):?>
                                <option value="<?php echo $categoria->id_categoria?>" selected> <?php echo $categoria->nombre;?></option>
                        <?php else:?>
                          <option value="<?php echo $categoria->id_categoria?>"> <?php echo $categoria->nombre;?></option>
                          <?php endif;?>
                      <?php endforeach?>
                    </select>  
                  </div>            
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Actualizar</button>
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