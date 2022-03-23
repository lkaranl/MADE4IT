@extends('painel')

@section("title", "LMC Informações")

@section('content')
<script>
    document.getElementById("menu-item-lmc").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-2">Informações - {{ $lmc->nome }}</h2>
    <form action="" method="">
        @csrf
        <h4>LMC</h4>
        <div class="row">
            <div class="col-1">
                <label>Identificador:</label><br>
                <input type="text" class="form-control" value="{{ $lmc->identificador }}"><br>
            </div>
            <div class="col-1">
                <label>SPID:</label><br>
                <input type="text" class="form-control" value="{{ $lmc->spid }}"><br>
            </div>
            <div class="col-1">
                <label>Sigla Cidade:</label><br>
                @foreach($cidades as $cidade)
                @if ($cidade->id == $lmc->cidade_id)
                <input type="text" class="form-control" value="{{ $cidade->sigla }}"><br>
                @endif
                @endforeach
            </div>
            <div class="col-2">
                <label>Nome:</label><br>
                <input type="text" class="form-control" value="{{ $lmc->nome }}"><br>
            </div>
            <div class="col-2">
                <label>Ativo:</label><br>
                @foreach($ativos as $ativo)
                @if ($ativo->id == $lmc->ativo_id)
                <input type="text" class="form-control" value="{{ $ativo->nome }}"><br>
                @endif
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="col-3">
                <label>Ce Identify:</label><br>
                <input type="text" class="form-control" value="{{ $lmc->ce_identify }}"><br>
            </div>
            <div class="col-2">
                <label>Faixa de Gerência:</label><br>
                <input type="text" class="form-control" value="{{ $lmc->faixa_gerencia }}"><br>
            </div>
            <div class="col-1">
                <label>VLAN Gerência:</label><br>
                <input type="text" class="form-control" value="{{ $lmc->vlan_gerencia }}"><br>
            </div>
        </div>
        <!-- ---------------------------------------------------------------------------------------- -->
        <h4>LMX</h4>
        <div class="row">
            <div class="col-2">
                <label>Tipo de Interface:</label><br>
                @if ($lmc->interface == 'subinterface-qinq')
                <input type="text" class="form-control" value="Sub-Interface / QinQ"><br>
                @elseif ($lmc->interface == 'subinterface-dot1q')
                <input type="text" class="form-control" value="Sub-Interface / Dot1q"><br>
                @elseif ($lmc->interface == 'interface-qinq')
                <input type="text" class="form-control" value="Interface / Dot1q"><br>
                @elseif ($lmc->interface == 'interface-vlanif')
                <input type="text" class="form-control" value="Interface / Vlanif"><br>
                @endif
            </div>
        </div>
        @if ($lmxs != '[]')
        @foreach($lmxs as $lmx)
        <hr width=95%>
        <div class="row">
            <div class="col-1">
                <label>LMX:</label><br>
                <input type="text" class="form-control" value="{{ $lmx->nome }}"><br>
            </div>
            @if ($lmx->lmc_id == $lmc->id)
            @foreach($sub_gerencias as $sub_gerencia)
            @if ($sub_gerencia->lmx_id == $lmx->id)
            <div class="col-4">
                <label>Interface de Gerência:</label><br>
                <input type="text" class="form-control" value="{{ $sub_gerencia->nome }}"><br>
            </div>
            @endif
            @endforeach
            @foreach($sub_svcs as $sub_svc)
            @if ($sub_svc->lmx_id == $lmx->id)
            <div class="col-4">
                <label>Interface de Serviço:</label><br>
                <input type="text" class="form-control" value="{{ $sub_svc->nome }}"><br>
            </div>
            @endif
            @endforeach
            @endif
        </div>
        @endforeach
        @else
        <div class="row">
            <div class="col-12">
                <label>-- Nenhum LMX Cadastrado --</label><br><br>
            </div>
        </div>
        @endif
        <!-- ---------------------------------------------------------------------------------------- -->
        <h4>Lista de Serviços</h4>
        <div class="row">
            @if($has == '[]')
            <div class="col-3">
                <input type="text" class="form-control" value=""><br>
                <input type="text" class="form-control" value=""><br>
            </div>
            @else
            @foreach($has as $ha)
            @foreach($svcs as $svc)
            @if($svc->id == $ha->svc_id)
            <div class="col-3">
                <br>
                <h5>SVC.10.{{ $svc->svct }}.{{ $svc->identificador }}</h5>
                <div class="col-12">
                    <label>SVC:</label><br>
                    <input type="text" class="form-control" value="{{ $svc->identificador }} - {{ $svc->informacoes }}"><br>
                </div>
                <div class="col-3">
                    <label>Banda:</label><br>
                    <input type="text" class="form-control" value="{{ $svc->banda }}"><br>
                </div>
                <div class="col-6">
                    <label>Peering Mrouter:</label><br>
                    <input type="text" class="form-control" value="{{ $svc->peering_mrouter }}"><br>
                </div>
                <div class="col-6">
                    <label>Peering Cliente:</label><br>
                    <input type="text" class="form-control" value="{{ $svc->peering_cliente1 }}"><br>
                </div>
                <div class="col-6">
                    <label>Peering Cliente 2:</label><br>
                    <input type="text" class="form-control" value="{{ $svc->peering_cliente2 }}"><br>
                </div>
            </div>
            @endif
            @endforeach
            @endforeach
            @endif
        </div>
        <div class="row">
            <div class="col-12">
                <a href="<?php echo WEB_ROOT . "/lmc"; ?>" class="btn btn-danger">Voltar</a>
            </div>
        </div>
    </form>
</div>

@endsection