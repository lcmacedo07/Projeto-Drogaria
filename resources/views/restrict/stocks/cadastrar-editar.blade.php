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
                        <div class='input-field col-md-8'>
                            <label>NOME DO ESTOQUE</label>
                            <div class="input-group">
                                {!! Form::text('name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '60',  'class' => 'form-control']) !!}
                                @if ($errors->has('name'))
                                <span class='text-danger'> {{ $errors->first('name') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-4'>
                            <label>INVENTARIO DISPONIVEL</label>
                            <div class="input-group">
                                {!! Form::number('available_inventory', null, ['required' => 'yes', 'min' => '5', 'class' => 'form-control']) !!}
                                @if ($errors->has('available_inventory'))
                                <span class='text-danger'> {{ $errors->first('available_inventory') }} </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row m-t-20">
                        <div class='input-field col-md-4'>
                            <label>VALOR DE CUSTO</label>
                            <div class="input-group">
                                {!! Form::number('cost_value', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                                @if ($errors->has('cost_value'))
                                <span class='text-danger'> {{ $errors->first('cost_value') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-4'>
                            <label>NUMERO DA NOTA FISCAL</label>
                            <div class="input-group">
                                {!! Form::number('salue_value', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                                @if ($errors->has('salue_value'))
                                <span class='text-danger'> {{ $errors->first('salue_value') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-4'>
                            <label>VALOR DE LUCRO</label>
                            <div class="input-group">
                                {!! Form::number('profit_value', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                                @if ($errors->has('profit_value'))
                                <span class='text-danger'> {{ $errors->first('profit_value') }} </span>
                                @endif
                            </div>
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

@endpush

@push('js')

@endpush

@endsection