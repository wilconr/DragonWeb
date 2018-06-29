@extends('layouts.app')

@section('title')
	Maestros
@endsection

@section('content')

	@foreach($maestros as $maestro)
		  	
		<div class="col s12 m6 l4 xl3">
		  <div class="card center-align">
		    <div class="card-image">
		      <img style="height: 100px; width: 100px; background-color: #efefef; margin-top: 20px;" class="rounded-circle mx-auto d-block z-depth-3" src="/images/maestros/{{$maestro->avatar}}" >
		    </div>
		    <div class="card-content">
		      <span class="card-title grey-text text-darken-4 text-capitalize">{{$maestro->nombres}}</span>
		      <span class="card-title grey-text text-darken-4 text-capitalize">{{$maestro->apellidos}}</span>
		    </div>
		    <div class="card-action">
		      <a href="/maestros/{{$maestro->nick_name}}" class="waves-effect waves-light btn light-blue darken-4 white-text">Ver mas...</a>
		    </div>
		  </div>
		</div>
		
		  
	@endforeach

@endsection