@extends('layouts.app')

@section('title')
	Editar Maestro - {{$maestro->nick_name}}
@endsection	

@section('content')
	
	{!! Form::model($maestro, ['class' =>'col s12', 'route' => ['maestros.update', $maestro], 'method' => 'PUT', 'files' => true]) !!}

		<div class="card-panel">

			<div class="row">
				<div class="col s12">
					<a href="/maestros/{{$maestro->nick_name}}"><i class="material-icons left black-text">keyboard_backspace</i></a>
					<h4 class="card-title grey-text text-darken-4 center-align">Editar Maestro</h4>
				</div>
			</div>
			
			@include('maestros._form')

			<div class="row">
			    <div class="input-field col s6 ">
			      {!! Form::label('nick_name', 'Nick Name') !!}
			      {!! Form::text('nick_name', old('nick_name'), ['class' => 'validate text-capitalize', 'disabled']) !!}
			    </div>
			</div>

			<button class="btn waves-effect waves-light light-blue darken-4" type="submit" name="action">Actualizar<i class="material-icons right">send</i></button>	

		</div>
	
	{!! Form::close() !!}

@endsection


