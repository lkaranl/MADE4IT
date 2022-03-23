@extends('painel')

@section("title", "Editar Sites")

@section('content')
<script>
document.getElementById("menu-item-site").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Edição de Sites</h2>
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
    <form action="{{ route('siteAtualizar', ['id' => $site->id]) }}" method="POST">
    @csrf

    <div class="row">   
        <div class="col-4">
            <label>Nome:</label><br>
            <input required type="text" id="nome" name="nome" class="form-control" value="{{ $site->nome }}"><br>
        </div>             
        <div class="col-2">
            <label>Sigla:</label><br>
            <input required type="text" id="sigla" name="sigla" class="form-control" value="{{ $site->sigla }}"><br>
        </div>
        <div class="col-3">
            <label>Estado:</label><br>
                <select required type="text"id="estado_id" name="estado_id" class="form-control">
                    @foreach($estados as $estado)
                        @if ($estado->id == $site->estado_id)
                        <option value="{{ $estado->id }}" selected>
                            {{ $estado->sigla }} - {{ $estado->nome }}
                        </option>
                        @else
                        <option value="{{ $estado->id }}">
                            {{ $estado->sigla }} - {{ $estado->nome }}
                        </option>
                        @endif
                    @endforeach
                </select>           
            </a>       
        </div> 
        <div class="col-3">
            <label>Cidade:</label><br>
                <select required type="text"id="cidade_id" name="cidade_id" class="form-control">
                    @foreach($cidades as $cidade)
                        @if ($cidade->id == $site->cidade_id)
                        <option value="{{ $cidade->id }}" selected>
                            {{ $cidade->sigla }} - {{ $cidade->nome }}
                        </option>
                        @else
                        <option value="{{ $cidade->id }}">
                            {{ $cidade->sigla }} - {{ $cidade->nome }}
                        </option>
                        @endif
                    @endforeach
                </select>           
            </a>       
        </div>   
        <div class="col-3">
            <label>Faixa Administrativa:</label><br>
            <input required type="text" id="faixa_administrativa" name="faixa_administrativa" class="form-control" value="{{ $site->faixa_administrativa }}"><br>
        </div>
        <div class="col-4">
            <label>Coordenadas:</label><br>
            <input type="text" id="coordenadas" name="coordenadas" class="form-control" value="{{ $site->coordenadas }}"><br>
        </div>
        <div class="col-12">
            <a href="{{ route('site') }}" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" class="btn btn-primary" value="Salvar">
        </div>
    </div>
</div>

@endsection
