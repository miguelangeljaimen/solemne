@extends('app.layouts.template')

@section('content')
                      <div class="col-lg-5 col-md-5 mb-5">
                          <div class="card h-100">
                              <div class="card-body">
                              	<h2>Garrido ltda</h2>
                                  <h3>Repesentante: Alvaro Garrido</h3>
                                  <h3>Correo: agarrido@ciisa.cl</h3>
                                  <h3>Fono: +569 627354236</h3>
                                  <h3>Dirección: Alameda 123, Santiago</h3>
                              </div>

                              <div class="card-footer">
                              <div class="btn-group  acciones" role="group" aria-label="...">
					  								<button type="button" class="btn btn-success"><i class="fa fa-phone" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-info"><i class="fa fa-info" aria-hidden="true"></i>
													</button>
					  								<button type="button" class="btn btn-warning"><i class="fa fa-pencil" aria-hidden="true"></i></button>
					  								<button type="button" class="btn btn-danger"><i class="fa fa-calendar" aria-hidden="true"></i></button>
												</div>    
                              </div>
                          </div>
                      </div>
                      <div class="col-lg-5 col-md-5 mb-5">
                          <div class="card h-100">
                          <h3>Compras últimos 12 meses</h3>
                              <img class="img-fluid" src="{{asset('plugins/inicio/img/app/grafico.png')}}" alt="">
                              <div class="card-body">
                                  
                              </div>
                              <div class="card-footer">
                                  
                              </div>
                          </div>
                      </div>

@endsection