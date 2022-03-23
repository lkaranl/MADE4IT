@extends('painel')

@section("title", "Cadastrar Sites")

@section('content')
<script>
document.getElementById("menu-item-site").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Cadastro Sites</h2>
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
    <form action="/site/cadastrar" method="post">
    @csrf
    <div class="row">   
        <div class="col-4">
            <label>Nome:</label><br>
            <input required type="text" id="nome" name="nome" class="form-control" value=""><br>
        </div>             
        <div class="col-2">
            <label>Sigla:</label><br>
            <input required type="text" id="sigla" name="sigla" class="form-control" value=""><br>
        </div>
        <div class="col-3">
            <label>Estado ID:</label><br>
                <select required type="text"id="estado_id" name="estado_id" class="form-control">
                    @foreach($estados as $estado)
                    <option value='{{ $estado->id }}'>
                        {{ $estado->sigla }} - {{ $estado->nome }}
                    @endforeach
                    </option>
                </select>           
            </a>       
        </div>
        <div class="col-3">
            <label>Cidade ID:</label><br>
                <select required type="text"id="cidade_id" name="cidade_id" class="form-control">
                    @foreach($cidades as $cidade)
                    <option value='{{ $cidade->id }}'>
                        {{ $cidade->sigla }} - {{ $cidade->nome }}
                    @endforeach
                    </option>
                </select>           
            </a>       
        </div>
        <div class="col-3">
            <label>Faixa Administrativa:</label><br>
            <input required type="text" id="faixa_administrativa" name="faixa_administrativa" class="form-control" placeholder="0.0.0.0/24" value=""><br>
        </div>
        <div class="col-4">
            <label>Coordenadas:</label><br>
            <input type="text" id="coordenadas" name="coordenadas" class="form-control" value=""><br>
        </div>
        <div class="col-12">
            <a href="{{ route('site') }}" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</div>
@endsection
