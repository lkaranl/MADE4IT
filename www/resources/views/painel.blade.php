<?php
if (Auth::user() === null) {
    header("Location: " . WEB_ROOT);
    die();
}
?>

    <!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<!-- BEGIN: Head-->
<head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description"
          content="Frest admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords"
          content="admin template, Frest admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
    <title>MADE4IT - TESTE DESENVOLVEDOR PLENO</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('images/logo/mini-logo.png') }}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,600%7CIBM+Plex+Sans:300,400,500,600,700"
          rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/vendors/css/charts/apexcharts.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/vendors/css/extensions/dragula.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/components.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/themes/dark-layout.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/themes/semi-dark-layout.min.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css"
          href="<?=WEB_ROOT?>/app-assets/css/core/menu/menu-types/vertical-menu.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/pages/widgets.min.css">
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/app-assets/css/pages/dashboard-analytics.min.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?=WEB_ROOT?>/assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-sticky footer-static  "
      data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

<!-- BEGIN: Header-->
<div class="header-navbar-shadow"></div>
<nav class="header-navbar main-header-navbar navbar-expand-lg navbar navbar-with-menu fixed-top navbar-dark">
    <div class="navbar-wrapper">
        <div class="navbar-container content">
            <div class="navbar-collapse" id="navbar-mobile">
                <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav">
                        <li class="nav-item mobile-menu d-xl-none mr-auto"><a
                                class="nav-link nav-menu-main menu-toggle hidden-xs" href="javascript:void(0);"><i
                                    class="ficon bx bx-menu"></i></a></li>
                    </ul>
                </div>


                <ul class="nav navbar-nav float-right">
                    <div class="dropdown-menu" aria-labelledby="dropdown-flag"><a class="dropdown-item"
                                                                                  href="javascript:void(0);"
                                                                                  data-language="en"><i
                                class="flag-icon flag-icon-us mr-50"></i> English</a><a class="dropdown-item"
                                                                                        href="javascript:void(0);"
                                                                                        data-language="fr"><i
                                class="flag-icon flag-icon-fr mr-50"></i> French</a><a class="dropdown-item"
                                                                                       href="javascript:void(0);"
                                                                                       data-language="de"><i
                                class="flag-icon flag-icon-de mr-50"></i> German</a><a class="dropdown-item"
                                                                                       href="javascript:void(0);"
                                                                                       data-language="pt"><i
                                class="flag-icon flag-icon-pt mr-50"></i> Portuguese</a></div>
                    </li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i
                                class="ficon bx bx-fullscreen"></i></a></li>

                @if(Request::segment(2) == "cadastrar" or Request::segment(2) == "editar")
                    <!-- EM BRANCO -->
                    @else
                        <li class="nav-item nav-search"><a class="nav-link nav-link-search"><i
                                    class="ficon bx bx-search"></i></a>
                            @if(Request::segment(2) == "buscar")
                                <form action="{{Request::segment(0)}}/{{Request::segment(1)}}/buscar" method="get">
                                    @else
                                        <form action="{{Request::segment(1)}}/buscar" method="get">
                                            @endif
                                            <div class="search-input">
                                                <div class="search-input-icon"><i class="bx bx-search warning"></i>
                                                </div>
                                                <input class="input" type="text" placeholder="Pesquisar..."
                                                       tabindex="-1" data-search="template-search" name="search">
                                                <div class="search-input-close"><i class="bx bx-x"></i>
                                                </div>
                                                <ul class="search-list"></ul>
                                            </div>
                                            @endif
                                        </form>
                        </li>
                        <li class="dropdown dropdown-user nav-item">
                            <a class="dropdown-toggle nav-link dropdown-user-link" href="javascript:void(0);"
                               data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none">
                                    <span class="user-name">{{ Auth::user()->name }}</span>
                                    <span class="user-status text-muted">Online</span>
                                </div>
                                <span>
                        <img class="round" src="{{ asset('images/uploads/'.Auth::user()->name.'.png') }}" alt="avatar"
                             height="40" width="40">
                    </span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right pb-0">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();document.getElementById('logout-form').submit();"
                                       style="background-color: #ffffff0f;"><i class="bx bx-power-off mr-50"></i>Logout</a>
                                    @csrf
                                </form>

                            </div>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</nav>
