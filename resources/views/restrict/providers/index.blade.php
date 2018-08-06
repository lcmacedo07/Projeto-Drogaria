@extends('adminlte::page')
@section('title'){{$titulo}} - {{config('app.name')}}@endsection
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
                        <thead>
                            <tr>
                                <th>CODIGO DO FORNECEDOR</th>
                                <th>CODIGO DA CIDADE</th>
                                <th>FORNECEDOR</th>
                                <th>ENDEREÇO</th>
                                <th>NUMERO</th>
                                <th>BAIRRO</th>
                                <th>CEP</th>
                                <th>CONTATO</th>
                                <th>CNPJ</th>
                                <th>INSC</th>
                                <th>TELEFONE</th>
                                <th width='115px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->pro_codigo }} </td>
                                <td> {{ $registro->cit_codigo }} </td>
                                <td> {{ $registro->pro_provider }} </td>
                                <td> {{ $registro->pro_address }} </td>
                                <td> {{ $registro->pro_num }} </td>
                                <td> {{ $registro->pro_neighborhood }} </td>
                                <td> {{ $registro->pro_zip_code }} </td>
                                <td> {{ $registro->pro_contact }} </td>
                                <td> {{ $registro->pro_cnpj }} </td>
                                <td> {{ $registro->pro_insc }} </td>
                                <td> {{ $registro->pro_telephone }} </td>
                                <td>
            
                                    <div class='btn-group'>
<!--                                        <a href='#' class='btn blue-black-bg white'  data-toggle='tooltip' data-placement='top' title='Delete'
                                           onclick="deletar('{{url("/restrict/$page/$registro->pro_codigo")}}')" id='urlDeletar' >
                                            <i class='glyphicon glyphicon-trash'></i>
                                        </a>-->
                                        <a href='{{url("/restrict/$page/$registro->pro_codigo/deletar")}}' 
                                           onClick="return confirm('Você quer mesmo deletar?')" 
                                           class='btn blue-black-bg white' data-toggle='tooltip' data-placement='top' title='Delete'>
                                            <i class='glyphicon glyphicon-trash'></i>
                                        </a>
                                        <a href='{{url("/restrict/$page/$registro->pro_codigo/edit")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' class='btn blue-black-bg white'>
                                           <i class='glyphicon glyphicon-ok'></i>
                                        </a>
                                    </div>
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



