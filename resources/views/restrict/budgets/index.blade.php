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
            <a href='{{url("/restrict/$page/create")}}' class='btn btn-success white m-b-15'> Novo Registro</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="">
                            <tr>
                                <th width='115px'>CODIGO DO USUARIO</th>
                                <th width='115px'>NOME DO CLIENTE</th>
                                <th width='115px'>VALIDADE</th>
                                <th width='115px'>STATUS</th>
                                <th width='115px'>CONDIÇÕES</th>
                                <th width='115px'>TOTAL R$</th>
                                <th width='115px'>DESCONTO %</th>
                                <th width='115px'>#</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $registro)
                            <tr>
                                <td> {{ $registro->id }} </td>
                                <td> {{ $registro->name }} </td>
                                <td> {{ $registro->validateproposal }} DIAS</td>
                                <td> {{ $registro->status }} </td>
                                <td> {{ $registro->qtdpayments }}X - {{ $registro-> conditionspayments }} </td>
                                <td> {{ $registro->value }} </td>
                                <td> {{ $registro->discount }}% </td>
                                <td>
                                        <a href='{{ url("/restrict/$page/$registro->id") }}' class="btn btn-info btn-sm"><i class="material-icons">details</i></a>

                                        <a href='{{url("/restrict/$page/$registro->id/deletar")}}' 
                                           onClick="return confirm('Você quer mesmo deletar?')" 
                                            data-toggle='tooltip' data-placement='top' title='Deletar'>
                                            <button class="btn btn-danger btn-sm" type="button">
                                                <i class="material-icons">delete</i>
                                            </button>
                                        </a>
                                        
                                        <a href='{{url("/restrict/$page/$registro->id/edit")}}' 
                                           data-toggle='tooltip' data-placement='top' title='Editar' >
                                           <button class="btn btn-success btn-sm" type="button">
                                            <i class="material-icons">build</i>
                                           </button>
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

    @push('css')
    
    
    @endpush

    @push('js')
   
    
    @endpush

    @endsection