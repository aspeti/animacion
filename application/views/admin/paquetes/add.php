<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Paquete</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Paquete</li>
              <li class="breadcrumb-item active">Agregar</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10">

            <div class="card">
              <!-- /.card-header -->
              <div class="card-body">    
                
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Paquete</h3>
              </div>              
              <!-- /.card-header -->

              <!-- form start -->
       
                <!-- Content Wrapper. Contains page content -->
                <div class="container mt-3">
                    <!-- Content Header (Page header) -->             
                    <!-- Main content -->
                    <section class="content">
                        <!-- Default box -->
                        <div class="box box-solid">
                            <div class="box-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                        <form action="<?php echo base_url();?>paquetes/agregar" method="POST" class="form-horizontal" onsubmit=" return validarForm();" enctype="multipart/form-data">
                                            <div class="form-group row">                                                  
                                                <div class="col-md-3">
                                                    <label for="nombre">Nombre</label>
                                                    <input type="text" class="form-control" placeholder="Nombre del paquete" name="nombre">
                                                </div>   
                                                <div class="col-md-3">
                                                    <label for="descripcion">Descripcion</label>
                                                    <input type="text" class="form-control" placeholder="Descripcion" name="descripcion">
                                                </div> 
                                                <!--div class="form-group">
                                                    <label for="archivo">Seleccione imagen</label>
                                                    <input type="file" class="form-control-file" id="imagen" name="imagen">
                                                </!div--> 
                                                <div class="form-group">
                                                    <label for="customFile">Seleecione imagen</label>
                                                    <div class="input-group">
                                                    <div class="custom-file">
                                                        <input type="file" class="custom-file-input" id="customFile" name="customFile">
                                                        <label class="custom-file-label" for="customFile">Seleccionar Archivo</label>
                                                    </div>                     
                                                    </div>
                                                </div>
                                            </div>                                          
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <label for="categoria">Categoria</label>
                                                        <select  class="form-control" name="categoria" id="categoria" style="width: 100%;"> 
                                                            <option value="1">EXCLUSIVO</option>                                                            
                                                            <option value="2">VIP</option> 
                                                            <option value="3">NORMAL</option>  
                                                            <option value="4">ECONOMICO</option>                                                              
                                                        </select>  
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="producto">Productos</label>
                                                        <select  class="form-control select2bs4" name="producto" id="producto" style="width: 100%;">
                                                        <option value="selected">Seleccione...</option> 
                                                            <?php foreach($productos as $producto): ?>                                                                
                                                                <?php $dataProducto = $producto->id_producto.'*'.$producto->nombre.'*'.$producto->descripcion.'*'.$producto->precio;?>
                                                                <option value="<?php echo $dataProducto;?>"><?php echo $producto->nombre."-".$producto->precio." Bs." ;?></option>  
                                                            <?php endforeach;?>
                                                        </select>  
                                                    </div>
                                                    <div class="col-md-2">
                                                        <label for="">&nbsp;</label>
                                                        <button id="btn-agregar" type="button" class="btn btn-success btn-flat btn-block"><span class="fa fa-plus"></span> Agregar</button>
                                                    </div>
                                                </div>
                                            </div>
                                                          
                                            <table id="tbventas" class="table table-bordered table-striped table-hover">
                                                <thead>
                                                    <tr>                                                      
                                                        <th>Nombre</th>
                                                        <th>Descripcion</th>  
                                                        <th>Precio Bs.</th>                                                      
                                                        <th>Cantidad</th>
                                                        <th>Importe Bs.</th>
                                                        <th>Acciones</th>
                                                    </tr>
                                                </thead>
                                                <tbody id="tbody_detalle">
                                                
                                                </tbody>
                                            </table>

                                            <div class="form-group row">
                                                <!--div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Subtotal:</span>
                                                        <input type="text" class="form-control" placeholder="0.00" name="subtotal" id="subtotal" readonly="readonly">
                                                    </div>
                                                </!--div>
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">IGV:</span>
                                                        <input type="text" class="form-control" placeholder="Username" name="igv" readonly="readonly">
                                                    </div>
                                                </div>
                                                <div-- class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Descuento:</span>
                                                        <input type="text" class="form-control" placeholder="Username" name="descuento" value="0.00" readonly="readonly">
                                                    </div>
                                                </div-->
                                                <div class="col-md-3">
                                                    <div class="input-group">
                                                        <span class="input-group-addon">Total Bs:</span>
                                                        <input type="text" class="form-control" placeholder="0.00" name="txttotal" id="txttotal"  readonly="readonly">
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="form-group">
                                                <div class="col-md-12">
                                                    <button type="submit" class="btn btn-success btn-flat">Guardar</button>
                                                </div>                                                
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- /.box-body -->
                        </div>
                        <!-- /.box -->
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->              
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

  <script type="text/javascript">
 var arr_ids = []; 

 document.addEventListener("DOMContentLoaded", function(event) {

    //Initialize Select2 Elements
    $('.select2').select2()  //to select and search products
    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })


