<x-guest-layout>
<div class="container">
    <div class="row">
         {!! Form::open(['route' => 'eps/search', 'method' => 'post', 'novalidate', 'class' => 'form-inline']) !!}
          <div class="form-group">
        <br>
            <label for="exampleInputName2">Nombre</label>
            <input type="text" class="form-control" name = "nombre" >
            </div>
            <button type="submit" class="btn btn-info">Search</button>
        <a href="{{ route('eps.index') }}" class="btn btn-primary">All</a>
        @isset($epses)
        <a href="{{ route('eps.create') }}" class="btn btn-primary">Crear</a>
                @endisset

            <br>
        <br>
        <br>
        {!! Form::close() !!}
		<table class="table table-condensed table-striped table-bordered">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Opcion</th>
                    </tr>
            </thead>
            <tbody>
            @isset($epses)
                @foreach($epses as $eps)
                <tr>
                    <td>{{ $eps->nombre }}</td>
                    <td>
                        <a class="btn btn-danger btn-xs" href="{{ route('eps/destroy',['id' => $eps->id] )}}" >Delete</a>
                    </td>
                </tr>
                @endforeach
                @endisset
            </tbody>
        </table>
	</div>
</div>
</x-guest-layout>