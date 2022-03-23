@extends('painel')

@section("title", "LMC")

@section('content')
<script>
function copiarTexto() {
    document.getElementById("script").select();
    document.execCommand('copy');
}
</script>
<div class="col-xs-12">
    <div class="card">
        <div class="card-header">
            <h4 id="menu" class="card-title">Script do LMCE</h4>
            <div class="heading-elements">
                <ul class="list-inline mb-0">
                    <li>
                        <a onClick="copiarTexto()" title="Copiar"><i class="bx bx-copy-alt"></i></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="card-content collapse show" aria-expanded="true">
            <div class="card-body">
                <div class="margin-0">
<textarea name="script" id="script" cols="flex" rows=20">
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
:global svc{{$i+1}} "- SVC.{{$lmc->spid}}.{{$svc->svct}}.{{$svc->identificador}} => {{$svc->informacoes}}";
@endif
@endforeach
@endfor
:global ether1 "ether1 - UpLink";
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
:global ether{{$i+2}} "ether{{$i+2}} $svc{{$i+1}}";
@endif
@endforeach
@endfor
:global ether10 "ether10 - Manuten\E7\E3o";
@foreach($lmxs as $lmx)
:global vlan{{$lmx->vlan_gerencia}} "vlan{{$lmx->vlan_gerencia}} - MGMT";
@endforeach
:global ipvlan{{$lmx->vlan_gerencia}} "{{$gerencia}}";
:global ipgw "{{$getway}}";
@for ($i = 0; $i < count($vrfs); $i++)
@if($vrfs[$i] != null)
:global ipgwvrf{{$i+1}} "{{$vrfs[$i]}}";
@endif
@endfor
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
:global vlan80{{$i}} "vlan80{{$i}} $svc{{$i+1}}";
@endif
@endforeach
@endfor
@for ($i = 0; $i < count($mrouters); $i++)
@if($mrouters[$i] != null)
:global ipvlan80{{$i}} "{{$mrouters[$i]}}";
@endif
@endfor
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
@if($svc->svct == 20 || $svc->svct == 22)
:global bridgesvc{{$i+1}} "bridge $svc{{$i+1}}";
@endif
@endif
@endforeach
@endfor
:global identy "{{$lmx->lmce}} => {{$lmc->ce_identify}}";

@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
@if($svc->svct == 20 || $svc->svct == 22)
/interface bridge
add name=$bridgesvc{{$i+1}} protocol-mode=none
@endif
@endif
@endforeach
@endfor
/interface ethernet
set [ find default-name=ether1 ] name="$ether1"
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
set [ find default-name=ether{{$i+2}} ] name="$ether{{$i+2}}"
@endif
@endforeach
@endfor
@for ($i = 0; $i < 8-$quant; $i++)
set [ find default-name=ether{{$i+2+$quant}} ] disabled=yes
@endfor
set [ find default-name=ether10 ] name="$ether10"
set [ find default-name=sfp1 ] disabled=yes
/interface vlan
add interface=$ether1 name=$vlan{{$lmx->vlan_gerencia}} vlan-id={{$lmx->vlan_gerencia}}
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
add interface=$ether1 name=$vlan80{{$i}} vlan-id=80{{$i}}
@endif
@endforeach
@endfor
/interface bridge port
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
@if($svc->svct == 20 || $svc->svct == 22)
add bridge=$bridgesvc{{$i+1}} interface=$ether{{$i+2}}
add bridge=$bridgesvc{{$i+1}} interface=$vlan80{{$i}}
@endif
@endif
@endforeach
@endfor
/ip address
add address=$ipvlan{{$lmx->vlan_gerencia}} disabled=no interface=$vlan{{$lmx->vlan_gerencia}}
@for ($i = 0; $i < count($mrouters); $i++)
@if($mrouters[$i] != null)
add address=$ipvlan80{{$i}} disabled=no interface=$vlan80{{$i}}
@endif
@endfor
/ip route
add distance=1 gateway=$ipgw
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
@if($svc->svct != 20 && $svc->svct != 22)
add distance=1 gateway=$ipgwvrf{{$i+1}} routing-mark="SVC.{{$lmc->spid}}.{{$svc->svct}}.{{$svc->identificador}}"
@endif
@endif
@endforeach
@endfor
@for ($i = 0; $i < $quant; $i++)
@foreach($svcs as $svc)
@if($svc->id == $has[$i]->svc_id)
@if($svc->svct != 20 && $svc->svct != 22)
/ip route vrf
add interfaces="$ether{{$i+2}},$vlan80{{$i}}" routing-mark="SVC.{{$lmc->spid}}.{{$svc->svct}}.{{$svc->identificador}}"
@endif
@endif
@endforeach
@endfor
/ip service
set telnet disabled=yes
set ftp disabled=yes
set www disabled=yes
set ssh address=10.0.0.0/8,172.16.0.0/12,131.72.152.0/22 port=50022
set api address=10.0.0.0/8,172.16.0.0/12,131.72.152.0/22
set winbox address=10.0.0.0/8,172.16.0.0/12,131.72.152.0/22
set api-ssl disabled=yes
/snmp community
set [ find default=yes ] addresses=131.72.152.0/24 name="m0n1t0r@-Nb\$"
/snmp
set contact=suporte@nbstelecom.com.br enabled=yes location="MADE4IT - Telecom" trap-generators="" trap-version=2
/system identity
set name="$identy"
..
..
user add name=nbs password="N3\$telecom8525_@" group=full
user add name=suportenbs password="N3\$suporte@2021#" group=full
user add name=zabbix.nbs password="N3\$.zabbix@MONITORA#" group=read
user remove numbers=0
</textarea>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
