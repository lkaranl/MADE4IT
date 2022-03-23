@extends('painel')

@section("title", "Cadastrar Ativo")

@section('content')
<script>
document.getElementById("menu-item-ativo").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Cadastro Ativos</h2>
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
    <form action="/ativo/cadastrar" method="post">
    @csrf
    <div class="row">   
        <div class="col-4">
            <label>Descrição:</label><br>
            <input required type="text" id="descricao" name="descricao" class="form-control" value=""><br>
        </div>             
        <div class="col-2">
            <label>IP Legado:</label><br>
            <input type="text" id="ip_legado" name="ip_legado" class="form-control" value="" placeholder="0.0.0.0" pattern="(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)_*(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)_*){3}"><br>
        </div>
        <div class="col-2">
            <label>IP:</label><br>
            <input required type="text" id="ip" name="ip" class="form-control" value="" placeholder="0.0.0.0" pattern="(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)_*(\.(25[0-5]|2[0-4]\d|1\d\d|[1-9]?\d)_*){3}"><br>
        </div>
        <div class="col-2">
            <label>Site:</label><br>
                <select required type="text"id="site_id" name="site_id" class="form-control">
                    @foreach($sites as $site)
                    <option value='{{ $site->id }}'>
                        {{ $site->sigla }}
                    @endforeach
                    </option>
                </select>           
            </a>       
        </div>
        <div class="col-3">
            <label>Equipamento:</label><br>
                <select required type="text"id="equipamento_id" name="equipamento_id" class="form-control">
                    @foreach($equipamentos as $equipamento)
                    <option value='{{ $equipamento->id }}'>
                        {{ $equipamento->marca }}/{{ $equipamento->modelo }}
                    @endforeach
                    </option>
                </select>           
            </a>       
        </div>
        <div class="col-3">
            <label>Função:</label><br>
                <select required type="text"id="funcao_id" name="funcao_id" class="form-control">
                    @foreach($funcoes as $funcao)
                    <option value='{{ $funcao->id }}'>
                        {{ $funcao->nome }}
                    @endforeach
                    </option>
                </select>           
            </a>       
        </div>
        <div class="col-4">
            <label>Coordenadas:</label><br>
            <input type="text" id="coordenadas" name="coordenadas" class="form-control" value=""><br>
        </div>
        <div class="col-4">
            <label>Observação:</label><br>
            <input type="text" id="observacao" name="observacao" class="form-control" value=""><br>
        </div>
    </div>
    <div class="row">
        <div class="col-2 form-group">
            <label class="d-block">Ativo(?)</label>
            <div class="custom-control-inline">
                <div class="radio mr-2 mt-1">
                    <input type="radio" name="ativo" id="ativo_sim" value="1" checked>
                    <label for="ativo_sim">Sim</label>
                </div>
                <div class="radio mr-2 mt-1">
                    <input type="radio" name="ativo" id="ativo_nao" value="0">
                    <label for="ativo_nao">Não</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <a href="{{ route('ativo') }}" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</div>
@endsection
