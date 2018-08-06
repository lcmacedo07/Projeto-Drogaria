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
        @if(isset($data->itemi_codigo))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->itemi_codigo", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-6'>
                <label>CODIGO DO PRODUTO</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-barcode"></i>
                    </div>
                    <select name='prod_codigo' class='form-control'>
                        @foreach($products as $product)
                        <option 
                            @if(isset($data->prod_codigo) && ($data->prod_codigo==$product->prod_codigo)) @php echo 'selected'; @endphp @endif 
                            value="{{$product->prod_codigo}}" >
                            {{$product->prod_codigo}}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('prod_codigo'))
                <span class='text-danger'> {{ $errors->first('prod_codigo') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-6'>
            <label>CODIGO DA ENTRADA</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                </div>
                <select name='inp_codigo' class='form-control'>
                    @foreach($inputs as $input)
                    <option 
                        @if(isset($data->inp_codigo) && ($data->inp_codigo==$input->inp_codigo)) @php echo 'selected'; @endphp @endif 
                        value="{{$input->inp_codigo}}" >
                        {{$input->inp_codigo}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('inp_codigo'))
            <span class='text-danger'> {{ $errors->first('inp_codigo') }} </span>
            @endif
        </div>
    </div>
</div>     
<div class="row m-t-20">
    <div class='input-field col-md-4'>
        <label>LOTE</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-shield"></i>
            </div>
            {!! Form::text('itemi_lot', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30', 'placeholder' => 'Insira o Lote', 'class' => 'form-control']) !!}
            @if ($errors->has('itemi_lot'))
            <span class='text-danger'> {{ $errors->first('itemi_lot') }} </span>
            @endif
        </div>
    </div>
    <div class='input-field col-md-4'>
        <label>QUANTIDADE</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            {!! Form::number('itemi_amount', null, ['required' => 'yes', 'min' => '1','placeholder' => 'Insira a Quantidade', 'class' => 'form-control']) !!}
            @if ($errors->has('itemi_amount'))
            <span class='text-danger'> {{ $errors->first('itemi_amount') }} </span>
            @endif
        </div>
    </div>
    <div class='input-field col-md-4'>
        <label>VALOR</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-money"></i>
            </div>
            {!! Form::number('itemi_value', null, ['required' => 'yes', 'min' => '1','placeholder' => 'Insira o Valor', 'class' => 'form-control']) !!}
            @if ($errors->has('itemi_value'))
            <span class='text-danger'> {{ $errors->first('itemi_value') }} </span>
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

