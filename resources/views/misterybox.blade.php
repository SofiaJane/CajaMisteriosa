@extends('principal')
@section('body')
      <div class="col-md-2">
    </div>
    <div class="col-md-8">
    
<form id="usuario_registro"  role="form" method="post" action="#">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-dialog modal-md" >
              <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">REGISTRO DATOS</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="" value="">
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label for="vale">NOMBRES Y APELLIDOS</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" placeholder="INGRESE NOMBRE(S) Y APELLIDO(S)">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                    <label for="destino">CARNET DE IDENTIDAD</label>
                                    <input type="number" class="form-control" id="ci" name="ci" placeholder="NÚMERO CI" required>
                                </div>
                            </div>
                            <div class="col-md-6"> 
                                        <div class="form-group">
                                            <label for="destino">NÚMERO DE TELÉFONO</label>
                                            <input type="number" class="form-control" id="telefono" name="telefono" placeholder="NUMERO DE TELÉFONO">
                                        </div>
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="form-group">
                                <label for="vale">CORREO ELECTRONICO</label>
                                <input type="email" class="form-control" id="mail" name="mail" placeholder="INGRESE SU CORREO">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                    <div class="col-md-4"> 
                                        <div class="form-group">
                                            <label for="destino">NRO FACTURA</label>
                                            <input type="number" class="form-control" id="factura" name="factura" placeholder="FACTURA">
                                        </div>
                            </div>
                            <div class="col-md-4"> 
                                        <div class="form-group">
                                            <label for="destino">MONTO EN Bs</label>
                                            <input type="number" class="form-control" id="monto" name="monto" placeholder="MONTO">
                                        </div>
                            </div>
                            <div class="col-md-4"> 
                                        <div class="form-group">
                                            <label for="destino">CIUDAD</label>
                                            <select id="ciudad"  name="ciudad" class="form-control select2 input-sm " style="width:100%">
                                            <option value="LA PAZ">LA PAZ</option>
                                                <option value="SANTA CRUZ" >SANTA CRUZ</option>
                                                <option value="COCHABAMBA" >COCHABAMBA</option>
                                                <option value="BENI" >BENI</option>
                                                <option value="PANDO" >PANDO</option>
                                                <option value="SUCRE" >SUCRE</option>
                                                <option value="TARIJA" >TARIJA</option>
                                                <option value="POTOSI" >POTOSI</option>
                                                <option value="ORURO" >ORURO</option>
                                            </select>                                        
                                            
                                        </div>
                            </div>
                    </div>

                    <div class="form-group" id="registro_excepcion">
                    
                    </div>
                </div>
                <div class="modal-footer">
                <a href="{{URL::to('/')}}" class="btn btn-secondary pull-left" data-dismiss="modal">CANCELAR</a>
                <!--  <input type="submit" class="btn btn-warning pull-right" value="GUARDAR">-->
                  <a class="btn btn-warning btn-right" href="#" data-toggle="modal" data-target="#modal-premio" id="premio">REGISTRAR</a>

                </div>
              </div>
              <!-- /.modal-content -->
            </div>
        </form>
    </div>
        <div class="col-md-2">
    </div>

    <script src="{{asset('assets/js/misterio.js')}}"></script>

    <div class="modal fade" id="modal-premio" >
  <form id="premio-final"  role="form" method="get" action="{{route('misterybox.store')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="modal-dialog modal-md" >
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">PREMIO</h4>
                  </div>
                  <div class="modal-body">
                      <input type="hidden" id="carnet_f" value="">
                      <input type="hidden" id="tel_f" value="">
                      <input type="hidden" id="mail_f" value="">
                      <input type="hidden" id="factura_f" value="">
                      <input type="hidden" id="monto_f" value="">
                      <input type="hidden" id="premio_f" value="">
                      <input type="hidden" id="ciudad_f" value="">

                      <div class="row">
                          <div class="col-md-6"> 
                              <div class="form-group">
                                  <label for="vale">SR(A):</label>
                                   <br>
                                   <input type="text" class="form-control" id="nombre_f" name="nombre_f" disabled>
                                    <br>                          
                               </div>
                               <label for="vale">USTED SE GANO -></label>
                          </div>
                              <div class="col-md-6"> 
                                  <div class="form-group">
                                      <img src="assets/img/imagen1.png" id="imagen" width="200" height="150">
</img>                                
                              </div>
                          </div>                                                                   
                      </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">CANCELAR</button>
                    <input type="submit"  class="btn btn-primary" value="OK">
                  </div>
                </div>
              </div>
          </form>
</div>
        @endsection
