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
                                <th>CODIGO DO CREDITO</th>
                                <th>CODIGO DO TIPOS DE CREDITOS</th>
                                <th>CODIGO DO ORÇAMENTOS</th>
                                <th>DATA DE REFERÊNCIAS</th>
                                <th>DATA DE LANÇAMENTO</th>
                                <th>DATA DE VENCIMENTO</th>
                                <th>DATA DE RECIBO</th>
                                <th>VALOR R$</th>
                                <th>RECEBIDO R$</th>
                                <th>NUMERO DO DOCUMENTO</th>
                                <th>NOSSO NUMERO</th>
                                <th>STATUS</th>
                                <th>COMPLEMENTO</th>
                                <th width='115px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->cred_codigo }} </td>
                                <td> {{ $registro->ct_codigo }} </td>
                                <td> {{ $registro->bud_codigo }} </td>
                                <td> {{ $registro->cred_datereferencies }} </td>
                                <td> {{ $registro->cred_datelaunch }} </td>
                                <td> {{ $registro->cred_datematurity }} </td>
                                <td> {{ $registro->cred_datereceipt }} </td>
                                <td> {{ $registro->cred_value }} </td>
                                <td> {{ $registro->cred_valuereceipt }} </td>
                                <td> {{ $registro->cred_documentnumber }} </td>
                                <td> {{ $registro->cred_ournumber }} </td>
                                <td> {{ $registro->cred_status }} </td>
                                <td> {{ $registro->cred_complements }} </td>
                                <td>
                                    <div class='btn-group'>
                                        <a href='{{url("/restrict/$page/$registro->cred_codigo/deletar")}}' 
                                           onClick="return confirm('Você quer mesmo deletar?')" 
                                           class='btn blue-black-bg white' data-toggle='tooltip' data-placement='top' title='Delete'>
                                            <i class="material-icons">delete</i>
                                        </a>
                                        <a href='{{url("/restrict/$page/$registro->cred_codigo/edit")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' class='btn blue-black-bg white'>
                                            <i class="material-icons">build</i>
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