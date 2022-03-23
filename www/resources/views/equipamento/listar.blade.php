@extends('painel')

@section("title", "Equipamentos")

@section('content')
<script>
document.getElementById("menu-item-equipamento").className += " active";
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-equipamento" href="<?php echo WEB_ROOT."/equipamento/cadastrar";?>">
            Cadastrar Equipamentos
        </a>

        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">Marca</th>
                    <th class="text-center">Modelo</th>
                    <th class="text-center">Patrimônio</th>
                    <th class="text-center">Serial</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($equipamentos as $equipamento)
                <tr class="text-center">
                    <td>{{ $equipamento->marca }}</td>
                    <td>{{ $equipamento->modelo }}</td>
                    <td>{{ $equipamento->patrimonio }}</td>
                    <td>{{ $equipamento->serial }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/equipamento/editar/";?>{{ $equipamento->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger"   onclick="return confirm('Deseja realmente exluir?')" href="<?php echo WEB_ROOT."/equipamento/excluir/";?>{{ $equipamento->id }}">
                            <i class="bx bxs-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- NO PERMISSION INDEX MESSAGE -->
<div class="col-xs-12" id="divErrorUser" style="display: none;">
    <div class="box box-primary">
        <table id="userDatatable" class="table table-bordered table-hover data-table">
            <thead>
                <tr>
                    <th class="text-center">Você não tem permissão para visualizar Última Milha.</br>
                        <button id="exitIndexUser" type="button" class="btn btn-primary margin-top-20">
                            Voltar
                        </button>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<!-- NO PERMISSION INDEX MESSAGE END -->

@endsection
