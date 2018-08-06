@extends('layouts.restrict.layout-restrict')
@section('title')<title>{{$titulo}} - {{config('app.name')}}</title>@endsection
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>{{$titulo}}</li>
    </ol>
</nav>
<div class='content-box'>
    <div class='content'>
        <a href='{{url("/restrict/$page/create")}}' class='btn blue-black-bg white m-b-15'> Novo Registro</a>
        <div class='row p-2'>
            <div class='col-md-12'>
                <div class='table-responsive alt-table'>
                    <table class='table table-hover' id='table2'>
                        <thead class='thead-dark'>
                            <tr>
                                <th width='115px'>Nº</th>
                                <th>NOME DO USUÁRIO</th>
                                <th width='115px'>VALIDADE</th>
                                <th width='115px'>CONDIÇÕES</th>
                                <th width='115px'>STATUS</th>
                                <th width='20px'>ITENS</th>
                                <th width='70px'>TOTAL R$</th>
                                <th width='115px'>DESCONTO %</th>
                                <th width='115px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->orc_codigo }} </td>
                                <td> {{ $registro->name }} </td>
                                <td> {{ $registro->orc_validade_proposta }} DIAS</td>
                                <td> {{ $registro->orc_quantidade_de_pagamentos }}X - {{ $registro->orc_condicoes_de_pagamentos }} </td>
                                <td> {{ $registro->orc_status }} </td>
                                <td>
                                    <div class='btn-group'>
                                        <a href='#' class='btn blue-black-bg white'  data-toggle='tooltip' data-placement='top' title='Listar Itens/Serviços desse orçamento'
                                           onclick="deletar('{{url("/restrict/$page/$registro->orc_codigo")}}')" id='urlDeletar' >
                                            <i class='zmdi zmdi-filter-list'></i>
                                        </a>
                                    </div>
                                </td>
                                <td> </td>
                                <td> {{ $registro->orc_descontos }}% </td>
                                <td>
                                    <div class='btn-group'>
                                        <a href='#' class='btn blue-black-bg white'  data-toggle='tooltip' data-placement='top' title='Delete'
                                           onclick="deletar('{{url("/restrict/$page/$registro->orc_codigo")}}')" id='urlDeletar' >
                                            <i class='zmdi zmdi-delete'></i>
                                        </a>
                                       
                                        <a href='{{url("/restrict/$page/$registro->orc_codigo")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' class='btn btn-default white'>
                                            <i class='zmdi zmdi-edit'></i>
                                        </a>
                                        <a href='{{url("/restrict/$page/$registro->orc_codigo/edit")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' class='btn blue-black-bg white'>
                                            <i class='zmdi zmdi-edit'></i>
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
<link rel='stylesheet' href='{{mix('css/sweetalert.css')}}'/>

@endpush

@push('js-footer')
<script src='{{mix('js/sweetalert.min.js')}}'></script>

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