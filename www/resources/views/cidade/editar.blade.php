@extends('painel')

@section("title", "Cadastrar Cidade")

@section('script')
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
@endsection

@section('content')
<script>
document.getElementById("menu-item-cidade").className += " active";

function newUltimaMilha() {
    $("#repeat").append('<div class="col-3"><label>Última milha que atende:</label><br><select id="ultimas[]" name="ultimas[]" class="form-control"><option value="0">NENHUMA</option>@foreach($ultimas as $ultima)<option value="{{ $ultima->id }}">{{ $ultima->fantasia }}</option>@endforeach</select><br></div>');
}
</script>
<div class="background-crude">
    <h2 class="mb-3">Editar Cidade</h2>
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
    <form action="{{ route('cidadeAtualizar', ['id' => $cidade->id]) }}" method="post">
    @csrf
    <div class="row">
        <div class="col-3">
            <label>Cidade:</label><br>
            <input required type="text" id="nome" name="nome" class="form-control" value="{{ $cidade->nome }}"><br>
        </div>
        <div class="col-1">
            <label>Sigla:</label><br>
            <input required type="text" id="sigla" name="sigla" class="form-control" value="{{ $cidade->sigla }}"><br>
        </div>
        <div class="col-1">
            <label>Estado:</label><br>
            <select id="estado" name="estado" class="form-control">
                @foreach($estados as $estado)
                    @if ($estado->id == $cidade->estado_id)
                    <option value="{{ $estado->id }}" selected>
                        {{ $estado->sigla }}
                    </option>
                    @else
                    <option value="{{ $estado->id }}">
                        {{ $estado->sigla }}
                    </option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="row" id="repeat">
        <div class="col-1">
            <a class="btn btn-danger" onclick="newUltimaMilha()" style="margin: 0.8rem 1.5rem;padding: 0.7rem 1.5rem;"><i class="bx bx-plus-medical"></i></a>
        </div>
        @if($quant == 0)
        <div class="col-3">
            <label>Última milha que atende:</label><br>
            <select required id="ultimas[]" name="ultimas[]" class="form-control">
                <option value="0">NENHUMA</option>
                @foreach($ultimas as $ultima))
                <option value="{{ $ultima->id }}">
                    {{ $ultima->fantasia }}
                </option>
                @endforeach
            </select><br>
        </div>
        @else
        @foreach($has as $ha)
        <div class="col-3">
            <label>Última milha que atende:</label><br>
            <select id="ultimas[]" name="ultimas[]" class="form-control">
                <option value="0">NENHUMA</option>
                @foreach($ultimas as $ultima)
                    @if ($ultima->id == $ha->ultima_milha_id)
                    <option value="{{ $ultima->id }}" selected>
                        {{ $ultima->fantasia }}
                    </option>
                    @else
                    <option value="{{ $ultima->id }}">
                        {{ $ultima->fantasia }}
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
            <a href="<?php echo WEB_ROOT."/cidade";?>" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Salvar">
        </div>
    </div>
</div>

@endsection
