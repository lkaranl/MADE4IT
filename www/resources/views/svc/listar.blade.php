@extends('painel')

@section("title", "SVC")

@section('content')
<script>
document.getElementById("menu-item-svc").className += " active";

function moreDetails(svc) {
    var x = document.getElementsByName("detalhes"+svc);
    var i;
    if (x.length > 1) {
        for (i = 0; i < x.length; i++) {
            if (x[i].classList.contains("set-invisible")) {
                x[i].classList.remove("set-invisible");
            } else {
                x[i].classList.add("set-invisible");
            }
        }
    } else {
        alert("Este SVC não possui LMC's vinvulados a ele!")
    }
}
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-svc" href="<?php echo WEB_ROOT."/svc/cadastrar";?>">
            Cadastrar SVC
        </a>

        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">Identificador</th>
                    <th class="text-center">SVCT</th>
                    <th class="text-center">Banda</th>
                    <th class="text-center">Informações</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($svcs as $svc)
                <tr class="text-center">
                    <td>{{ $svc->identificador }}</td>
                    <td>{{ $svc->svct }}</td>
                    <td>{{ $svc->banda }}</td>
                    <td class="text-left">{{ $svc->informacoes }}</td>
                    <td>
                        <a class="btn btn-small btn-success" onclick="moreDetails({{ $svc->id }})">
                            <i class="bx bx-down-arrow-alt"></i>
                        </a>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/svc/editar/";?>{{ $svc->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/svc/excluir/";?>{{ $svc->id }}">
                            <i class="bx bxs-trash"></i>
                        </a>
                    </td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" style="padding: 0rem 2rem;">
                        <table class="table table-bordered table-hover data-table background-table table-sm" style="margin: 0;">
                            <tr name="detalhes{{ $svc->id }}" class="set-invisible">
                                <th class="text-center">Ativo</th>
                                <th class="text-center">Nome</th>
                                <th class="text-center">Descrição</th>
                                <th class="text-center">Faixa de Gerência</th>
                                <th class="text-center">Ações</th>
                            </tr>
                            @foreach($lmcs as $lmc)
                            @if($lmc->svc_id == $svc->id)
                            <tr name="detalhes{{ $svc->id }}" class="text-center sub-table set-invisible">
                                @foreach($ativos as $ativo)
                                @if($ativo->id == $lmc->ativo_id)
                                <td>{{ $ativo->nome }}</td>
                                @endif
                                @endforeach
                                <td>{{ $lmc->nome }}</td>
                                <td>{{ $lmc->ce_identify }}</td>
                                <td>{{ $lmc->faixa_gerencia }}</td>
                                <td>
                                    <a class="btn btn-small btn-info btn-bg-roxo" href="<?php echo WEB_ROOT."/lmc/editar/";?>{{ $lmc->id }}">
                                        <i class="bx bxs-edit"></i>
                                    </a>
                                </td>
                            </tr>
                            @endif
                            @endforeach
                        </table>
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
