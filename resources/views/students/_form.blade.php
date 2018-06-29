@include('layouts._validation-errors')

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

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('nombres', 'Nombres') !!}
      {!! Form::text('nombres', old('nombres'), ['class' => 'validate text-capitalize']) !!}
    </div>
    <div class="input-field col s12">
      {!! Form::label('apellidos', 'Apellidos') !!}
      {!! Form::text('apellidos', old('apellidos'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12 black-text">
        {!! Form::select('genero', ['M' => 'Masculino', 'F' => 'Femenino', 'show.blade.php' => 'Otros'], null, ['placeholder' => 'Elige un genero'], ['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('genero', 'Genero') !!}
    </div>
    <div class="input-field col s12 black-text">
        {!! Form::select('rh', ['O+' => 'O Positivo', 'O-' => 'O Negativo', 'A+' => 'A Positivo', 'A-' => 'A Negativo', 'B+' => 'B Positivo', 'B-' => 'B Negativo', 'AB+' => 'AB Positivo', 'AB-' => 'AB Negativo'], null, ['placeholder' => 'Elige el tipo sanguineo'], ['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('rh', 'RH') !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('fecha_nac', 'Cumpleaños') !!}
      {!! Form::text('fecha_nac', old('fecha_nac'), ['class' => 'datepicker']) !!}
    </div>
    <div class="input-field col s12">
      {!! Form::label('fecha_ing', 'Ingreso') !!}
      {!! Form::text('fecha_ing', old('fecha_ing'), ['class' => 'datepicker']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12 black-text">
        {!! Form::select('belt_id', $belts->pluck('color', 'id'), null, ['placeholder' => 'Elige un cinturon'], ['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('belt_id', 'Cinturon') !!}
    </div>
    <div class="input-field col s12 black-text">
        {!! Form::select('schedule_id', $schedules->pluck('clase', 'id'), null, ['placeholder' => 'Elige un horario'], ['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('schedule_id', 'Horario') !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('telefono', 'Telefono') !!}
      {!! Form::text('telefono', old('telefono'), ['class' => 'validate']) !!}
    </div>
    <div class="input-field col s12">
      {!! Form::label('direccion', 'Direccion') !!}
      {!! Form::text('direccion', old('direccion'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('peso', 'Peso') !!}
      {!! Form::number('peso', old('peso'), ['class' => 'validate text-capitalize']) !!}
    </div>
    <div class="input-field col s12">
      {!! Form::label('estatura', 'Estatura') !!}
      {!! Form::number('estatura', old('estatura'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('alergias', 'Alergias') !!}
      {!! Form::text('alergias', old('alergias'), ['class' => 'validate text-capitalize']) !!}
    </div>
    <div class="input-field col s12">
      {!! Form::label('seguro_med', 'Seguro Medico') !!}
      {!! Form::text('seguro_med', old('seguro_med'), ['class' => 'validate text-capitalize']) !!}
    </div>
</div>

{{-- <div class="row">
    <div class="input-field col s12 black-text">
        {!! Form::select('attendant_id', $attendants->pluck('nombres', 'id'),null, ['placeholder' => 'Elige un Acudiente'], ['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('attendant_id', 'Acudiente') !!}
    </div>
</div> --}}

<div class="row">
    <div class="input-field col s12 black-text">
        {!! Form::select('attendant_id', $attendants,null, ['id'=> 'attendant' ],['class' => 'black-text text-capitalize']) !!} 
        {!! Form::label('attendant_id', 'Acudiente') !!}
    </div>
</div>


