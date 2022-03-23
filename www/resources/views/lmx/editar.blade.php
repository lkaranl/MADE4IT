@extends('painel')

@section("title", "Editar LMX")

@section('content')
<div class="background-crude">
    <h2 class="mb-3">Editar LMX</h2>
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
    <form action="{{ route('lmxAtualizar', ['id' => $lmx->id]) }}" method="post">
    @csrf
    <div class="row">
        <div class="col-2">
            <label>LMC:</label><br>
            <input required type="text" class="form-control" value="{{ $lmc->nome }}" disabled><br>
            <input required type="hidden" id="lmc_id" name="lmc_id" class="form-control" value="{{ $lmc->id }}">
        </div>
        <div class="col-2">
            <label>LMX:</label><br>
            <input required type="text" class="form-control" value="LMX.{{$lmc->spid.'.'.$lmc->identificador}}" disabled><br>
            <input required type="hidden" id="nome" name="nome" class="form-control" value="LMX.{{$lmc->spid.'.'.$lmc->identificador}}">
        </div>
        <div class="col-4">
            <label>LMCE:</label><br>
            <input required type="text" class="form-control" value="{{$lmc->lmce}}" disabled><br>
        </div>
        @if($sub_gerencia != null && $sub_gerencia != '[]')
        @foreach($sub_gerencia as $subinterface)
        @if($lmc->interface == 'subinterface-qinq')
        <div class="col-5">
            <label>Sub-Interface QinQ Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, PEVLAN XXXX - "XGigabitEthernet0/0/YY.ZZZ0"</label><br>
        </div>
        @elseif($lmc->interface == 'subinterface-dot1q')
        <div class="col-5">
            <label>Sub-Interface Dot1q Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY.ZZZ0"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-dot1q')
        <div class="col-5">
            <label>Interface Dot1q Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-vlanif')
        <div class="col-5">
            <label>Interface Vlanif Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, Vlanif XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @endif
        @endforeach
        @elseif($lmc->vlan_gerencia != null)
        @if($lmc->interface == 'subinterface-qinq')
        <div class="col-5">
            <label>Sub-Interface QinQ Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, PEVLAN XXXX - "XGigabitEthernet0/0/YY.ZZZ0"</label><br>
        </div>
        @elseif($lmc->interface == 'subinterface-dot1q')
        <div class="col-5">
            <label>Sub-Interface Dot1q Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY.ZZZ0"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-dot1q')
        <div class="col-5">
            <label>Interface Dot1q Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-vlanif')
        <div class="col-5">
            <label>Interface Vlanif Gerência:</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="0">
            <label class="input-description">Via Empresa, Vlanif XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @endif
        @endif
        @foreach($svcs as $svc)
        @if($subs != null && $subs != '[]')
        @foreach($subs as $subinterface)
        @if($subinterface->svc_id == $svc->id)
        @if($lmc->interface == 'subinterface-qinq')
        <div class="col-5">
            <label>Sub-Interface QinQ ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $subinterface->svc_id }}">
            <label class="input-description">Via Empresa, PEVLAN XXXX - "XGigabitEthernet0/0/YY.ZZZZ"</label><br>
        </div>
        @elseif($lmc->interface == 'subinterface-dot1q')
        <div class="col-5">
            <label>Sub-Interface Dot1q ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $subinterface->svc_id }}">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY.ZZZZ"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-dot1q')
        <div class="col-5">
            <label>Interface Dot1q ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $subinterface->svc_id }}">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-vlanif')
        <div class="col-5">
            <label>Interface Vlanif ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="{{ $subinterface->nome }}" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $subinterface->svc_id }}">
            <label class="input-description">Via Empresa, Vlanif XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @endif
        @endif
        @endforeach
        @else
        @if($lmc->interface == 'subinterface-qinq')
        <div class="col-5">
            <label>Sub-Interface QinQ ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $svc->id }}">
            <label class="input-description">Via Empresa, PEVLAN XXXX - "XGigabitEthernet0/0/YY.ZZZZ"</label><br>
        </div>
        @elseif($lmc->interface == 'subinterface-dot1q')
        <div class="col-5">
            <label>Sub-Interface Dot1q ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $svc->id }}">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY.ZZZZ"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-dot1q')
        <div class="col-5">
            <label>Interface Dot1q ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $svc->id }}">
            <label class="input-description">Via Empresa, Dot1q XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @elseif($lmc->interface == 'interface-vlanif')
        <div class="col-5">
            <label>Interface Vlanif ({{'SVC.'.$lmc->spid.'.'.$svc->svct.'.'.$svc->identificador.' => '.$svc->informacoes}}):</label><br>
            <input type="text" id="interface[]" name="interface[]" class="form-control" value="" required>
            <input type="hidden" id="svc[]" name="svc[]" class="form-control" value="{{ $svc->id }}">
            <label class="input-description">Via Empresa, Vlanif XXXX - "XGigabitEthernet0/0/YY"</label><br>
        </div>
        @endif
        @endif
        @endforeach
    </div>
    <div class="row">
        <div class="col-12">
            <a href="<?php echo WEB_ROOT."/lmc/editar/".$lmc->id;?>" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>
    </div>
</div>
@endsection