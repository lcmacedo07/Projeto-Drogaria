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
        @if(isset($data->cat_codigo))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->cat_codigo", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-6'>
                <label>CODIGO DA CATEGORIA</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-barcode"></i>
                    </div>
                    <select name='cat_codigo' class='form-control'>
                        @foreach($categorys as $category)
                        <option 
                            @if(isset($data->cat_codigo) && ($data->cat_codigo==$category->cat_codigo)) @php echo 'selected'; @endphp @endif 
                            value="{{$category->cat_codigo}}" >
                            {{$category->cat_category}}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('cat_codigo'))
                <span class='text-danger'> {{ $errors->first('cat_codigo') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-6'>
            <label>CODIGO DO FORNECEDOR</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                </div>
                <select name='pro_codigo' class='form-control'>
                    @foreach($providers as $provider)
                    <option 
                        @if(isset($data->pro_codigo) && ($data->pro_codigo==$provider->pro_codigo)) @php echo 'selected'; @endphp @endif 
                        value="{{$provider->pro_codigo}}" >
                        {{$provider->pro_provider}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('pro_codigo'))
            <span class='text-danger'> {{ $errors->first('pro_codigo') }} </span>
            @endif
        </div>
    </div>
</div>    
<div class="row m-t-20">
    <div class='input-field col-md-4'>
        <label>PESO</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-balance-scale"></i>
            </div>
            {!! Form::number('prod_weight', null, ['required' => 'yes', 'min' => '1','placeholder' => 'Insira o Peso', 'class' => 'form-control']) !!}
            @if ($errors->has('prod_weight'))
            <span class='text-danger'> {{ $errors->first('prod_weight') }} </span>
            @endif
        </div>
    </div>
    <div class='input-field col-md-4'>
        <label>CONTROLADO</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-barcode"></i>
            </div>
            {!! Form::text('prod_controlled', null, ['required' => 'yes', 'min' => '1', 'maxlength' => '200', 'placeholder' => 'Insira o Controlado','class' => 'form-control']) !!}
            @if ($errors->has('prod_controlled'))
            <span class='text-danger'> {{ $errors->first('prod_controlled') }} </span>
            @endif
        </div>
    </div>
    <div class='input-field col-md-4'>
        <label>QUANTIDADE</label>
        <div class="input-group">
            <div class="input-group-addon">
                <i class="fa fa-shopping-cart"></i>
            </div>
            {!! Form::number('prod_determined_amount', null, ['required' => 'yes', 'min' => '1', 'placeholder' => 'Insira a Quantidade','class' => 'form-control']) !!}
            @if ($errors->has('prod_determined_amount'))
            <span class='text-danger'> {{ $errors->first('prod_determined_amount') }} </span>
            @endif
        </div>
    </div>
</div>     
<div class="row m-t-20">
    <div class='input-field col-md-12'>
        <label>DESCRICAO</label>
        {!! Form::textarea('prod_description', null, ['required' => 'yes', 'min' => '1', 'maxlength' => '1000','placeholder' => 'Insira a Descrição', 'class' => 'form-control']) !!}
        @if ($errors->has('prod_description'))
        <span class='text-danger'> {{ $errors->first('prod_description') }} </span>
        @endif
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

