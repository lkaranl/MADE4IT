@extends('painel')

@section("title", "Cadastrar SVC")

@section('content')
<script>
document.getElementById("menu-item-svc").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Cadastro de SVC</h2>
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
    <form action="/svc/cadastrar" method="post">
    @csrf
    <div class="row">
        <div class="col-2">
            <label>Identificador:</label><br>
            <input required type="number" class="form-control" value="{{ $identificador }}" disabled><br>
            <input required type="hidden" id="identificador" name="identificador" class="form-control" value="{{ $identificador }}"><br>
        </div>
        <div class="col-1">
            <label>SVCT:</label><br>
            <select id="svct" name="svct" class="form-control">
                <option value="20">L2VC</option>
                <option value="22">L2VPN</option>
                <option value="30">L3VPN</option>
                <option value="39">Dedicado</option>
            </select>
        </div>
        <div class="col-1">
            <label>Banda:</label><br>
            <input type="number" id="banda" name="banda" class="form-control" value="" placeholder="Mbps"><br>
        </div>
        <div class="col-2">
            <label>GSVCID:</label><br>
            <input required type="number" class="form-control" value="{{ '10'.$identificador }}" disabled><br>
            <input required type="hidden" id="gsvcid" name="gsvcid" class="form-control" value="{{ '10'.$identificador }}"><br>
        </div>
        <div class="col-1">
            <label>IN VLAN:</label><br>
            <input type="text" id="in_vlan" name="in_vlan" class="form-control" value=""><br>
        </div>
        <div class="col-1">
            <label>OUT VLAN:</label><br>
            <input required type="text" id="out_vlan" name="out_vlan" class="form-control" value="800T"><br>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <label>Peering MRouter:</label><br>
            <input required type="text" class="form-control" value="{{ $peering_mrouter }}" disabled><br>
            <input required type="hidden" id="peering_mrouter" name="peering_mrouter" class="form-control" value="{{ $peering_mrouter }}"><br>
        </div>
        <div class="col-2">
            <label>Peering Cliente 1:</label><br>
            <input type="text" id="peering_cliente1" name="peering_cliente1" class="form-control" value=""><br>
        </div>
        <div class="col-2">
            <label>Peering Cliente 2:</label><br>
            <input type="text" id="peering_cliente2" name="peering_cliente2" class="form-control" value=""><br>
        </div>
        <div class="col-2">
            <label>Distinguisher:</label><br>
            <input type="text" id="distinguisher" name="distinguisher" class="form-control" value=""><br>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Cliente:</label><br>
            <select id="cliente" name="cliente" class="form-control">
                @foreach($clientes as $cliente)
                <option value="{{ $cliente->id }}">
                    {{ $cliente->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="mt-2 col-12">
            <a href="<?php echo WEB_ROOT."/svc";?>" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</div>

@endsection
