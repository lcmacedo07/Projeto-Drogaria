@extends('layouts.restrict.app')
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase breadcrumb-arrow'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item'><a href='{{route("$page.index")}}'>{{$titulo}}</a></li>
        <li class='breadcrumb-item active' aria-current='page'>EDIÇÃO DE REGISTRO</li>
    </ol>
</nav>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                @if(isset($data->iteme_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->iteme_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-6'>
                            <label>CODIGO DA SAIDA</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-barcode"></i>
                                </div>
                                <select name='exi_codigo' class='form-control'>
                                    @foreach($exits as $exit)
                                    <option 
                                        @if(isset($data->exi_codigo) && ($data->exi_codigo==$exit->exi_codigo)) @php echo 'selected'; @endphp @endif 
                                        value="{{$exit->exi_codigo}}" >
                                        {{$exit->sto_codigo}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('exi_codigo'))
                            <span class='text-danger'> {{ $errors->first('exi_codigo') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label>CODIGO DO PRODUTO</label>
                        <div class="input-group">
                            <select name='prod_codigo' class='form-control'>
                                @foreach($products as $product)
                                <option 
                                    @if(isset($data->prod_codigo) && ($data->prod_codigo==$product->prod_codigo)) @php echo 'selected'; @endphp @endif 
                                    value="{{$product->prod_codigo}}" >
                                    {{$product->cat_codigo}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('prod_codigo'))
                        <span class='text-danger'> {{ $errors->first('prod_codigo') }} </span>
                        @endif
                    </div>
                </div>
            </div>    
            <div class="row m-t-20">
                <div class='input-field col-md-4'>
                    <label>LOTE</label>
                    <div class="input-group">
                        {!! Form::text('iteme_lot', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30','class' => 'form-control']) !!}
                        @if ($errors->has('iteme_lot'))
                        <span class='text-danger'> {{ $errors->first('iteme_lot') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>QUANTIDADE</label>
                    <div class="input-group">
                        {!! Form::number('iteme_amount', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                        @if ($errors->has('iteme_amount'))
                        <span class='text-danger'> {{ $errors->first('iteme_amount') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>VALOR</label>
                    <div class="input-group">
                        {!! Form::number('iteme_value', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                        @if ($errors->has('iteme_value'))
                        <span class='text-danger'> {{ $errors->first('iteme_value') }} </span>
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