@extends('painel')

@section("title", "LMX")

@section('content')
<script>
document.getElementById("menu-item-lmx").className += " active";
</script>
<div class="col-xs-12">
    <div class="box box-primary">
        <a class="btn btn-warning btn-cadastrar" id="btn-cadastrar-lmx" href="<?php echo WEB_ROOT."/lmx/cadastrar";?>">
            Cadastrar LMX
        </a>

        <table class="table table-bordered table-hover data-table background-table">
            <thead>
                <tr>
                    <th class="text-center">LMCE Name</th>
                    <th class="text-center">Faixa de Gerência</th>
                    <th class="text-center">VLAN Gerência</th>
                    <th class="text-center">VLAN Serviço</th>
                    <th class="text-center">Peering MROUTER</th>
                    <th class="text-center">Peering CLIENTE</th>
                    <th class="text-center">Observações</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>
                @foreach($lmxs as $lmx)
                <tr class="text-center">
                    <td>{{ $lmx->nome }}</td>
                    <td>{{ $lmx->faixa_gerencia }}</td>
                    <td>{{ $lmx->vlan_gerencia }}</td>
                    <td>{{ $lmx->out_vlan }}</td>
                    @if($lmx->peering_mrouter != null)
                    <td>{{ $lmx->peering_mrouter }}</td>
                    @else
                    <td> - </td>
                    @endif
                    @if($lmx->peering_cliente1 != null)
                        @if($lmx->peering_cliente2 != null)
                    <td>{{ $lmx->peering_cliente1.' / '.$lmx->peering_cliente2 }}</td>
                        @else
                    <td>{{ $lmx->peering_cliente1 }}</td>
                        @endif
                    @else
                    <td> - </td>
                    @endif
                    <td>{{ $lmx->observacoes }}</td>
                    <td>
                        <a class="btn btn-small btn-info" href="<?php echo WEB_ROOT."/lmx/editar/";?>{{ $lmx->id }}">
                            <i class="bx bxs-edit"></i>
                        </a>
                        <a class="btn btn-small btn-danger" onclick="return confirm('Deseja realmente excluir?')" href="<?php echo WEB_ROOT."/lmx/excluir/";?>{{ $lmx->id }}">
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
