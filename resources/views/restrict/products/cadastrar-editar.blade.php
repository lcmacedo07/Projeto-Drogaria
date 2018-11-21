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
                @if(isset($data->id))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->id", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class="input-field col-md-4">
                            <label>CATEGORIA</label>
                            <select name='category_id' class='form-control'>
                                @foreach($categorys as $category)
                                <option 
                                    @if(isset($data->category_id) && ($data->category_id==$category->id)) @php echo 'selected'; @endphp @endif 
                                    value="{{$category->id}}" >
                                    {{$category->category}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                            <span class='text-danger'> {{ $errors->first('category_id') }} </span>
                            @endif
                        </div>
                        <div class='input-field col-md-4'>
                            <label>FORNECEDOR</label>
                            <div class="input-group">
                                <select name='provider_id' class='form-control'>
                                    @foreach($providers as $provider)
                                    <option 
                                        @if(isset($data->provider_id) && ($data->provider_id==$provider->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$provider->id}}" >
                                        {{$provider->provider}}
                                </option>
                                @endforeach
                                </select>
                                @if ($errors->has('provider_id'))
                                <span class='text-danger'> {{ $errors->first('provider_id') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class="input-field col-md-4">
                            <label>CODIGO DO PRODUTO</label>
                            <div class="input-group">
                                {!! Form::number('product_code', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                                @if ($errors->has('product_code'))
                                <span class='text-danger'> {{ $errors->first('product_code') }} </span>
                                @endif
                            </div>
                        </div>
                    </div>    
            <div class="row m-t-20">
                <div class='input-field col-md-4'>
                    <label>PESO</label>
                    <div class="input-group">
                        {!! Form::number('weight', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                        @if ($errors->has('weight'))
                        <span class='text-danger'> {{ $errors->first('weight') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>CONTROLADO</label>
                    <div class="input-group">
                        {!! Form::text('controlled', null, ['required' => 'yes', 'min' => '1', 'maxlength' => '200','class' => 'form-control']) !!}
                        @if ($errors->has('controlled'))
                        <span class='text-danger'> {{ $errors->first('controlled') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>QUANTIDADE</label>
                    <div class="input-group">
                        {!! Form::number('determined_amount', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                        @if ($errors->has('determined_amount'))
                        <span class='text-danger'> {{ $errors->first('determined_amount') }} </span>
                        @endif
                    </div>
                </div>
            </div>     
            <div class="row m-t-20">
                <div class='input-field col-md-12'>
                    <label>DESCRICAO</label>
                    {!! Form::textarea('description', null, ['required' => 'yes', 'min' => '1', 'maxlength' => '1000', 'class' => 'form-control']) !!}
                    @if ($errors->has('description'))
                    <span class='text-danger'> {{ $errors->first('description') }} </span>
                    @endif
                </div>
            </div>  
            <div class='btn-group'>
                <button type='reset' class='btn btn-default waves-effect'>Resetar</button>
                <button type='submit' class='btn btn-success waves-effect waves-light'>Salvar Dados</button>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
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