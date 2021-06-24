@extends("layouts.plantilla")

@section('content')

<!-- Two -->
<section id="two">
    <div class="container">
        <h3>Empresas X</h3>

        <div class="col-12 ">
            <div class="col-4" style="float: right;">
            <ul class="actions">
               <a href="{{ url('empresa/create') }}"><li><input type="button" class="primary" value="Agregar Empresa" /></li> </a>
            </ul>
        </div> </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>


              </tr>
            </thead>
            <tbody>

                @foreach($empresas as $empresa)
                <tr>
                    <th scope="row">{{ $empresa->id }}</th>
                    <td><a href="{{ url('direccion/show/'.$empresa->id) }}">{{ $empresa->nombre }}</a> </td>
                    <td><a href="{{ url('empresa/edit/'.$empresa->id) }}">Edit</a> </td>
                    <td><a href="{{ url('empresa/destroy/'.$empresa->id) }}">Eliminar</a> </td>

                  </tr>

                @endforeach

            </tbody>
          </table>
    </div>
</section>


@endsection
