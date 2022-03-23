@extends('painel')

@section("title", "Enlace")

@section('content')
<script>
document.getElementById("menu-item-enlace").className += " active";
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-enlace" href="<?php echo WEB_ROOT."/enlace/cadastrar";?>">
            Cadastrar Enlace
        </a>
        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">Mlink</th>
                    <th class="text-center">Mestre</th>
                    <th class="text-center">Escravo</th>
                    <th class="text-center">Faixa</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($enlaces as $enlace)
                <tr class="text-center">
                    <td>{{ 'MLINK-'.$enlace->mlink }}</td>
                    @foreach($ativos as $ativo)
                        @if ($ativo->id == $enlace->ativo_mestre)
                    <td>{{ $ativo->nome }}</td>
                        @endif
                    @endforeach
                    @foreach($ativos as $ativo)
                        @if ($ativo->id == $enlace->ativo_escravo)
                    <td>{{ $ativo->nome }}</td>
                        @endif
                    @endforeach
                    <td>{{ $enlace->faixa }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/enlace/editar/";?>{{ $enlace->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger"   onclick="return confirm('Deseja realmente exluir?')" href="<?php echo WEB_ROOT."/enlace/excluir/";?>{{ $enlace->id }}">
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
