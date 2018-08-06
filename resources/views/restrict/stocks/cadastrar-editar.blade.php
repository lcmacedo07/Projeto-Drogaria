@extends('adminlte::page')
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase breadcrumb-arrow'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item'><a href='{{route("$page.index")}}'>{{$titulo}}</a></li>
        <li class='breadcrumb-item active' aria-current='page'>EDIÇÃO DE REGISTRO</li>
    </ol>
</nav>
<div class="content-box">
    <div class='content'>
        @if(isset($data->sto_codigo))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->sto_codigo", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-4'>
                <label>NOME DO ESTOQUE</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    {!! Form::text('sto_name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '60', 'placeholder' => 'Insira o Nome do Estoque', 'class' => 'form-control']) !!}
                    @if ($errors->has('sto_name'))
                    <span class='text-danger'> {{ $errors->first('sto_name') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-2'>
                <label>INVENTARIO DISPONIVEL</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-tags"></i>
                    </div>
                    {!! Form::number('sto_available_inventory', null, ['required' => 'yes', 'min' => '5', 'placeholder' => 'Inv Disponivel', 'class' => 'form-control']) !!}
                    @if ($errors->has('sto_available_inventory'))
                    <span class='text-danger'> {{ $errors->first('sto_available_inventory') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-2'>
                <label>VALOR DE CUSTO</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                    </div>
                    {!! Form::number('sto_cost_value', null, ['required' => 'yes', 'min' => '1', 'placeholder' => 'Valor de Custo', 'class' => 'form-control']) !!}
                    @if ($errors->has('sto_cost_value'))
                    <span class='text-danger'> {{ $errors->first('sto_cost_value') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-2'>
                <label>NUMERO DA NOTA FISCAL</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-barcode"></i>
                    </div>
                    {!! Form::number('sto_salue_value', null, ['required' => 'yes', 'min' => '1','placeholder' => 'Num Nota Fiscal', 'class' => 'form-control']) !!}
                    @if ($errors->has('sto_salue_value'))
                    <span class='text-danger'> {{ $errors->first('sto_salue_value') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-2'>
                <label>VALOR DE LUCRO</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-money"></i>
                    </div>
                    {!! Form::number('sto_profit_value', null, ['required' => 'yes', 'min' => '1','placeholder' => 'Valor de Lucro', 'class' => 'form-control']) !!}
                    @if ($errors->has('sto_profit_value'))
                    <span class='text-danger'> {{ $errors->first('sto_profit_value') }} </span>
                    @endif
                </div>
            </div>
        </div>    
        <hr/>
        <div class='btn-group'>
            <button type='reset' class='btn btn-default waves-effect'>Resetar</button>
            <button type='submit' class='btn btn-primary waves-effect waves-light'>Salvar Dados</button>
        </div>
        {!! Form::close() !!}
    </div>
</div>
@push('css')
<link rel='stylesheet' href='{{asset('bower_components/bootstrap-select/dist/css/bootstrap-select.css')}}'/>
@endpush

@push('js-topo')
@endpush

@push('js')
<script src="{{asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
@endpush

@endsection        

