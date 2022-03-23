@extends('painel')

@section("title", "Editar Equipamento")

@section('content')
<script>
document.getElementById("menu-item-equipamento").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Edição do Equipamento</h2>
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
    <form action="{{ route('equipamentoAtualizar', ['id' => $equipamento->id]) }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-3">
            <label>Marca:</label><br>
            <input type="text" id="marca" name="marca" class="form-control" value="{{ $equipamento->marca }}"><br>
        </div>
        <div class="col-4">
            <label>Modelo:</label><br>
            <input required type="text" id="modelo" name="modelo" class="form-control" value="{{ $equipamento->modelo }}"><br>
        </div>
        <div class="col-2">
            <label>Patrimônio:</label><br>
            <input required type="text" id="patrimonio" name="patrimonio" class="form-control" value="{{ $equipamento->patrimonio }}"><br>
        </div>
        <div class="col-3">
            <label>Serial:</label><br>
            <input type="text" id="serial" name="serial" class="form-control" value="{{ $equipamento->serial }}"><br>
        </div>
        <div class="col-12">
            <a href="/equipamento" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>
    </div>
</div>
@endsection
