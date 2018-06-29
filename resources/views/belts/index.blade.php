@extends('layouts.app')

@section('title')
	Cinturones
@endsection

@section('content')

	@foreach($belts as $belt)
		  	
		<div class="col s12 m6 l4 xl3">
		  <div class="card center-align">
		    <div class="card-image">
		      <img style="height: 100px; width: 100px; background-color: #efefef; margin-top: 20px;" class="rounded-circle mx-auto d-block z-depth-3" src="/images/belts/{{$belt->avatar}}" >
		    </div>
		    <div class="card-content">
		      <span class="card-title grey-text text-darken-4 text-capitalize">{{$belt->color}}</span>
		    </div>
		    <div class="card-action">
		      <a href="/belts/{{$belt->color}}" class="waves-effect waves-light btn light-blue darken-4 white-text">Ver mas...</a>
		    </div>
		  </div>
		</div>
		
		  
	@endforeach

@endsection