///----------------add info to Agregar button when product change
    $("#producto").on("change", function(){
      option = $(this).val() // if option is changed
      if( option!=""){      
        $("#btn-agregar").val(option); //acording to array in split 
      }else{
        $("#btn-agregar").val(null); //acording to array in split   
      }
    })

    $('#btn-agregar').click(function(){
        let productData = $(this).val();
        infoProducto = productData.split("*");
        let id_producto = infoProducto[0];       
        let nombre = infoProducto[1];
        let descripcion = infoProducto[2];
        let precio = infoProducto[3];        
       // console.log('id_producto:'+id_producto+' codigo:'+codigo+' nombre:'+nombre+' precio:'+precio+' stock:'+stock);
        if(id_producto=='')
          return;
        if( arr_ids.indexOf(id_producto) > -1 ){
            setCantidad(id_producto,precio,true);
        }
        else{

            let fila = getRowDetalle(id_producto,nombre,descripcion,precio);
            $('#tbody_detalle').append(fila);

        }
        calcularTotal();

    });

  });

  function getRowDetalle(id,nombre,descripcion,precio){
    let html = '<tr id="fila_'+id+'">';
    html+='<td><input type="hidden" name="idcodigo[]" value="'+id+'"/>'+nombre+'</td>';
    html+='<td><input type="hidden" name="iddescripcion[]" value="'+id+'"/>'+descripcion+'</td>';
    html+='<td><input type="hidden" name="precios[]" value="'+precio+'"/>'+precio+'</td>';
    //html+='<td><input type="hidden" name="stock[]" value="'+stock+'"/>'+stock+'</td>';
    html+='<td><input id="cantidad_'+id+'" name="cantidad[]" type="number" value="1" min="1" max="5" onkeyup="setCantidad('+id+','+precio+')" onchange="setCantidad('+id+','+precio+')"/></td>';
    html+='<td><input  type="text" id="txt_subtotal_'+id+'" name="txt_subtotal[]" class="txt_subtotal disable" value="'+precio+'" readonly/></td>';
    html+='<td><button class="btn btn-danger" type="button" onclick="eliminarDetalle('+id+')"><i class="fa fa-trash"></i> </button></td>';
    html+='</tr>';
    arr_ids.push(id);

    return html;
  }

  function eliminarDetalle(id){
      if(confirm('Está seguro que desea eliminar este detalle?')){
        $('#fila_'+id).remove();
        calcularTotal();
        let idx = arr_ids.indexOf(id);
        arr_ids.splice(idx,1);
      }
  }

  function calcularTotal(){
      let total = 0;
      $('.txt_subtotal').each(function(){
          let val = parseFloat($(this).val());
          total += val;
      });

      $('#txttotal').val(total.toFixed(2));
  }

  function setCantidad(id,precio,aumentar = false){

      let temp_cant = $('#cantidad_'+id).val();
      if(aumentar)
      temp_cant++;
      let subt = temp_cant * precio;
      $('#cantidad_'+id).val(temp_cant);
      $('#txt_subtotal_'+id).val(subt.toFixed(2));
      calcularTotal();
  }

  function validarForm(){
      isValid = true;
      let nfilas = $('#tbody_detalle tr').length;
      console.log(nfilas);
      if(nfilas == 0){
          isValid = false;
          alert('Debe agregar al menos un detalle');
      }
      return isValid;
  }

</script>
