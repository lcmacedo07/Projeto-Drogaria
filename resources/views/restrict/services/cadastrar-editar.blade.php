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
                @if(isset($data->serv_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->serv_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-6'>
                            <label>TIPO DE SERVIÇOS</label>
                            <div class="input-group">
                                {!! Form::text('serv_type', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200', 'class' => 'form-control']) !!}
                                @if ($errors->has('serv_type'))
                                <span class='text-danger'> {{ $errors->first('serv_type') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-6'>
                            <label>VALOR</label>
                            <div class="input-group">
                                {!! Form::text('serv_value', null,['data-mask' => '000.000.000.000.000,00' ,'class' => 'form-control']) !!}
                                @if ($errors->has('serv_value'))
                                <span class='text-danger'> {{ $errors->first('serv_value') }} </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class='input-field col-md-12'>
                            <label>DESCRIÇÃO</label>
                            {!! Form::textarea('serv_description', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '500', 'class' => 'form-control']) !!}
                            @if ($errors->has('serv_description'))
                            <span class='text-danger'> {{ $errors->first('serv_description') }} </span>
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