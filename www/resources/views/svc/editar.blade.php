@extends('painel')

@section("title", "Editar SVC")

@section('content')
<script>
document.getElementById("menu-item-svc").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Edição de SVC</h2>
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
    <form action="{{ route('svcAtualizar', ['id' => $svc->id]) }}" method="POST">
    @csrf

    <div class="row">
        <div class="col-2">
            <label>Identificador:</label><br>
            <input required type="number" class="form-control" value="{{ $svc->identificador }}" disabled><br>
            <input required type="hidden" id="identificador" name="identificador" class="form-control" value="{{ $svc->identificador }}"><br>
        </div>
        <div class="col-1">
            <label>SVCT:</label><br>
            <select id="svct" name="svct" class="form-control">
            <?php if ($svc->svct == 20) {?>
                <option value="20" selected>L2VC</option>
                <option value="22">L2VPN</option>
                <option value="30">L3VPN</option>
                <option value="39">Dedicado</option>
            <?php } elseif ($svc->svct == 22) {?>
                <option value="20">L2VC</option>
                <option value="22" selected>L2VPN</option>
                <option value="30">L3VPN</option>
                <option value="39">Dedicado</option>
            <?php } elseif ($svc->svct == 30) {?>
                <option value="20">L2VC</option>
                <option value="22">L2VPN</option>
                <option value="30" selected>L3VPN</option>
                <option value="39">Dedicado</option>
            <?php } elseif ($svc->svct == 39) {?>
                <option value="20">L2VC</option>
                <option value="22">L2VPN</option>
                <option value="30">L3VPN</option>
                <option value="39" selected>Dedicado</option>
            <?php } ?>
            </select>
        </div>
        <div class="col-1">
            <label>Banda:</label><br>
            <input type="number" id="banda" name="banda" class="form-control" value="{{ $svc->banda }}" placeholder="Mbps"><br>
        </div>
        <div class="col-2">
            <label>GSVCID:</label><br>
            <input required type="number" class="form-control" value="{{ $svc->gsvcid }}" disabled><br>
            <input required type="hidden" id="gsvcid" name="gsvcid" class="form-control" value="{{ $svc->gsvcid }}"><br>
        </div>
        <div class="col-1">
            <label>IN VLAN:</label><br>
            <input type="text" id="in_vlan" name="in_vlan" class="form-control" value="{{ $svc->in_vlan }}"><br>
        </div>
        <div class="col-1">
            <label>OUT VLAN:</label><br>
            <input required type="text" id="out_vlan" name="out_vlan" class="form-control" value="{{ $svc->out_vlan }}"><br>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <label>Peering MRouter:</label><br>
            <input required type="text" class="form-control" value="{{ $svc->peering_mrouter }}" disabled><br>
            <input required type="hidden" id="peering_mrouter" name="peering_mrouter" class="form-control" value="{{ $svc->peering_mrouter }}"><br>
        </div>
        <div class="col-2">
            <label>Peering Cliente 1:</label><br>
            <input type="text" id="peering_cliente1" name="peering_cliente1" class="form-control" value="{{ $svc->peering_cliente1 }}"><br>
        </div>
        <div class="col-2">
            <label>Peering Cliente 2:</label><br>
            <input type="text" id="peering_cliente2" name="peering_cliente2" class="form-control" value="{{ $svc->peering_cliente2 }}"><br>
        </div>
        <div class="col-2">
            <label>Distinguisher:</label><br>
            <input type="text" id="distinguisher" name="distinguisher" class="form-control" value="{{ $svc->distinguisher }}"><br>
        </div>
    </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Cliente:</label><br>
            <select id="cliente" name="cliente" class="form-control">
                @foreach($clientes as $cliente)
                    @if ($cliente->id == $svc->cliente_id)
                    <option value="{{ $cliente->id }}" selected>
                        {{ $cliente->nome }}
                    </option>
                    @else
                    <option value="{{ $cliente->id }}">
                        {{ $cliente->nome }}
                    </option>
                    @endif
                @endforeach
            </select>
        </div>
        <div class="col-3">
            <label>Informações:</label><br>
            <input required type="text" id="informacoes" name="informacoes" class="form-control" value="{{ $svc->informacoes }}"><br>
        </div>
        <div class="col-12">
            <a href="<?php echo WEB_ROOT."/svc";?>" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>
        <div class="col-12">
            <br><br><h3>Lista de LMC's Deste Serviço</h3>
            <a href="<?php echo WEB_ROOT."/lmc/cadastrar/".$svc->id;?>" class="btn btn-warning">Cadastrar LMC</a><br><br>
        </div>
        <div class="col-12">
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
                            <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/lmc/editar/";?>{{ $lmc->id }}">
                                <i class="bx bxs-edit"></i>
                            </a>
                            <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/lmc/excluir/";?>{{ $lmc->id }}">
                                <i class="bx bxs-trash"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
