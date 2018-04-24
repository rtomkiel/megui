@extends('global.base')

@section('content')
<div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Editar usuário</h1>
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
                        <form role="form" action="{{ url('/usuarios/store') }}" method="post">
                            {{ csrf_field() }}
                            
                            @foreach($user as $user)
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Nome:</label>
                                        <input class="form-control" placeholder="Digite o nome do usuário" type="text" name="name" id="name" value="{{ $users->name }}">
                                    </div>                                       
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Endereço de e-mail</label>
                                        <input class="form-control" placeholder="Digite o endereço de e-mail" type="text" name="email" id="email" value="{{ $users->email }}">
                                    </div>                                       
                                </div>
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" placeholder="Digite a nova senha" type="password" name="password" id="password">
                                    </div>                                       
                                </div>
                                <div class="col-lg-2 right">
                                    <div class="form-group">
                                        <label>É Admin?</label>
                                        <select class="form-control" name="type" id="type">
                                            <option value="admin">Admin</option>
                                            <option value="autor">User</option>
                                        </select>
                                    </div>                                       
                                </div>
                                <input type="hidden" name="id" id="id" value="{{ $users->id }}">
                                @break
                                @endforeach   
                            </div>
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="reset" class="btn btn-default">Resetar Campos</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection