@extends("layouts.plantilla")

@section('content')

<!-- One -->
<section id="one">
    <div class="image main" data-position="center">
        <img src="{{ asset('images/banner.jpg') }}" alt="" />
    </div>
    <div class="container">
        <header class="major">
            <h2>Requerimiento</h2>
            <p>Se desea tener el control de todos los clientes pertenecientes a la empresa X, donde cada cliente puede tener N cantidad de direcciones. Con sus conocimientos de desarrollo se solicita crear una solución informática para este problema.</p>
        </header>

    </div>
</section>

@endsection

