@extends('painel')

@section("title", "Cadastrar Ultima Milha")

@section('content')
<script>
document.getElementById("menu-item-ultima-milha").className += " active";
</script>
<div class="background-crude">
    <h2 class="mb-3">Cadastro de Última Milha</h2>
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
    <form action="/ultima-milha/cadastrar" method="post">
    @csrf
    <div class="row">
        <div class="col-6">
            <label>Nome:</label><br>
            <input required type="text" id="fantasia" name="fantasia" class="form-control" value=""><br>
        </div>
        <div class="col-6">
            <label>Razão Social:</label><br>
            <input required type="text" id="razao_social" name="razao_social" class="form-control" value="" title="Razão social da empresa"><br>
        </div>
        <div class="col-4">
            <label>CPF/CNPJ:</label><br>
            <input required type="text" id="cnpj" name="cnpj" class="form-control" value="" placeholder="" pattern="([0-9]{2}[\.]?[0-9]{3}[\.]?[0-9]{3}[\/]?[0-9]{4}[-]?[0-9]{2})|([0-9]{3}[\.]?[0-9]{3}[\.]?[0-9]{3}[-]?[0-9]{2})" title="xxx.xxx.xxx-xx"><br>
        </div>
        <div class="col-4">
            <label>Telefone:</label><br>
            <input required type="text" id="telefone" name="telefone" class="form-control" value="" placeholder="(xx)xxxxx-xxxx" pattern="\([0-9]{2}\)[0-9]{4,6}-[0-9]{3,4}$" title="(xx)xxxxx-xxxx"><br>
        </div>
        <div class="col-4">
            <label>CEP:</label><br>
            <input required type="text" id="cep" name="cep" class="form-control" value="" placeholder="xxxxx-xxx" pattern="[0-9]{5}-[0-9]{3}" title="(xx)xxxxx-xxxx"><br>
        </div>
        <div class="col-6">
            <label>Endereço:</label><br>
            <input required type="text" id="endereco" name="endereco" class="form-control" value=""><br>
        </div>
        <div class="col-6">
            <label>E-mail:</label><br>
            <input required type="email" id="email" name="email" class="form-control" value=""><br>
        </div>
        <div class="col-12">
            <a href="<?php echo WEB_ROOT."/ultima-milha";?>" class="btn btn-danger">Cancelar</a>
            <input type="submit" class="btn btn-primary" value="Cadastrar">
        </div>
    </div>
</div>

@endsection
