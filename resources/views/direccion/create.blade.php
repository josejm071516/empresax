@extends("layouts.plantilla")

@section('content')

<!-- Two -->
<section id="two">
    <div class="container">
        <h3>Agregar Una direccion N</h3>

        <form action="{{ url('direccion/store/'.$id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
              <label for="exampleInputEmail1">Direccion De La Empresa</label>
              <input type="text" class="form-control" name='direccion' id="direccion" aria-describedby="direccionEmpresa" placeholder="Direccion">
              <small id="direccionEmpresa" class="form-text text-muted">Escriba la direccion de la empresa</small>
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
