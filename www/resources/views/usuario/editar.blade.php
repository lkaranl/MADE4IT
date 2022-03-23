@extends('painel')

@section("title", "Editar Usuario")

@section('content')
<script>
document.getElementById("menu-item-usuario").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Edição de Usuario</h2>
    <form action="{{ route('usuarioAtualizar', ['name' => $usuario->name]) }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-6">
            <label>Nome:</label><br>
            <input type="text" id="name" name="name" class="form-control" value="{{ $usuario->name }}"><br>
        </div>
        <div class="col-6">
            <label>Razão Social:</label><br>
            <input type="text" id="surname" name="surname" class="form-control" value="{{ $usuario->surname }}"><br>
        </div>
        <div class="col-12">
            <a href="/" class="btn btn-danger">Cancelar</a>
            <input type="submit" onclick="return confirm('Deseja realmente editar?')"  class="btn btn-primary" value="Salvar">
        </div>
    </div>
</div>

@endsection
