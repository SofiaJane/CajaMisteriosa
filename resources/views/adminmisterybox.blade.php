@extends('principal')
@section('body')

      <div class="col-md-2">
    </div>
    <div class="col-md-8">
    
<form id="usuario_loggeo"  role="form" method="post" action="#">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-dialog modal-md" >
              <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title">LOGGEO</h4>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="" value="">
                    <div class="row">
                        <div class="col-md-12"> 
                            <div class="form-group" align="center">
                            <img src="assets/img/logg.png" id="imagen" width="300" height="200" >
 </div>
                        </div>
                    </div>
                    <div class="row">
                            <div class="col-md-12"> 
                                <div class="form-group">
                                    <label for="destino">USUARIO</label>
                                    <input type="text" class="form-control" id="usuario" name="usuario" placeholder="INGRESE SU USUARIO" required>
                                </div>
                            </div>                            
                    </div>
                    <div class="row">
                            <div class="col-md-12"> 
                                <div class="form-group">
                                    <label for="destino">CONTRASEÑA</label>
                                    <input type="pasword" class="form-control" id="pas" name="pas" placeholder="INGRESE CONTASEÑA" required>
                                </div>
                            </div>                            
                    </div>
                  
                </div>
                <div class="modal-footer">
                <a href="{{URL::to('/')}}" class="btn btn-secondary pull-left" data-dismiss="modal">CANCELAR</a>
                <!--  <input type="submit" class="btn btn-warning pull-right" value="GUARDAR">-->
                  <a class="btn btn-warning btn-right" href="#" data-toggle="modal" data-target="#modal-total" id="total">INGRESAR</a>

                </div>
              </div>
              <!-- /.modal-content -->
            </div>
        </form>
    </div>
        <div class="col-md-2">
    </div>

    <div class="modal fade" id="modal-total" >
  <form id="total-final"  role="form" method="get" action="{{route('misterybox.store')}}">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <div class="modal-dialog modal-lg" >
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title">LISTA DE GANADORES</h4>
                  </div>
                  <div class="modal-body">
                     
                  <div class="row">
    <div class="col-md-12">
        <div class="box box-success">
                <div class="box-header with-border">     
                  <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="box-body">                      
                              <table id="admin" class="display nowrap" style="width:100%">
                                      <thead>                                            
                                            <tr>
                                                    <!--1--><th>NOMBRE Y APELLIDO</th>                                
                                                    <!--2--><th>CARNET DE IDENTIDAD</th>
                                                    <!--3--><th>NÚMERO DE TELÉFONO</th>
                                                    <!--4--><th>CORREO ELECTRONICO</th>
                                                    <!--5--><th>NÚMERO FACTURA</th>
                                                    <!--6--><th>MONTO EN BS</th>
                                                    <!--7--><th>CIUDAD</th>
                                                    <!--8--><th>PREMIO GANADO</th>
                                                    <!--9--><th>FECHA</th>
                                                    <!--10--><th>HORA</th>
                                            </tr>
                                      </thead>
                                      <tbody>
                                        
                                      </tbody>
                              </table>
                    
                     
                </div>
                
        </div>
      </div>
    </div>
                  
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default pull-left" data-dismiss="modal">ACEPTAR</button>
                  </div>
                </div>
              </div>
          </form>
</div>
  
        @endsection
