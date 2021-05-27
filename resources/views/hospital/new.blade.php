<x-guest-layout>

<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::open(['route' => 'hospital.store', 'method' => 'post', 'novalidate']) !!}
                <div class="form-group">
                    {!! Form::label('full_name', 'Nombre') !!}
                    {!! Form::text('nombre', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nit', 'Nit') !!}
                    {!! Form::text('nit', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('nombre_representante', 'Nombre representate') !!}
                    {!! Form::text('nombre_representante', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('direccion', 'direccion') !!}
                    {!! Form::text('direccion', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('telefono', 'telefono') !!}
                    {!! Form::text('telefono', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
</x-guest-layout>
