@extends('adminlte::page')
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>{{$titulo}}</li>
    </ol>
</nav>
<div class="box">
    <div class="box-body">
        <a href='{{url("/restrict/$page/create")}}' class='btn btn-primary white m-b-15'> Novo Registro</a>
        <div class='row p-2'>
            <div class='col-md-12'>
                <div class='table-responsive alt-table'>
                    <table id='table2' class="table table-bordered table-striped">
                        <thead class='thead-dark'>
                            <tr>
                                <th>id</th>
                                <th>NAME</th>
                                <th>LABEL</th>
                                <th width='115px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->id }} </td>
                                <td> {{ $registro->name }} </td>
                                <td> {{ $registro->label }} </td>
                                <td>
<!--                                    <a href='#' class='btn btn-default btn-xs white m-r-5'
                                       onclick="deletar('{{url("/restrict/$page/$registro->id")}}')" id='urlDeletar' >
                                        <i class='glyphicon glyphicon-trash'></i>Del
                                    </a>-->
                                    <a href='{{url("/restrict/$page/$registro->id/deletar")}}' 
                                           onClick="return confirm('Você quer mesm->->/o deletar?')" 
                                           class='btn blue-black-bg white' data-toggle='tooltip' data-placement='top' title='Delete'>
                                            <i class='glyphicon glyphicon-trash'></i>
                                        </a>
                                    <a href='{{url("/restrict/$page/edit/$registro->id")}}' class='btn blue-black-bg btn-xs white'>
                                        <i class='glyphicon glyphicon-ok'></i> 
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
        </div>  
    </div>
</div>

@push('css')
<link rel='stylesheet' href='{{asset('css/dataTables.min.css')}}'/>
<link rel='stylesheet' href='{{asset('css/sweetalert.css')}}'/>
@endpush

@push('js')
<script src='{{asset('js/sweetalert.min.js')}}'></script>
@include('sweet::alert')
@include('restrict._includes.script-delete')
<script src='{{asset('js/dataTables.min.js')}}'></script>
<script>
$(document).ready(function () {
    $('#table2').DataTable();
});
</script>
@endpush

@endsection

