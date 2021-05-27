<x-guest-layout>
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'hospital/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
        <br>
            <label for="exampleInputName2">Nombre</label>
            <input type="text" class="form-control" name = "nombre" >
            </div>
            <button type="submit" class="btn btn-info">Search</button>
        <a href="{{ route('hospital.index') }}" class="btn btn-primary">All</a>
        @isset($hospitales)
        @if($hospitales->count() < 1)
        <a href="{{ route('hospital.create') }}" class="btn btn-primary">Crear</a>
        @else
        <button type="button" class="btn btn-secondary" disabled>Crear</button>
                @endif
                @endisset

            <br>
        <br>
        <br>
        {!! Form::close() !!}
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Nit</th>
                    <th>Nombre representante</th>
                    <th>Direccion</th>
                    <th>Telefono</th>
                    <th>Opcion</th>
                    </tr>
            </thead>
            <tbody>
            @isset($hospitales)
                @foreach($hospitales as $hospital)
                <tr>
                    <td>{{ $hospital->nombre }}</td>
                    <td>{{ $hospital->nit }}</td>
                    <td>{{ $hospital->nombre_representante }}</td>
                    <td>{{ $hospital->direccion }}</td>
                    <td>{{ $hospital->telefono }}</td>
                    <td>
                        <a class="btn btn-danger btn-xs" href="{{ route('hospital/destroy',['id' => $hospital->id] )}}" >Delete</a>
                    </td>

                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
	</div>
</div>
</x-guest-layout>