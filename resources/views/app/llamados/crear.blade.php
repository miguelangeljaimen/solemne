@extends('app.layouts.template')

@section('content')

{!! Form::open(['route' => 'llamados.store', 'method' => 'POST', 'class' => 'form']) !!}
  <h3>Probar Llamados</h3>
  <div class="form-group">
    <label for="pcompra">Primera compra</label>
    <input type="date" class="form-control" id="pcompra" name ="pcompra" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="ucompra">última compra</label>
    <input type="date" class="form-control" id="ucompra" name="ucompra" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="total">Cantidad total</label>
    <input type="number" class="form-control" id="total" name="total" placeholder="">
  </div>
  
  <div class="form-group">
    <label for="cantucompra">cantidad ucompra</label>
    <input type="number" class="form-control" id="cantucompra" name="cantucompra" placeholder="">
  </div>
  
  
     {!! Form::submit('Crear',['class' => 'btn btn-primary']) !!}
 {!! Form::close() !!}

@endsection