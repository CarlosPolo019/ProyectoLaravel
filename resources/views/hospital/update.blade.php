<x-guest-layout>
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			{!! Form::model($hospital,['route' => 'hospital.update', 'method' => 'put', 'novalidate']) !!}
            
                {!! Form::hidden('id', $hospital->id) !!}
            
                <div class="form-group">
                      {!! Form::label('nombre', 'Nombre') !!}
                      {!! Form::text('name', null, ['class' => 'form-control' , 'required' => 'required']) !!}
                  </div>
               <div class="form-group">
                      {!! Form::submit('Enviar', ['class' => 'btn btn-success ' ] ) !!}
                  </div>
            {!! Form::close() !!}
		</div>
	</div>
</div>
</x-guest-layout>