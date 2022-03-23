<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// ROTAS - PAINEL
Route::get('/',         [App\Http\Controllers\HomeController::class, 'painel'])->name('painel');
Route::get('/painel',   [App\Http\Controllers\HomeController::class, 'painel'])->name('painel');

// ROTAS - ULTIMA MILHA
Route::get('/ultima-milha', 				[App\Http\Controllers\UltimaMilhaController::class, 'ultimaMilha'])->name('ultimaMilha');
Route::get('/ultima-milha/cadastrar', 		[App\Http\Controllers\UltimaMilhaController::class, 'ultimaMilhaCadastrar'])->name('ultimaMilhaCadastrar');
Route::post('/ultima-milha/cadastrar', 		[App\Http\Controllers\UltimaMilhaController::class, 'Cadastrar'])->name('Cadastrar');
Route::get('/ultima-milha/editar/{id}', 	[App\Http\Controllers\UltimaMilhaController::class, 'ultimaMilhaEditar'])->name('ultimaMilhaEditar');
Route::post('/ultima-milha/editar/{id}',	[App\Http\Controllers\UltimaMilhaController::class, 'ultimaMilhaAtualizar'])->name('ultimaMilhaAtualizar');
Route::get('/ultima-milha/excluir/{id}', 	[App\Http\Controllers\UltimaMilhaController::class, 'ultimaMilhaExcluir'])->name('ultimaMilhaExcluir');
Route::get('/ultima-milha/buscar',			[App\Http\Controllers\UltimaMilhaController::class, 'ultimaMilhaBuscar'])->name('ultimaMilhaBuscar');

// ROTAS - LMX
Route::get('/lmx',                  [App\Http\Controllers\LmxController::class, 'lmx'])->name('lmx');
Route::get('/lmx/cadastrar/{id}',   [App\Http\Controllers\LmxController::class, 'lmxCadastrar'])->name('lmxCadastrar');
Route::post('/lmx/cadastrar',       [App\Http\Controllers\LmxController::class, 'Cadastrar'])->name('CadastrarLmx');
Route::get('/lmx/editar/{id}',      [App\Http\Controllers\LmxController::class, 'lmxEditar'])->name('lmxEditar');
Route::post('/lmx/editar/{id}',     [App\Http\Controllers\LmxController::class, 'lmxAtualizar'])->name('lmxAtualizar');
Route::get('/lmx/excluir/{id}',     [App\Http\Controllers\LmxController::class, 'lmxExcluir'])->name('lmxExcluir');

// ROTAS - LMC
Route::get('/lmc',                  [App\Http\Controllers\LmcController::class, 'lmc'])->name('lmc');
Route::get('/lmc/cadastrar',        [App\Http\Controllers\LmcController::class, 'lmcCadastrar'])->name('lmcCadastrar');
Route::post('/lmc/cadastrar',       [App\Http\Controllers\LmcController::class, 'Cadastrar'])->name('CadastrarLmc');
Route::get('/lmc/cadastrar/{id}',   [App\Http\Controllers\LmcController::class, 'lmcCadastrar'])->name('lmcCadastrar');
Route::get('/lmc/editar/{id}',      [App\Http\Controllers\LmcController::class, 'lmcEditar'])->name('lmcEditar');
Route::post('/lmc/editar/{id}',     [App\Http\Controllers\LmcController::class, 'lmcAtualizar'])->name('lmcAtualizar');
Route::get('/lmc/excluir/{id}',     [App\Http\Controllers\LmcController::class, 'lmcExcluir'])->name('lmcExcluir');
Route::get('/lmc/buscar',			[App\Http\Controllers\LmcController::class, 'lmcBuscar'])->name('lmcBuscar');
Route::get('/lmc/script/{id}',      [App\Http\Controllers\LmcController::class, 'lmcScript'])->name('lmcScript');
Route::post('/lmc/script/{id}',     [App\Http\Controllers\LmcController::class, 'lmcScriptAtualizar'])->name('lmcScriptAtualizar');
Route::get('/lmc/info/{id}',        [App\Http\Controllers\LmcController::class, 'lmcInfo'])->name('lmcInfo');

