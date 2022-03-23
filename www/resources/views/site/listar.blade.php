@extends('painel')

@section("title", "Sites")

@section('content')
<script>
document.getElementById("menu-item-site").className += " active";
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-ativo" href="<?php echo WEB_ROOT."/site/cadastrar";?>">
           Cadastrar Sites
        </a>

        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">ID</th>
                    <th class="text-center">Nome</th>
                    <th class="text-center">Sigla</th>
                    <th class="text-center">Faixa ADM</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($sites as $site)
                <tr class="text-center">
                    <td>{{ $site->id }}</td>
                    <td>{{ $site->nome }}</td>
                    <td>{{ $site->sigla }}</td>
                    <td>{{ $site->faixa_administrativa }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/site/editar/";?>{{ $site->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/site/excluir/";?>{{ $site->id }}">
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
