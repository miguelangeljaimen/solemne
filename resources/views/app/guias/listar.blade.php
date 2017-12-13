@extends('app.layouts.template')

@section('content')


<small><table class="table table-responsive"> 
  <thead>
    <tr>
      <th>#</th>
      <th>Rut</th>
      <th>Nombre</th>
      <th>Correo</th>
      <th>Telefono</th>
    </tr>
  </thead>
  

  <tbody>
  @foreach($clientes as $cliente)
    <tr>
      <th scope="row">{{$cliente->id}}</th>
      <th scope="row">{{$cliente->rut}}</th>
      <td><a href="clientes/{{$cliente->id}}">{{$cliente->nombre}}</a></td>
      <td>{{$cliente->correo}}</td>
      <td>{{$cliente->telefono}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $clientes->render() }}</small>

@endsection