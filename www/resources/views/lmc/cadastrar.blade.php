@extends('painel')

@section("title", "Cadastrar LMC")

@section('script')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('content')
<script>
document.getElementById("menu-item-lmc").className += " active";

count = 2;

function newSvc() {
    if (count <= 10) {
        $("#repeat").append('<div class="col-3"><label>SVC '+count+':</label><br><select id="svc[]" name="svc[]" class="form-control"><option value="0">NENHUM</option>@foreach($svcs as $svc)<option value="{{ $svc->id }}">{{ $svc->identificador }} - {{ $svc->informacoes }}</option>@endforeach</select><br></div>');
        count = count + 1;
    } else {
        alert('Só é possível cadastrar 10 serviços em um mesmo LMC!');
    }
}
</script>
<div class="background-crude">
    <h2 class="mb-3">Cadastro LMC</h2>
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
    <form action="/lmc/cadastrar" method="post">
    @csrf
    <div class="row">
        <div class="col-1">
            <label>Identificador:</label><br>
            <input required type="number" class="form-control" value="{{ $identificador }}" disabled><br>
            <input required type="hidden" id="identificador" name="identificador" class="form-control" value="{{ $identificador }}">
        </div>             
        <div class="col-1">
            <label>SPID:</label><br>
            <input required type="text" id="spid" name="spid" class="form-control" value="10"><br>
        </div>
        <div class="col-4">
            <label>Ce Identify:</label><br>
            <input required type="text" id="ce_identify" name="ce_identify" class="form-control" value="">
            <label class="input-description">CLIENTE <= Cidade</label><br>
        </div>
    </div>
    <div class="row">
        <div class="col-2">
            <label>VLAN de Gerência:</label><br>
            <input type="number" id="vlan_gerencia" name="vlan_gerencia" class="form-control" value="300"><br>
        </div>
        <div class="col-2">
            <label>Faixa de Gerência:</label><br>
            <input type="text" class="form-control" value="{{ $faixa_gerencia }}" disabled><br>
            <input type="hidden" id="faixa_gerencia" name="faixa_gerencia" class="form-control" value="{{ $faixa_gerencia }}"><br>
        </div>
        <div class="col-2">
            <label>Tipo de Interface:</label><br>
            <select required type="text"id="interface" name="interface" class="form-control">
                <option value="subinterface-qinq">Sub-Interface / QinQ</option>
                <option value="subinterface-dot1q">Sub-Interface / Dot1Q</option>
                <option value="interface-qinq">Interface / Dot1Q</option>
                <option value="interface-vlanif">Interface / VlanIF</option>
            </select><br>
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label>Sigla Cidade:</label><br>
            <select required type="text" id="cidade_id" name="cidade_id" class="form-control">
                @foreach($cidades as $cidade)
                <option value='{{ $cidade->id }}'>
                    {{ $cidade->sigla }} -  {{ $cidade->nome }}
                </option>
                @endforeach
            </select><br>
        </div>
        <div class="col-4">
            <label>Ativo:</label><br>
            <select required type="text" id="ativo_id" name="ativo_id" class="form-control">
                @foreach($ativos as $ativo)
                <option value='{{ $ativo->id }}'>
                    {{ $ativo->nome }} - {{ $ativo->descricao }}
                @endforeach
                </option>
            </select><br>
        </div>
        <div class="col-4">
            <label>Coordenadas:</label><br>
            <input type="text" id="coordenadas" name="coordenadas" class="form-control" value=""><br>
        </div>
    </div>
    <div class="row" style="margin: 1rem 0rem;">
        <h3>Selecione o(s) Serviço(s)</h3>
        <a class="btn btn-danger" onclick="newSvc()" style="margin: 0rem 1.5rem;padding: 0.5rem 1rem;"><i class="bx bx-plus-medical"></i></a>
    </div>
    <div class="row" id="repeat">
        <div class="col-3">
            <label>SVC:</label><br>
            <select required type="text" id="svc[]" name="svc[]" class="form-control">
                <option value="0">NENHUM</option>
                @foreach($svcs as $svc)
                    @if($id !== null)
                        @if($svc->id == $id->id)
                        <option value="{{ $svc->id }}" selected>
                            {{ $svc->identificador }} - {{ $svc->informacoes }}
                        </option>
                        @else
                        <option value="{{ $svc->id }}">
                            {{ $svc->identificador }} - {{ $svc->informacoes }}
                        </option>
                        @endif
                    @else
                    <option value="{{ $svc->id }}">
                        {{ $svc->identificador }} - {{ $svc->informacoes }}
                    </option>
                    @endif
                @endforeach
            </select><br>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <a href="{{ route('lmc') }}" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Próximo">
        </div>
    </div>
</div>
@endsection
