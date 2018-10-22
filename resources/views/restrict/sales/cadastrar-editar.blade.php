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
                @if(isset($data->sal_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->sal_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-3'>
                            <label>DATA DA VENDA</label>
                            <div class="input-group">
                                {!! Form::date('sal_date', null, ['required' => 'yes', 'min' => '5','class' => 'form-control']) !!}
                                @if ($errors->has('sal_date'))
                                <span class='text-danger'> {{ $errors->first('sal_date') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>QUANTIDADE DE VENDA</label>
                            <div class="input-group">
                                {!! Form::number('sal_amount', null, ['required' => 'yes', 'min' => '5','class' => 'form-control']) !!}
                                @if ($errors->has('sal_amount'))
                                <span class='text-danger'> {{ $errors->first('sal_amount') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>PREÇO DA VENDA</label>
                            <div class="input-group">
                                {!! Form::number('sal_exit_price', null, ['required' => 'yes', 'min' => '1',  'class' => 'form-control']) !!}
                                @if ($errors->has('sal_exit_price'))
                                <span class='text-danger'> {{ $errors->first('sal_exit_price') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>PREÇO DE CUSTO</label>
                            <div class="input-group">
                                {!! Form::number('sal_cost_price', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                                @if ($errors->has('sal_cost_price'))
                                <span class='text-danger'> {{ $errors->first('sal_cost_price') }} </span>
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
