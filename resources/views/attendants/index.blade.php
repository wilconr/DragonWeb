@extends('layouts.app')

@section('title')
	Acudientes
@endsection

@section('content')

	@foreach($attendants as $attendant)
		  	
		<div class="col s12 m6 l4 xl3">
		  <div class="card center-align">
		    <div class="card-content">
		      <span class="card-title grey-text text-darken-4 text-capitalize">{{$attendant->nombres}}</span>
		      <span class="card-title grey-text text-darken-4 text-capitalize">{{$attendant->apellidos}}</span>
		    </div>
		    <div class="card-action">
		      <a href="/attendants/{{$attendant->nick_name}}" class="waves-effect waves-light btn light-blue darken-4 white-text">Ver mas...</a>
		    </div>
		  </div>
		</div>
		
		  
	@endforeach

@endsection