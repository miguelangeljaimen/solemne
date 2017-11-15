@extends('app.layouts.template')

@section('content')
                      <div class="col-lg-7 col-md-7 mb-7">
                          <div class="card h-100">
                             
                              <div class="card-body">
                              	<h2>Llamados de hoy</h2>
                                  <h4 class="card-text">
                                  	<table class="table table-striped">
        								<thead>
   											<tr>
					      					<th>#</th>
					      					<th>Cliente</th>
					      					<th>Estado</th>
					      					<th>Acciones</th>
					    				</tr>
					  				</thead>
									<tbody>
										  
										<tr>
					      					<th scope="row">01</th>
										    <th scope="row"><a href="clientes/1">Garrido Ltd</a></th>
										    <th scope="row">PENDIENTE</th>
					 					    <td>
					 					    	<div class="btn-group  acciones" role="group" aria-label="...">
					  								<button type="button" class="btn btn-success"><i class="fa fa-phone" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-info"><i class="fa fa-info" aria-hidden="true"></i>
													</button>
					  								<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-danger"><i class="fa fa-calendar" aria-hidden="true"></i></button>
												</div>
											</td>
										</tr>


										<tr>
					      					<th scope="row">02</th>
										    <th scope="row"><a href="clientes/1">Alvaro Ltd</a></th>
										    <th scope="row">REAGENDADO</th>
					 					    <td>
					 					    	<div class="btn-group  acciones" role="group" aria-label="...">
					  								<button type="button" class="btn btn-success"><i class="fa fa-phone" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-info"><i class="fa fa-info" aria-hidden="true"></i>
													</button>
					  								<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-danger"><i class="fa fa-calendar" aria-hidden="true"></i></button>
												</div>
											</td>
										</tr>


										<tr>
					      					<th scope="row">03</th>
										    <th scope="row"><a href="clientes/1">Alvaro Garrido Ltd</a></th>
										    <th scope="row">SIN CONTACTO</th>
					 					    <td>
					 					    	<div class="btn-group  acciones" role="group" aria-label="...">
					  								<button type="button" class="btn btn-success"><i class="fa fa-phone" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-info"><i class="fa fa-info" aria-hidden="true"></i>
													</button>
					  								<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-danger"><i class="fa fa-calendar" aria-hidden="true"></i></button>
												</div>
											</td>
										</tr>


										<tr>
					      					<th scope="row">04</th>
										    <th scope="row"><a href="clientes/1">Ni idea Ltd</a></th>
										    <th scope="row">PENDIENTE</th>
					 					    <td>
					 					    	<div class="btn-group  acciones" role="group" aria-label="...">
					  								<button type="button" class="btn btn-success"><i class="fa fa-phone" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-info"><i class="fa fa-info" aria-hidden="true"></i>
													</button>
					  								<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-danger"><i class="fa fa-calendar" aria-hidden="true"></i></button>
												</div>
											</td>
										</tr>


										    
										  </tbody>
								</table></h4>
                              </div>
                              <div class="card-footer">
                                  <small class="text-muted">&#9749</small>
                              </div>
                          </div>
                      </div>

                      <div class="col-lg-5 col-md-5 mb-5">
                          <div class="card h-100">
                          <h3>Calendario</h3>
                              <img class="img-fluid" src="{{asset('plugins/inicio/img/app/calendario.png')}}" alt="">
                              <div class="card-body">
                                  
                              </div>
                              <div class="card-footer">
                                  
                              </div>
                          </div>
                      </div>
@endsection