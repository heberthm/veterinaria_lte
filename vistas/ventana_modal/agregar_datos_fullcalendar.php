
 <!--=====================================

MODAL AGREGAR CLIENTE A FULLCALENDAR

======================================-->


<style type="text/css">
    

.modal-backdrop.in { 
  z-index: auto; 
  background-color: transparent;
}


</style>

                       

  <div id="modalAgregarCliente" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static">

        <div class="modal-dialog">
            <form method="POST" id="user_form">
                <div class="modal-dialog modal-800">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title"><span class="fa fa-user"></span> Agregar cliente</h4>
                        </div>
                        <div class="modal-body">

                            <div class="col-lg-12">
                                <div id="info1"></div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Cédula">Cédula</label>
                                    <input name="TxtCedula" id="TxtCedula" type="text" onkeyup="format(this)" class="form-control text-capitalize"  autofocus onkeypress="return handleEnter(this, event)" required autocomplete="off">
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="Nombre">Nombre</label>
                                    <input name="TxtNombre" id="TxtNombre" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="telefono">Teléfono</label>
                                    <input name="TxtTelefono" id="TxtTelefono" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Celular">Celular</label>
                                    <input name="TxtCelular" id="TxtCelular" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-6">

                                <div class="form-group">
                                    <label for="direccion">Dirección</label>
                                    <input name="TxtDireccion" id="TxtDireccion" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="Barrio">Barrio</label>
                                    <input name="TxtBarrio" id="TxtBarrio" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <div class="col-md-9">
                                <div class="form-group">
                                    <label for="Email">Email</label>
                                    <input name="TxtEmail" id="TxtEmail" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" autocomplete="off" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                            </div>

                            <!--

                         <div class="col-md-3">
                                    <div class="form-group">
                                          <div class="estado_cliente"> <strong> Estado</strong></div>   
                                          <div>   </div>                                    
                                        <input type="checkbox" name="estado_cliente" id="estado_cliente" checked data-toggle="toggle" data-width="100" data-size="normal" data-on="Activo" data-off="Inactivo"   data-onstyle="success"   tabindex="8">

                                         <input type="hidden" name="hidden_estado" id="hidden_estado" value="Activo" />

                                    </div>
                          </div>          
                         
                          -->

                            <div class="col-md-3">
                                    <div class="form-group">
                                     <label for="Estado_cliente">Estado</label>

                                     <select  required  name="CboEstado" id="CboEstado"  class="form-control"   /> 
                                          <option value=""></option>
                                          <option value="Activo">Activo</option>
                                          <option value="Inactivo">Inactivo</option>
                                    </select>

                                   </div>
                          </div>

                        

                            <div class="row">
                                <div class="col-lg-12">

                                    <p><font style=" font-size:18px" color="#003399">Datos de la mascota</font></p>

                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Nombre_mascota">Nombre mascota </label>
                                            <input name="TxtNombre_mascota" id="TxtNombre_mascota" type="text" class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" autofocus autocomplete="off" value="<?php echo  @$direccion ?>" required>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Especie">Especie</label>
                                            <input name="TxtEspecie" id="TxtEspecie" type="tel"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Color">Color</label>
                                            <input name="TxtColor" id="TxtColor" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off">

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="CboSexo">Sexo</label>

                                            <select required name="CboSexo" id="CboSexo" class="form-control" />
                                            <option value=""></option>
                                            <option value="Macho">Macho</option>
                                            <option value="Hembra">Hembra</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Raza">Raza</label>
                                            <input name="TxtRaza" id="TxtRaza" type="text"  class="form-control text-capitalize" onkeypress="return handleEnter(this, event)" required autocomplete="off">

                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Peso">Peso</label>
                                            <input name="TxtPeso" id="TxtPeso" class="form-control" onkeypress="return handleEnter(this, event)" required autocomplete="off">
                                        </div>
                                    </div>

                                    <div class="col-md-3">
                                        <div class="form-group">
                                            <label for="Edad">Edad</label>
                                            <input name="TxtEdad" id="TxtEdad" type="text"  class="form-control" onkeypress="return handleEnter(this, event)" required autocomplete="off">

                                        </div>
                                    </div>

                                </div>
                            </div>

                            <br>

                            <br>

                            <div class="modal-footer">
                              
                                <input type="submit" name="BtnGuardar" id="BtnGuardar" class="btn btn-primary" value="Guardar" />
                                <button type="button" id="cerrar_modal" class="btn btn-default" data-dismiss="modal"> Cerrar</button>
                            </div>
                        </div>
                 </form>
              </div>
          </div>


 