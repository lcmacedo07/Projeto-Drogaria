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
            <div class="card-body">
                <div class="table-responsive">

                    <strong>ID: {{ $data->id }}</strong><br>        
                    <strong>Nome: {{ $users->name }}</strong><br>
                    <strong>Validade: {{ $data->validateproposal }}</strong><br>
                    <strong>Status: {{ $data->status }}</strong><br>
                    <strong>Quantidade de Pagamento: {{ $data->qtdpayments }}</strong><br>
                    <strong>Condições de Pagamento: {{ $data->conditionspayments }}</strong><br>
                    <strong>Total: {{ $data->value }}</strong><br>
                    <strong>Desconto: {{ $data->discount }}</strong><br>

                </div>
            </div>
            <a href="{{ route('budgets.index') }}" class="btn btn-danger">Voltar</a>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@push('css')


@endpush

@push('js-footer')

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