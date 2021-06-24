@extends("layouts.plantilla")

@section('content')

<!-- Two -->
<section id="two">
    <div class="container">
        <h3>Editar Una direccion N</h3>

        <form action="{{ url('direccion/update/'.$direccion->id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre De La Direccion</label>
              <input value="{{ $direccion->direccion }}" type="text" class="form-control" name='direccion' id="direccion" aria-describedby="direccionEmpresa" placeholder="Direccion">
              <small id="nombreEmpresa" class="form-text text-muted">Modifique el nombre de la direccion</small>
            </div>

            <div class="col-12 " style="margin-top: 25px; ">

                <ul class="actions">
                   <a href="{{ url('direccion/store') }}"><li><input type="submit" class="primary" value="Guardar Direccion" /></li> </a>
                </ul>
            </div>
        </form>

    </div>
</section>


@endsection
