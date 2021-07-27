@extends("layouts.master")

@section("principal")
    <div class="row mt-5">
        <div class="col-12 col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-header bg-danger text-light">
                    <span>Agregar Entidad</span>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre-txt" class="form-label">Nombre</label>
                        <input type="text" id="nombre-txt" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="tipo-select" class="form-label">Tipo</label>
                        <select class="form-select" id="tipo-select">
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="anio-txt">Año Entidad</label>
                        <input type="number" class="form-control" id="anio-txt">
                    </div>
                </div>
                <div class="card-footer d-grid gap-1">
                    <button class="btn btn-info">Registrar</button>
                </div>
            </div>
        </div>
    </div>
@endsection
@section("javascript")
    <script src="{{asset('js/home.js')}}"></script>
@endsection