// ROTAS - SVC
Route::get('/svc',              [App\Http\Controllers\SvcController::class, 'svc'])->name('svc');
Route::get('/svc/cadastrar',    [App\Http\Controllers\SvcController::class, 'svcCadastrar'])->name('svcCadastrar');
Route::post('/svc/cadastrar',   [App\Http\Controllers\SvcController::class, 'Cadastrar'])->name('CadastrarSvc');
Route::get('/svc/editar/{id}',  [App\Http\Controllers\SvcController::class, 'svcEditar'])->name('svcEditar');
Route::post('/svc/editar/{id}', [App\Http\Controllers\SvcController::class, 'svcAtualizar'])->name('svcAtualizar');
Route::get('/svc/excluir/{id}', [App\Http\Controllers\SvcController::class, 'svcExcluir'])->name('svcExcluir');
Route::get('/svc/buscar', 		[App\Http\Controllers\SvcController::class, 'svcBuscar'])->name('svcBuscar');

// ROTAS - CLIENTE
Route::get('/cliente', 				[App\Http\Controllers\ClienteController::class, 'cliente'])->name('cliente');
Route::get('/cliente/cadastrar', 	[App\Http\Controllers\ClienteController::class, 'clienteCadastrar'])->name('clienteCadastrar');
Route::post('/cliente/cadastrar', 	[App\Http\Controllers\ClienteController::class, 'cadastrar'])->name('cadastrarCliente');
Route::get('/cliente/editar/{id}', 	[App\Http\Controllers\ClienteController::class, 'clienteEditar'])->name('clienteEditar');
Route::post('/cliente/editar/{id}', [App\Http\Controllers\ClienteController::class, 'clienteAtualizar'])->name('clienteAtualizar');
Route::get('/cliente/excluir/{id}', [App\Http\Controllers\ClienteController::class, 'clienteExcluir'])->name('clienteExcluir');
Route::get('/cliente/buscar', 		[App\Http\Controllers\ClienteController::class, 'clienteBuscar'])->name('clienteBuscar');

// ROTAS - EQUIPAMENTO
Route::get('/equipamento',              [App\Http\Controllers\EquipamentoController::class, 'equipamento'])->name('equipamento');
Route::get('/equipamento/cadastrar',    [App\Http\Controllers\EquipamentoController::class, 'equipamentoCadastrar'])->name('equipamentoCadastrar');
Route::post('/equipamento/cadastrar',   [App\Http\Controllers\EquipamentoController::class, 'cadastrar'])->name('cadastrarEquipamento');
Route::get('/equipamento/editar/{id}',  [App\Http\Controllers\EquipamentoController::class, 'equipamentoEditar'])->name('equipamentoEditar');
Route::post('/equipamento/editar/{id}', [App\Http\Controllers\EquipamentoController::class, 'equipamentoAtualizar'])->name('equipamentoAtualizar');
Route::get('/equipamento/excluir/{id}', [App\Http\Controllers\EquipamentoController::class, 'equipamentoExcluir'])->name('equipamentoExcluir');
Route::get('/equipamento/buscar', 		[App\Http\Controllers\EquipamentoController::class, 'equipamentoBuscar'])->name('equipamentoBuscar');

// ROTAS - ATIVOS
Route::get('/ativo', 				[App\Http\Controllers\AtivoController::class, 'ativo'])->name('ativo');
Route::get('/ativo/cadastrar', 		[App\Http\Controllers\AtivoController::class, 'ativoCadastrar'])->name('ativoCadastrar');
Route::post('/ativo/cadastrar', 	[App\Http\Controllers\AtivoController::class, 'cadastrar'])->name('cadastrarAtivo');
Route::get('/ativo/editar/{id}', 	[App\Http\Controllers\AtivoController::class, 'ativoEditar'])->name('ativoEditar');
Route::post('/ativo/editar/{id}', 	[App\Http\Controllers\AtivoController::class, 'ativoAtualizar'])->name('ativoAtualizar');
Route::get('/ativo/excluir/{id}', 	[App\Http\Controllers\AtivoController::class, 'ativoExcluir'])->name('ativoExcluir');
Route::get('/ativo/buscar', 		[App\Http\Controllers\AtivoController::class, 'ativoBuscar'])->name('ativoBuscar');

