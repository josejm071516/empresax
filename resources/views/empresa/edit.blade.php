@extends("layouts.plantilla")

@section('content')

<!-- Two -->
<section id="two">
    <div class="container">
        <h3>Editar Una Empresas X</h3>

        <form action="{{ url('empresa/update/'.$empresa->id) }}" method="post">
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="form-group">
              <label for="exampleInputEmail1">Nombre De La Empresa</label>
              <input value="{{ $empresa->nombre }}" type="text" class="form-control" name='nombre' id="nombre" aria-describedby="nombreEmpresa" placeholder="Nombre">
              <small id="nombreEmpresa" class="form-text text-muted">Modifique el nombre de la empresa</small>
            </div>

            <div class="col-12 " style="margin-top: 25px; ">

                <ul class="actions">
                   <a href="{{ url('empresa/store') }}"><li><input type="submit" class="primary" value="Guardar Empresa" /></li> </a>
                </ul>
            </div>
        </form>

    </div>
</section>


@endsection
