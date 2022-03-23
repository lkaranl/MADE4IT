@extends('painel')

@section("title", "Cidades")

@section('content')
<script>
document.getElementById("menu-item-cidade").className += " active";
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-cidade" href="<?php echo WEB_ROOT."/cidade/cadastrar";?>">
            Cadastrar Cidade
        </a>

        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">Cidade</th>
                    <th class="text-center">Sigla</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cidades as $cidade)
                <tr class="text-center">
                    <td>{{ $cidade->nome }}</td>
                    <td>{{ $cidade->sigla }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/cidade/editar/";?>{{ $cidade->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/cidade/excluir/";?>{{ $cidade->id }}">
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
                    <th class="text-center">Você não tem permissão para visualizar SVC.</br>
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
