@extends('layouts.restrict.app')
@section('title'){{$titulo}} - {{config('app.name')}}@endsection
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>{{$titulo}}</li>
    </ol>
</nav>

<div class="col-md-12">
    <div class="card card-plain">
        <div class="box-body">
            <a href='{{url("/restrict/$page/create")}}' class='btn btn-primary white m-b-15'> Novo Registro</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                            <tr>
                                <th width='115px'>CODIGO DO ORÇAMENTO</th>
                                <th>NOME DO USUÁRIO</th>
                                <th>VALIDADE</th>
                                <th>CONDIÇÕES</th>
                                <th>STATUS</th>
                                <th>TOTAL R$</th>
                                <th>DESCONTO %</th>
                                <th width='115px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->bud_codigo }} </td>
                                <td> {{ $registro->name }} </td>
                                <td> {{ $registro->bud_validateproposal }} DIAS</td>
                                <td> {{ $registro->bud_status }} </td>
                                <td> {{ $registro->bud_qtdpayments }}X - {{ $registro->bud_conditionspayments }} </td>
                                <td> {{ $registro->bud_value }} </td>
                                <td> {{ $registro->bud_discount }}% </td>
                                <td>
                                    <div class='btn-group'>
                                        <a href='{{url("/restrict/$page/$registro->bud_codigo/deletar")}}' 
                                           onClick="return confirm('Você quer mesmo deletar?')" 
                                           class='btn blue-black-bg white' data-toggle='tooltip' data-placement='top' title='Delete'>
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href='{{url("/restrict/$page/$registro->bud_codigo/edit")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' class='btn blue-black-bg white'>
                                            <i class="material-icons">build</i>
                                        </a>
                                        <a href='{{url("/restrict/$page-pdf")}}' 
                                           data-toggle='tooltip' data-placement='top' title='PDF' class='btn blue-black-bg white'>
                                            <i class='glyphicon glyphicon-file'></i>
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

    @push('css')
    
    <link rel='stylesheet' href='{{asset('css/sweetalert.css')}}'/>
    
    @endpush

    @push('js')
    
    @include('sweet::alert')
    <script src='{{asset('js/sweetalert.min.js')}}'></script>
    
    @endpush

    @endsection