@extends('layouts.app')

@section('title')
	Alumno
@endsection

@section('content')

	@foreach($students as $student)
		  	
		<div class="col s12 m6 l4 xl3">
		  <div class="card center-align">
		    <div class="card-image">
		      <img style="height: 100px; width: 100px; background-color: #efefef; margin-top: 20px;" class="rounded-circle mx-auto d-block z-depth-3" src="/images/students/{{$student->avatar}}" >
		    </div>
		    <div class="card-content">
		      <span class="card-title grey-text text-darken-4 text-capitalize">{{$student->nombres}} {{$student->apellidos}}</span>
		      
		    </div>
		    <div class="card-action">
		      <a href="/students/{{$student->nick_name}}" class="waves-effect waves-light btn light-blue darken-4 white-text">Ver mas...</a>
		    </div>
		  </div>
		</div>
		
		  
	@endforeach

@endsection