// ROTAS - SITE
Route::get('/site', 				[App\Http\Controllers\SiteController::class, 'site'])->name('site');
Route::get('/site/cadastrar', 		[App\Http\Controllers\SiteController::class, 'siteCadastrar'])->name('siteCadastrar');
Route::post('/site/cadastrar', 		[App\Http\Controllers\SiteController::class, 'cadastrar'])->name('cadastrarSite');
Route::get('/site/editar/{id}',	 	[App\Http\Controllers\SiteController::class, 'siteEditar'])->name('siteEditar');
Route::post('/site/editar/{id}', 	[App\Http\Controllers\SiteController::class, 'siteAtualizar'])->name('siteAtualizar');
Route::get('/site/excluir/{id}', 	[App\Http\Controllers\SiteController::class, 'siteExcluir'])->name('siteExcluir');
Route::get('/site/buscar', 			[App\Http\Controllers\SiteController::class, 'siteBuscar'])->name('siteBuscar');

// ROTAS - ENLACE
Route::get('/enlace',               [App\Http\Controllers\EnlaceController::class, 'enlace'])->name('enlace');
Route::get('/enlace/cadastrar',     [App\Http\Controllers\EnlaceController::class, 'enlaceCadastrar'])->name('enlaceCadastrar');
Route::post('/enlace/cadastrar',    [App\Http\Controllers\EnlaceController::class, 'cadastrar'])->name('cadastrarEnlace');
Route::get('/enlace/editar/{id}',   [App\Http\Controllers\EnlaceController::class, 'enlaceEditar'])->name('enlaceEditar');
Route::post('/enlace/editar/{id}',  [App\Http\Controllers\EnlaceController::class, 'enlaceAtualizar'])->name('enlaceAtualizar');
Route::get('/enlace/excluir/{id}',  [App\Http\Controllers\EnlaceController::class, 'enlaceExcluir'])->name('enlaceExcluir');
Route::get('/enlace/buscar', 		[App\Http\Controllers\EnlaceController::class, 'enlaceBuscar'])->name('enlaceBuscar');

// ROTAS - CIDADE
Route::get('/cidade', 				[App\Http\Controllers\CidadeController::class, 'cidade'])->name('cidade');
Route::get('/cidade/cadastrar',	 	[App\Http\Controllers\CidadeController::class, 'cidadeCadastrar'])->name('cidadeCadastrar');
Route::post('/cidade/cadastrar', 	[App\Http\Controllers\CidadeController::class, 'Cadastrar'])->name('Cadastrar');
Route::get('/cidade/editar/{id}', 	[App\Http\Controllers\CidadeController::class, 'cidadeEditar'])->name('cidadeEditar');
Route::post('/cidade/editar/{id}', 	[App\Http\Controllers\CidadeController::class, 'cidadeAtualizar'])->name('cidadeAtualizar');
Route::get('/cidade/excluir/{id}', 	[App\Http\Controllers\CidadeController::class, 'cidadeExcluir'])->name('cidadeExcluir');
Route::get('/cidade/buscar', 		[App\Http\Controllers\CidadeController::class, 'cidadeBuscar'])->name('cidadeBuscar');

// ROTAS - USUARIO
Route::get('/usuario/editar/{name}',    [App\Http\Controllers\UsuarioController::class, 'usuarioEditar'])->name('usuarioEditar');
Route::post('/usuario/editar/{name}',   [App\Http\Controllers\UsuarioController::class, 'usuarioAtualizar'])->name('usuariotualizar');
