@include('layouts._validation-errors')

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('nombres', 'Nombres') !!}
      {!! Form::text('nombres', old('nombres'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('apellidos', 'Apellidos') !!}
      {!! Form::text('apellidos', old('apellidos'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('fecha_nac', 'Cumpleaños') !!}
      {!! Form::text('fecha_nac', old('fecha_nac'), ['class' => 'datepicker']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12 black-text">
        {!! Form::select('belt_id', $belts->pluck('color', 'id'), null, ['placeholder' => 'Elige un cinturon'], ['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('belt_id', 'Cinturon') !!}
    </div>
</div>


<div class="row">
	<div class="file-field input-field col s6">
	  <div class="btn black">
	    <span>Avatar</span>
	    {!! Form::file('avatar') !!}
	  </div>
	  <div class="file-path-wrapper">
	  	{!! Form::text('avatar', null, ['class' => 'file-path validate', 'placeholder' => 'Selecciona una imagen para tu avatar']) !!}
	  </div>
	</div>
</div>

