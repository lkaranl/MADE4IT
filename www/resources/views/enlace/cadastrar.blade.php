@extends('painel')

@section("title", "Cadastrar Enlace")

@section('content')
<script>
document.getElementById("menu-item-enlace").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Cadastro de Enlaces</h2>
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
    <form action="/enlace/cadastrar" method="post">
    @csrf
    <div class="row">
        <div class="col-3">
            <label>Mlink:</label><br>
            <input type="text" class="form-control" value="{{ $mlink }}" disabled><br>
            <input type="hidden" id="mlink" name="mlink" class="form-control" value="{{ $mlink }}"><br>
        </div>
        <div class="col-2">
            <label>Mestre:</label><br>
            <select id="ativo_mestre" name="ativo_mestre" class="form-control">
                @foreach($ativos as $ativo)
                <option value="{{ $ativo->id }}">
                    {{ $ativo->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <label>Escravo:</label><br>
            <select id="ativo_escravo" name="ativo_escravo" class="form-control">
                @foreach($ativos as $ativo)
                <option value="{{ $ativo->id }}">
                    {{ $ativo->nome }}
                </option>
                @endforeach
            </select>
        </div>
        <div class="col-4">
            <label>Faixa:</label><br>
            <input type="text" class="form-control" value="{{ $faixa }}" disabled><br>
            <input type="hidden" id="faixa" name="faixa" class="form-control" value="{{ $faixa }}"><br>
        </div>
        <div class="col-2">
            <label>Route Mestre:</label><br>
            <input type="text" class="form-control" value="{{ $route_mestre }}" disabled><br>
            <input type="hidden" id="route_mestre" name="route_mestre" class="form-control" value="{{ $route_mestre }}"><br>
        </div>
        <div class="col-2">
            <label>Route Escravo:</label><br>
            <input type="text" class="form-control" value="{{ $route_escravo }}" disabled><br>
            <input type="hidden" id="route_escravo" name="route_escravo" class="form-control" value="{{ $route_escravo }}" ><br>
        </div>
        <div class="col-3">
            <label>Observações:</label><br>
            <input type="text" id="observacoes" name="observacoes" class="form-control" value=""><br>
        </div>
        <div class="col-12">
            <a href="{{ route('enlace') }}" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</div>
@endsection
