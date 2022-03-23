@extends('painel')

@section("title", "Editar LMC")

@section('content')
<script>
document.getElementById("menu-item-lmc").className += " active";

count = <?=$quant+1?>;

if (count == 1) {
    count = count+1;
}

function newSvc() {
    if (count <= 10) {
        $("#repeat").append('<div class="col-3"><label>SVC:</label><br><select id="svc[]" name="svc[]" class="form-control"><option value="0">NENHUM</option>@foreach($svcs as $svc)<option value="{{ $svc->id }}">{{ $svc->identificador }} - {{ $svc->informacoes }}</option>@endforeach</select><br></div>');
        count = count + 1;
    } else {
        alert('Só é possível cadastrar 10 serviços em um mesmo LMC!');
    }
}
</script>
<div class="background-crude">
    <h2 class="mb-3">Editando {{$lmc->nome.' - '.$lmc->ce_identify}}</h2>
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
    <form action="{{ route('lmcAtualizar', ['id' => $lmc->id]) }}" method="POST">
    @csrf
    <div class="row">
        <div class="col-1">
            <label>Identificador:</label><br>
            <input required type="number" class="form-control" value="{{ $lmc->identificador }}" disabled><br>
            <input required type="hidden" id="identificador" name="identificador" class="form-control" value="{{ $lmc->identificador }}">
        </div>
        <div class="col-1">
            <label>SPID:</label><br>
            <input required type="text" id="spid" name="spid" class="form-control" value="{{ $lmc->spid }}"><br>
        </div>
        <div class="col-4">
            <label>Ce Identify:</label><br>
            <input required type="text" id="ce_identify" name="ce_identify" class="form-control" value="{{ $lmc->ce_identify }}">
            <label class="input-description">CLIENTE <= Cidade</label><br>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <label>VLAN de Gerência:</label><br>
            <input type="number" id="vlan_gerencia" name="vlan_gerencia" class="form-control" value="{{ $lmc->vlan_gerencia }}"><br>
        </div>
        <div class="col-2">
            <label>Faixa de Gerência:</label><br>
            <input type="text" class="form-control" value="{{ $lmc->faixa_gerencia }}" disabled><br>
            <input type="hidden" id="faixa_gerencia" name="faixa_gerencia" class="form-control" value="{{ $lmc->faixa_gerencia }}"><br>
        </div>
        <div class="col-2">
            <label>Tipo de Interface:</label><br>
            <select required type="text" id="interface" name="interface" class="form-control">
                @if ($lmc->interface == 'subinterface-qinq')
                <option value="subinterface-qinq" selected>Sub-Interface / QinQ</option>
                @else
                <option value="subinterface-qinq">Sub-Interface / QinQ</option>
                @endif
                @if ($lmc->interface == 'subinterface-dot1q')
                <option value="subinterface-dot1q" selected>Sub-Interface / Dot1Q</option>
                @else
                <option value="subinterface-dot1q">Sub-Interface / Dot1Q</option>
                @endif
                @if ($lmc->interface == 'interface-qinq')
                <option value="interface-qinq" selected>Interface / Dot1Q</option>
                @else
                <option value="interface-qinq">Interface / Dot1Q</option>
                @endif
                @if ($lmc->interface == 'interface-vlanif')
                <option value="interface-vlanif" selected>Interface / VlanIF</option>
                @else
                <option value="interface-vlanif">Interface / VlanIF</option>
                @endif
            </select>
        </div>
        <div class="col-4">
            <label>Coordenadas:</label><br>
            <input type="text" id="coordenadas" name="coordenadas" class="form-control" value="{{ $lmc->coordenadas }}"><br>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Sigla Cidade:</label><br>
                <select required type="text" id="cidade_id" name="cidade_id" class="form-control">
                    @foreach($cidades as $cidade)
                        @if ($cidade->id == $lmc->cidade_id)
                        <option value="{{ $cidade->id }}" selected>
                            {{ $cidade->sigla }}
                        </option>
                        @else
                        <option value="{{ $cidade->id }}">
                            {{ $cidade->sigla }}
                        </option>
                        @endif
                    @endforeach
                </select>           
            </a>       
        </div>
        <div class="col-4">
            <label>Ativo:</label><br>
                <select required type="text"id="ativo_id" name="ativo_id" class="form-control">
                    @foreach($ativos as $ativo)
                        @if ($ativo->id == $lmc->ativo_id)
                        <option value="{{ $ativo->id }}" selected>
                            {{ $ativo->descricao }}
                        </option>
                        @else
                        <option value="{{ $ativo->id }}">
                            {{ $ativo->descricao }}
                        </option>
                        @endif
                    @endforeach
                </select><br>
            </a>       
        </div>
    </div>
    <div class="row" style="margin: 1rem 0rem;">
        <h3>Selecione o(s) Serviço(s)</h3>
        <a class="btn btn-danger" onclick="newSvc()" style="margin: 0rem 1.5rem;padding: 0.5rem 1rem;"><i class="bx bx-plus-medical"></i></a>
    </div>
    <div class="row" id="repeat">
        @if($quant == 0)
        <div class="col-3">
            <label>SVC:</label><br>
            <select required type="text" id="svc[]" name="svc[]" class="form-control">
                <option value="0">NENHUM</option>
                @foreach($svcs as $svc)
                <option value="{{ $svc->id }}">
                    {{ $svc->identificador }} - {{ $svc->informacoes }}
                </option>
                @endforeach
            </select><br>
        </div>
        @else
        @foreach($has as $ha)
        <div class="col-3">
            <label>SVC:</label><br>
            <select required type="text" id="svc[]" name="svc[]" class="form-control">
                <option value="0">NENHUM</option>
                @foreach($svcs as $svc)
                    @if($svc->id == $ha->svc_id)
                    <option value="{{ $svc->id }}" selected>
                        {{ $svc->identificador }} - {{ $svc->informacoes }}
                    </option>
                    @else
                    <option value="{{ $svc->id }}">
                        {{ $svc->identificador }} - {{ $svc->informacoes }}
                    </option>
                    @endif
                @endforeach
            </select><br>
        </div>
        @endforeach
        @endif
    </div>
    <div class="row">
        <div class="col-12">
            <a href="<?php echo WEB_ROOT."/lmc";?>" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Salvar">
            <a href="<?php echo WEB_ROOT."/lmc/script/".$lmc->id;?>" class="btn btn-success ml-2" target="_blank">Gerar Script Mikrotik</a>
        </div>
        <div class="col-12">
            <br><br><h3>Lista de LMX's</h3>
            <a href="<?php echo WEB_ROOT."/lmx/cadastrar/".$lmc->id;?>" class="btn btn-warning">Cadastrar LMX</a><br><br>
        </div>
        <div class="col-12">
            <table class="table table-bordered table-hover data-table background-table">
                <thead>
                    <tr>
                    <th class="text-center">LMX</th>
                    <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lmxs as $lmx)
                    <tr class="text-center">
                        <td>{{ $lmx->nome }}</td>
                        <td>
                            <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/lmx/editar/";?>{{ $lmx->id }}">
                                <i class="bx bxs-edit"></i>
                            </a>
                            <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/lmx/excluir/";?>{{ $lmx->id }}">
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
