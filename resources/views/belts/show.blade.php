@extends('layouts.app')

@section('title')
	Cinturon
@endsection

@section('content')

	<div class="col s12">
	    <div class="card-panel center-align">

	    	<div class="card-content">

	    		<a href="/belts"><i class="material-icons left black-text">keyboard_backspace</i></a>
	    		
				<a class="dropdown-trigger right" data-target="dropdownOpciones"><i class="material-icons right black-text">more_vert</i></a>

		    	<ul id="dropdownOpciones" class="dropdown-content">
		    		<li>
		    			<a class="black-text d-inline-flex" href="/belts/{{$belt->color}}/edit"><i class="material-icons left">edit</i>Editar</a>
		    		</li>
		    		<li>

						{!! Form::open(['id' => 'deleteForm', 'method' => 'DELETE', 'route' => ['belts.destroy', $belt->color] ]) !!}
							<button class="btn waves-effect waves-light light-blue darken-4 btn-alert" style="height: 50px; padding: 0 31px;" type="submit" name="action">Borrar<i class="material-icons left">delete</i></button>	
						{!! Form::close() !!}

		    		</li>
		    	</ul>

			</div>
	    	
			<img class="rounded-circle mx-auto img-avatar z-depth-3" src="/images/belts/{{$belt->avatar}}" >

			<h3 class="card-title grey-text text-darken-4 text-capitalize">{{$belt->color}}</h3>


	    </div>
	</div>			

@endsection

@section('scripts')
	@include('belts._alerts')
@endsection
