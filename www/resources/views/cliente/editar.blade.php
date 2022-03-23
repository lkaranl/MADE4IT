@extends('painel')

@section("title", "Editar Cliente")

@section('content')
<script>
document.getElementById("menu-item-cliente").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Edição do Cliente</h2>
    @if ($errors->any())
    <h4>
        <p>Relatório de Erro:<br>
            <div class="alert alert-danger" style="width: fit-content;">
                <?php
                print_r(str_replace('"],"','"]<br>"',(str_replace(array('{','}'),'',$errors)))); 
                ?>
            </div>
        </p>
    </h4>
    @endif
    <form action="{{ route('clienteAtualizar', ['id' => $cliente->id]) }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-6">
            <label>Nome:</label><br>
            <input required type="text" id="nome" name="nome" class="form-control" value="{{ $cliente->nome }}"><br>
        </div>
        <div class="col-12">
            <a href="/cliente" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>
    </div>
</div>
@endsection
