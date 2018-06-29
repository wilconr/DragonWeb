@extends('layouts.app')

@section('title')
	Editar Horario - {{$schedule->clase}}
@endsection	

@section('content')
	
	{!! Form::model($schedule, ['class' =>'col s12', 'route' => ['schedules.update', $schedule], 'method' => 'PUT']) !!}

		<div class="card-panel">

			<div class="row">
				<div class="col s12">
					<a href="/schedules/{{$schedule->clase}}"><i class="material-icons left black-text">keyboard_backspace</i></a>
					<h4 class="card-title grey-text text-darken-4 center-align">Editar Horario</h4>
				</div>
			</div>

			@include('schedules._form')

			<button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Actualizar<i class="material-icons right">send</i></button>	

		</div>
	
	{!! Form::close() !!}

@endsection
