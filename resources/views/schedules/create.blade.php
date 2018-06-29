@extends('layouts.app')

@section('title')
	Crear Horario
@endsection	

@section('content')

	{!! Form::open(['class' =>'col s12', 'route' => 'schedules.store', 'method' => 'POST']) !!}

		<div class="card-panel">

			<div class="row">
				<div class="col s12">
					<a href="/schedules"><i class="material-icons left black-text">keyboard_backspace</i></a>
					<h4 class="card-title grey-text text-darken-4 center-align">Crear Horario</h4>
				</div>
			</div>

			@include('schedules._form')

			<button class="btn waves-effect waves-light black" type="submit" name="action">Crear<i class="material-icons right">send</i></button>	

		</div>
	
	{!! Form::close() !!}

@endsection
