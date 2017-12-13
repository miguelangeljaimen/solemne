@extends('app.layouts.template')

@section('content')

<form>
  <h2>Editar Cliente</h2>
  <div class="form-group">
    <label for="nombre">nombre</label>
    <input type="text" class="form-control" id="nombre" placeholder="Nombre">
  </div>
  <div class="form-group">
    <label for="email">rut</label>
    <input type="text" class="form-control" id="rut" placeholder="Rut">
  </div>
  
  <div class="form-group">
    <label for="rSocial">razon social</label>
    <input type="text" class="form-control" id="rSocial" placeholder="Razon social">
  </div>
  
  <div class="form-group">
    <label for="telefono">Teléfono</label>
    <input type="text" class="form-control" id="telefono" placeholder="Telefono">
  </div>
  
  <div class="form-group">
    <label for="email">Correo</label>
    <input type="email" class="form-control" id="rut" placeholder="Email">
  </div>
  
  <div class="form-group">
    <label for="rLegal">Representante Legal</label>
    <input type="text" class="form-control" id="rLegal" placeholder="Representante Legal">
  </div>
  
  <h1>comuna ID</h1>
  
  <div class="form-group">
    <label for="direccion">Dierección</label>
    <input type="text" class="form-control" id="direccion" placeholder="Dirección">
  </div>
  
  <button type="submit" class="btn btn-default">Crear</button>
</form>

@endsection