<!-- END: Header-->

<!-- BEGIN: Main Menu-->
<div class="main-menu menu-fixed menu-dark menu-accordion menu-shadow" data-scroll-to-active="true">
    <div class="navbar-header">
        <ul class="nav navbar-nav flex-row">
            <li class="nav-item mr-auto"><a class="navbar-brand" href="{{ route('painel') }}">
                    <div class="brand-logo">
                        <img src="{{ URL::asset('images/logo/logo.png') }}" alt="logo">
                    </div>
                    <h2 class="brand-text mb-0">MADE4IT</h2></a></li>
            <li class="nav-item nav-toggle"><a class="nav-link modern-nav-toggle pr-0" data-toggle="collapse"><i
                        class="bx bx-x d-block d-xl-none font-medium-4 warning"></i><i
                        class="toggle-icon bx bx-disc font-medium-4 d-none d-xl-block warning" data-ticon="bx-disc"></i></a>
            </li>
        </ul>
    </div>
    @if( Auth::user()->is_admin == 1)
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
                data-icon-style="lines">
                <li class=" nav-item" id="menu-item-cliente"><a href="{{ route('cliente') }}"><i
                            class="bx bxs-happy"></i><span class="menu-title text-truncate">Cliente</span></a></li>
                <li class=" nav-item" id="menu-item-svc"><a href="{{ route('svc') }}"><i class="bx bx-globe"></i><span
                            class="menu-title text-truncate">SVC</span></a></li>
                <li class=" nav-item" id="menu-item-lmc"><a href="{{ route('lmc') }}"><i class="bx bx-globe"></i><span
                            class="menu-title text-truncate">LMC</span></a></li>
                <li class=" nav-item" id="menu-item-estrutura"><a href="#"><i class="bx bxs-server"></i><span
                            class="menu-title text-truncate">Estrutura</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item" id="menu-item-site"><a href="{{ route('site') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-title text-truncate">Site</span></a>
                        </li>
                        <li class=" nav-item" id="menu-item-ativo"><a href="{{ route('ativo') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span
                                    class="menu-title text-truncate">Ativo</span></a></li>
                        <li class=" nav-item" id="menu-item-enlace"><a href="{{ route('enlace') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span
                                    class="menu-title text-truncate">Enlace</span></a></li>
                        <li class=" nav-item" id="menu-item-equipamento"><a href="{{ route('equipamento') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span
                                    class="menu-title text-truncate">Equipamento</span></a></li>
                    </ul>
                </li>
                <li class=" nav-item" id="menu-item-database"><a href="#"><i class="bx bx-data"></i><span
                            class="menu-title text-truncate">Database</span></a>
                    <ul class="menu-content">
                        <li class=" nav-item" id="menu-item-ultima-milha"><a href="{{ route('ultimaMilha') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span class="menu-title text-truncate">Última Milha</span></a>
                        </li>
                        <li class=" nav-item" id="menu-item-cidade"><a href="{{ route('cidade') }}"><i
                                    class="bx bx-right-arrow-alt"></i><span
                                    class="menu-title text-truncate">Cidade</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>
</div>
@else
    <div class="shadow-bottom"></div>
    <div class="main-menu-content">
        <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation"
            data-icon-style="lines">
            <li class=" nav-item" id="menu-item-cliente"><a href="{{ route('cliente') }}"><i
                        class="bx bxs-happy"></i><span class="menu-title text-truncate">Cliente</span></a></li>
            <li class=" nav-item" id="menu-item-svc"><a href="{{ route('svc') }}"><i class="bx bx-globe"></i><span
                        class="menu-title text-truncate">SVC</span></a></li>
            <li class=" nav-item" id="menu-item-lmc"><a href="{{ route('lmc') }}"><i class="bx bx-globe"></i><span
                        class="menu-title text-truncate">LMC</span></a></li>
        </ul>
    </div>
    </div>
@endif
<!-- END: Main Menu-->

<!-- BEGIN: Content-->
<div class="app-content content">
    <div class="content-overlay"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">

            @yield('content')
            @if(Request::segment(2) == "buscar")
                @if($search != "")
                    <h4>Resultado da pesquisa por <?php echo mb_strtoupper($search);?> </h4>
                @endif
            @else
            @endif
        </div>
    </div>
</div>
<!-- END: Content-->


<!-- BEGIN: Customizer-->
<div class="customizer d-none d-md-block">
    <a class="customizer-toggle" href="javascript:void(0);" style="visibility: hidden;"><i
            class="bx bx-cog bx bx-spin white"></i></a>
    <div class="customizer-content p-2">
        <h4 class="text-uppercase mb-0">Custumize Seu Tema</h4>
        <a href="javascript:void(0)" class="customizer-close">
            <i class="bx bx-x"></i>
        </a>
        <hr>
        <!-- Theme options starts -->
        <h5 class="mt-1">Temas</h5>
        <div class="theme-layouts">
            <div class="d-flex justify-content-start">
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="layoutOptions" value="false" id="radio-light" class="layout-name"
                                   data-layout=""
                                   checked>
                            <label for="radio-light">Light</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="layoutOptions" value="false" id="radio-dark" class="layout-name"
                                   data-layout="dark-layout">
                            <label for="radio-dark">Dark</label>
                        </div>
                    </fieldset>
                </div>
                <div class="mx-50">
                    <fieldset>
                        <div class="radio">
                            <input type="radio" name="layoutOptions" value="false" id="radio-semi-dark"
                                   class="layout-name"
                                   data-layout="semi-dark-layout">
                            <label for="radio-semi-dark">Semi Dark</label>
                        </div>
                    </fieldset>
                </div>
            </div>
        </div>
        <!-- Theme options starts -->
        <hr>

        <!-- Menu Colors Starts -->
        <div id="customizer-theme-colors">
            <h5>Menu de Cores</h5>
            <ul class="list-inline unstyled-list">
                <li class="color-box bg-white border selected" data-navbar-default></li>
                <li class="color-box bg-primary " data-color="theme-primary"></li>
                <li class="color-box bg-success" data-color="theme-success"></li>
                <li class="color-box bg-danger" data-color="theme-danger"></li>
                <li class="color-box bg-info" data-color="theme-info"></li>
                <li class="color-box bg-warning" data-color="theme-warning"></li>
            </ul>
            <hr>
        </div>
        <!-- Menu Colors Ends -->
        <!-- Collapse sidebar switch starts -->
        <div class="collapse-sidebar d-flex justify-content-between align-items-center">
            <div class="collapse-option-title">
                <h5 class="pt-25">Recolher Menu</h5>
            </div>
            <div class="collapse-option-switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="collapse-sidebar-switch">
                    <label class="custom-control-label" for="collapse-sidebar-switch"></label>
                </div>
            </div>
        </div>
        <!-- Collapse sidebar switch Ends -->
        <hr>

        <!-- Navbar colors starts -->
        <div id="customizer-navbar-colors">
            <h5>Menu Superior Cores</h5>
            <ul class="list-inline unstyled-list">
                <li class="color-box bg-white border selected" data-navbar-default=""></li>
                <li class="color-box bg-primary" data-navbar-color="bg-primary"></li>
                <li class="color-box bg-success" data-navbar-color="bg-success"></li>
                <li class="color-box bg-danger" data-navbar-color="bg-danger"></li>
                <li class="color-box bg-info" data-navbar-color="bg-info"></li>
                <li class="color-box bg-warning" data-navbar-color="bg-warning"></li>
            </ul>
            <hr>
        </div>
        <!-- Navbar colors starts -->
        <!-- Navbar Type Starts -->
        <h5>Menu Superior Tipos</h5>
        <div class="navbar-type d-flex justify-content-start">
            <div class="hidden-ele mx-50">
                <fieldset>
                    <div class="radio">
                        <input type="radio" name="navbarType" value="false" id="navbar-hidden">
                        <label for="navbar-hidden">Nenhum</label>
                    </div>
                </fieldset>
            </div>
            <div class="mx-50">
                <fieldset>
                    <div class="radio">
                        <input type="radio" name="navbarType" value="false" id="navbar-static">
                        <label for="navbar-static">Estático</label>
                    </div>
                </fieldset>
            </div>
            <div class="mx-50">
                <fieldset>
                    <div class="radio">
                        <input type="radio" name="navbarType" value="false" id="navbar-sticky" checked>
                        <label for="navbar-sticky">Fixo</label>
                    </div>
                </fieldset>
            </div>
        </div>
        <hr>
        <!-- Navbar Type Starts -->

        <!-- Card Shadow Starts-->
        <div class="card-shadow d-flex justify-content-between align-items-center py-25">
            <div class="hide-scroll-title">
                <h5 class="pt-25">Sombras dos Cards</h5>
            </div>
            <div class="card-shadow-switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" checked id="card-shadow-switch">
                    <label class="custom-control-label" for="card-shadow-switch"></label>
                </div>
            </div>
        </div>
        <!-- Card Shadow Ends-->
        <hr>

        <!-- Hide Scroll To Top Starts-->
        <div class="hide-scroll-to-top d-flex justify-content-between align-items-center py-25">
            <div class="hide-scroll-title">
                <h5 class="pt-25">Remover Voltar ao Topo</h5>
            </div>
            <div class="hide-scroll-top-switch">
                <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="hide-scroll-top-switch">
                    <label class="custom-control-label" for="hide-scroll-top-switch"></label>
                </div>
            </div>
        </div>
        <!-- Hide Scroll To Top Ends-->
    </div>

</div>
<!-- End: Customizer-->

<div class="sidenav-overlay"></div>
<div class="drag-target"></div>

<!-- BEGIN: Footer-->
<footer class="footer footer-static footer-dark">
    <button class="btn btn-warning btn-icon scroll-top" type="button" style="display: none;">
        <i class="bx bx-up-arrow-alt"></i>
    </button>
</footer>
<!-- END: Footer-->

<!-- BEGIN: Javascript on Page-->
@yield('script')
<!-- END: Javascript on Page-->

<!-- BEGIN: Vendor JS-->
<script src="<?=WEB_ROOT?>/app-assets/vendors/js/vendors.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.tools.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.defaults.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/fonts/LivIconsEvo/js/LivIconsEvo.min.js"></script>
<!-- BEGIN Vendor JS-->

<!-- BEGIN: Page Vendor JS-->
<script src="<?=WEB_ROOT?>/app-assets/vendors/js/charts/apexcharts.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/vendors/js/extensions/dragula.min.js"></script>
<!-- END: Page Vendor JS-->

<!-- BEGIN: Theme JS-->
<script src="<?=WEB_ROOT?>/app-assets/js/scripts/configs/vertical-menu-dark.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/js/core/app-menu.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/js/core/app.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/js/scripts/components.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/js/scripts/footer.min.js"></script>
<script src="<?=WEB_ROOT?>/app-assets/js/scripts/customizer.min.js"></script>
<!-- END: Theme JS-->

<!-- BEGIN: Page JS-->
<script src="<?=WEB_ROOT?>/app-assets/js/scripts/pages/dashboard-analytics.min.js"></script>
<!-- END: Page JS-->

</body>
<!-- END: Body-->

<!-- Mirrored from www.pixinvent.com/demo/frest-clean-bootstrap-admin-dashboard-template/html/ltr/vertical-menu-template-dark/dashboard-analytics.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 14 May 2021 14:27:56 GMT -->
</html>
