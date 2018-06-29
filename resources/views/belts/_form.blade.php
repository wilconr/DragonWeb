@include('layouts._validation-errors')

<div class="row">
    <div class="input-field col s12">
      {!! Form::label('color', 'Color') !!}
      {!! Form::text('color', old('color'), ['class' => 'validate text-capitalize']) !!}
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

