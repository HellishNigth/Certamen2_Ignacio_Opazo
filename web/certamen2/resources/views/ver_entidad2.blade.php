@extends("layouts.master")

@section("principal")
<div class="row mt-5">
    <div class="col-12 col-md-12 col-lg-6 mx-auto">
        <table class="table table-hover table-bordered table-striped table-responsive">
            <thead class="bg-info">
                <tr>
                    <td>Nombre</td>
                    <td>Tipo</td>
                    <td>Año Lanzamiento</td>
                    <td>Acciones</td>
                </tr>
            </thead>
            <tbody id="tbody-entidad2">

            </tbody>
        </table>
    </div>
</div>
@endsection