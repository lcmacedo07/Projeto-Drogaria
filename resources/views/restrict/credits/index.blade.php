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
        <div class="box-body">
            <a href='{{url("/restrict/$page/create")}}' class='btn btn-success white m-b-15'> Novo Registro</a>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <thead>
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
                                <td width='115px'> {{ $registro->id }} </td>
                                <td width='115px'> {{ $registro->credits_type_id }} </td>
                                <td width='115px'> {{ $registro->budget_id }} </td>
                                <td width='115px'> {{ $registro->datereferencies }} </td>
                                <td width='115px'> {{ $registro->datelaunch }} </td>
                                <td width='115px'> {{ $registro->datematurity }} </td>
                                <td width='115px'> {{ $registro->datereceipt }} </td>
                                <td width='115px'> {{ $registro->value }} </td>
                                <td width='115px'> {{ $registro->valuereceipt }} </td>
                                <td width='115px'> {{ $registro->documentnumber }} </td>
                                <td width='115px'> {{ $registro->ournumber }} </td>
                                <td width='115px'> {{ $registro->status }} </td>
                                <td width='115px'> {{ $registro->complements }} </td>
                                <td>
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
                        <tfoot>
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
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>

@push('css')

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">

@endpush

@push('js')

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    } );
</script>   

@endpush

@endsection