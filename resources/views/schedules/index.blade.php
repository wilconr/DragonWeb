@extends('layouts.app')

@section('title')
	Horarios
@endsection

@section('content')

	@foreach($schedules as $schedule)
		  	
		<div class="col s12 m6 l4 xl3">
		  <div class="card center-align">
		    <div class="card-content">
		      <span class="card-title grey-text text-darken-4 text-capitalize">{{$schedule->clase}}</span>
		    </div>
		    <div class="card-action">
		      <a href="/schedules/{{$schedule->clase}}" class="waves-effect waves-light btn light-blue darken-4 white-text">Ver mas...</a>
		    </div>
		  </div>
		</div>
		
		  
	@endforeach

@endsection