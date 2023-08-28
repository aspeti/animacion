<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
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
              <div class="card-header">                
                <div class ="col-md-12" >
                  <a href="<?php echo base_url();?>categorias/add" type="button" class="btn btn-block btn-primary"> <!-- quietar el btn-block---->
                    <span class="fa fa-plus"></span>  Agregar
                  </a>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">           

                <table id="lista" class="table table-bordered table-striped">
                  <thead>                 
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php if(!empty($categorias)):?>
                      <?php foreach($categorias as $categoria):?>
                  <tr>
                    <td><?php echo $categoria->id_categoria;?></td>
                    <td><?php echo $categoria->nombre;?></td>
                    <td><?php echo $categoria->descripcion;?></td>
                    <td>
                        <div class="btn-group">
                          <a class="btn btn-primary" href="#" class="btn bt-info"><span class="fa fa-eye"></span></a>
                          <a class="btn btn-warning" href="<?php echo base_url();?>categorias/edit/<?php echo $categoria->id_categoria;?>" class="btn bt-info"><span class="fa fa-pen"></span></a>
                          <a class="btn btn-danger" href="#" class="btn bt-info"><i class="fa fa-trash"></i></a>
                        </div>
                    </td>  
                  </tr>  
                  <?php endforeach;?>
                  <?php endif; ?>                                               
                  </tbody>                                 
                 
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Acciones</th>
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