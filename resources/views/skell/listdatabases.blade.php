@extends('global.base')
@section('content')

<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bancos de Dados cadastrados</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Usuários do sistema <b>megui</b>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>Nome</th>
                                        <th>Host</th>
                                        <th>Port</th>
                                        <th>User</th>
                                        <th>Password</th>
                                        <th>MaintenanceDB</th>
                                        
                                    </tr>
                                </thead>
                                <tbody> 
                                @foreach($databases as $databases)
                                <tr class="odd gradeX">
                                <td>{{ $databases->id }}</td>
                                <td>{{ $databases->name }}</td>
                                <td>{{ $databases->host }}</td>
                                <td>{{ $databases->port }}</td>
                                <td>{{ $databases->user }}</td>
                                <td>{{ $databases->password }}</td>
                                <td>{{ $databases->maintenancedb }}</td>
                                <td> </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                            
                        </div>
                    </div>
                </div>
            </div>
</div>
                


@endsection