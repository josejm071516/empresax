@extends("layouts.plantilla")

@section('content')

<!-- Two -->
<section id="two">
    <div class="container">
        <h3>Direcciones N</h3>

        <div class="col-12 ">
            <div class="col-4" style="float: right;">
            <ul class="actions">
               <a href="{{ url('direccion/create/'.$id) }}"><li><input type="button" class="primary" value="Agregar Direccion" /></li> </a>
            </ul>
        </div> </div>

        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Direccion</th>


              </tr>
            </thead>
            <tbody>

                @foreach($direcciones as $direccion)
                <tr>

                    @if ($direccion->empresa_id == $id)
                    <th scope="row">{{ $direccion->id }}</th>
                    <th scope="row">{{ $direccion->direccion }}</th>
                    <td><a href="{{ url('direccion/edit/'.$direccion->id) }}">Edit</a> </td>
                    <td><a href="{{ url('direccion/destroy/'.$direccion->id.'/'.$direccion->empresa_id) }}">Eliminar</a> </td>
                    @endif

                  </tr>

                @endforeach

            </tbody>
          </table>
    </div>
</section>


@endsection
