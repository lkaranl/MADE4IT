@extends('painel')

@section("title", "LMC")

@section('content')
<script>
document.getElementById("menu-item-lmc").className += " active";

function moreDetails(lmc) {
    var x = document.getElementsByName("detalhes"+lmc);
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
        alert("Este LMC não possui SVC's vinvulados a ele!")
    }
}
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-lmc" href="<?php echo WEB_ROOT."/lmc/cadastrar";?>">
            Cadastrar LMC
        </a>

        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">Identificador</th>
                    <th class="text-center">LMC</th>
                    <th class="text-center">CE Identify</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lmcs as $lmc)
                <tr class="text-center">
                    <td>{{ $lmc->identificador }}</td>
                    <td>{{ $lmc->nome }}</td>
                    <td>{{ $lmc->ce_identify }}</td>
                    <td>
                        <a class="btn btn-small btn-success" onclick="moreDetails({{ $lmc->id }})" title="Serviços">
                            <i class="bx bx-down-arrow-alt"></i>
                        </a>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/lmc/editar/";?>{{ $lmc->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/lmc/excluir/";?>{{ $lmc->id }}">
                            <i class="bx bxs-trash"></i>
                        </a>
                        <a class="btn btn-small btn-warning" href="<?php echo WEB_ROOT."/lmc/info/";?>{{ $lmc->id }}">
                            <i class="bx bx-info-circle"></i>
                        </a>
                    </td>
                </tr>
                <tr class="text-center">
                    <td colspan="5" style="padding: 0rem 2rem;">
                        <table class="table table-bordered table-hover data-table background-table table-sm" style="margin: 0;">
                            <tr name="detalhes{{ $lmc->id }}" class="set-invisible">
                                <th class="text-center">Nome</th>
                                <th class="text-center">Cliente</th>
                                <th class="text-center">Banda</th>
                                <th class="text-center">Descrição</th>
                                <th class="text-center">Ações</th>
                            </tr>
                            @foreach($svcs as $svc)
                            @if($svc->lmc_id == $lmc->id)
                            <tr name="detalhes{{ $lmc->id }}" class="text-center sub-table set-invisible">
                                <td>{{ 'SVC.10.'.$svc->svct.'.'.$svc->identificador }}</td>
                                @foreach($clientes as $cliente)
                                @if($cliente->id == $svc->cliente_id)
                                <td>{{ $cliente->nome }}</td>
                                @endif
                                @endforeach
                                <td>{{ $svc->banda.'Mbps' }}</td>
                                <td>{{ $svc->informacoes }}</td>
                                <td>
                                    <a class="btn btn-small btn-info btn-bg-roxo" href="<?php echo WEB_ROOT."/svc/editar/";?>{{ $svc->id }}">
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
