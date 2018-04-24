@extends('global.base')

@section('content')


    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Configurar conexão com banco de dados</h1>
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
                        <form role="form" action="{{ url('/database/novo/store') }}" method="post">
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
                            <input type="hidden" value="1" name="user_id" id="user_id">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="reset" class="btn btn-default">Resetar Campos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    @endsection