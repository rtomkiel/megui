@extends('global.base')

@section('menu')
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('/') }}">{{ config('app.name', 'Laravel') }} Admin</a>
        </div>
        <!-- /.navbar-header -->
        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-comment fa-fw"></i> New Comment
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                <span class="pull-right text-muted small">12 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> Message Sent
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-tasks fa-fw"></i> New Task
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="#">
                            <div>
                                <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                <span class="pull-right text-muted small">4 minutes ago</span>
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a class="text-center" href="#">
                            <strong>See All Alerts</strong>
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </li>
                </ul>
                <!-- /.dropdown-alerts -->
            </li>
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    @guest
                    <li><a href="{{ route('login') }}"><i class="fa fa-sign-out fa-fw"></i> Entrar</a></li>
                    @else
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Usuário</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Configurações</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Sair</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                    @endguest
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->


        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="{{ url('/home') }}"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/novo-db') }}"><i class="fa fa-edit"></i> Editor</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear"></i> Configurar site</a>
                    <li>
                        <a href="#"><i class="fa fa-internet-explorer"></i> Acessar site</a>
                    </li>

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>
    @endsection


    @section('content')


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Cadastrar novo banco de dados</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Digite as informações necessárias
                    </div>
                    <div class="panel-body">
                        <form role="form" action="{{ url('/novo-db/store') }}" method="post">
                            {{ csrf_field() }}
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Nome do banco de dados</label>
                                        <input class="form-control" placeholder="Digite o apelido do banco de dados" type="text" name="name" id="name">
                                    </div>                                       
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Endereço do banco de dados</label>
                                        <input class="form-control" placeholder="Digite o endereço do banco de dados" type="text" name="host" id="host">
                                    </div>                                       
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Porta de conexão</label>
                                        <input class="form-control" placeholder="Digite a porta para conexão" type="number" name="port" id="host">
                                    </div>                                       
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Usuário</label>
                                        <input class="form-control" placeholder="Digite o usuário" type="text" name="user" id="user">
                                    </div>                                       
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Senha</label>
                                        <input class="form-control" placeholder="Digite a senha" type="password" name="password" id="password">
                                    </div>                                       
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>MaintenanceDB</label>
                                        <input class="form-control" placeholder="Digite o MaintenanceDB" type="text" name="maintenancedb" id="maintenancedb">
                                    </div>                                       
                                </div>
                            </div>
                            <input  style="display: none;" value="1" name="user_id" id="user_id">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="reset" class="btn btn-default">Resetar Campos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection