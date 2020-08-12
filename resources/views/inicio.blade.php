@extends('principal')
@section('body')
      <div class="row">
      <div class="col-md-1">
          </div>
        <div class="col-md-5" data-aos="fade-up">
          <div>
            <h1>
              <br>
              <br> BIENVENIDO</h1>
            <h2>Elige la opción <b>"Abrir Caja"</b> si quieres canjear tu compra</h2>
            <a href="{{route('misterybox.index')}}" class="download-btn"> Abrir Caja</a>
            <a href="{{route('adminmisterybox.index')}}" class="download-btn"> Administrar</a>
          </div>
        </div>
        <div class="col-md-6" data-aos="fade-up">
          <img src="assets/img/banner.jpg" class="img-fluid" alt="">
        </div>
      </div>
@endsection
