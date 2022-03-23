@extends('painel')

@section("title", "Ultima Milha")

@section('content')
<script>
document.getElementById("menu-item-ultima-milha").className += " active";
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-ultima-milha" href="<?php echo WEB_ROOT."/ultima-milha/cadastrar";?>">
            Cadastrar Última Milha
        </a>

        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">Nome Fantasia</th>
                    <th class="text-center">CPF/CNPJ</th>
                    <th class="text-center">Telefone</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ultimas as $ultima)
                <tr class="text-center">
                    <td class="text-left">{{ $ultima->fantasia }}</td>
                    <td>{{ $ultima->cnpj }}</td>
                    <td>{{ $ultima->telefone }}</td>
                    <td>{{ $ultima->email }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/ultima-milha/editar/";?>{{ $ultima->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/ultima-milha/excluir/";?>{{ $ultima->id }}">
                            <i class="bx bxs-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
<!-- NO PERMISSION INDEX MESSAGE -->
<div class="col-xs-12" id="divErrorUser" style="display: none;">
    <div class="box box-primary">
        <table id="userDatatable" class="table table-bordered table-hover data-table">
            <thead>
                <tr>
                    <th class="text-center">Você não tem permissão para visualizar Última Milha.</br>
                        <button id="exitIndexUser" type="button" class="btn btn-primary margin-top-20">
                            Voltar
                        </button>
                    </th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<!-- NO PERMISSION INDEX MESSAGE END -->

@endsection
