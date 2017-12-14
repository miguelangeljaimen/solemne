@extends('app.layouts.template')

@section('content')

<form>
  <h3>Crear Cliente</h3>
  <div class="form-group">
    <label for="nombre">Cliente_id</label>
    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="producto">producto</label>
    <input type="text" class="form-control" id="rut" placeholder="producto">
  </div>
  
  
  
  <button type="submit" class="btn btn-default">Crear</button>
</form>
                      
@endsection