<form action="<?php echo base_url();?>reserva/saveConfirmar/" method="POST">
  <div class="card-body">                                  
            <div class="form-group">
            <label for="confirmacion">Seleccione la opcion </label>
              <select class="form-control select2" style="width: 100%;" name="confirmacion" id="confirmacion">                                              
                  <option value='0' selected="selected">Por Confirmar</option>
                  <option value='1'>Confirmado</option>
                  <option value='2'>Cancelado</option>         
              </select>
            </div>                                      
            <input type="hidden" class="form-control" name="idreserva" id="idreserva" value="<?php echo $id_reserva ;?>">

            <div class="d-flex  justify-content-between">
                  <button type="submit" class="btn btn-primary">Actualizar</button> 
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>  
            </div>                                                                        
  </div> 

                                    
</form>
