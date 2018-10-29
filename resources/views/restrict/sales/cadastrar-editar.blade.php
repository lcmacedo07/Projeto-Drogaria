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
                        <div class='input-field col-md-3'>
                            <label>DATA DA VENDA</label>
                            <div class="input-group">
                                {!! Form::date('date', null, ['required' => 'yes', 'min' => '5','class' => 'form-control']) !!}
                                @if ($errors->has('date'))
                                <span class='text-danger'> {{ $errors->first('date') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>QUANTIDADE DE VENDA</label>
                            <div class="input-group">
                                {!! Form::number('amount', null, ['required' => 'yes', 'min' => '5','class' => 'form-control']) !!}
                                @if ($errors->has('amount'))
                                <span class='text-danger'> {{ $errors->first('amount') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>PREÇO DA VENDA</label>
                            <div class="input-group">
                                {!! Form::number('exit_price', null, ['required' => 'yes', 'min' => '1',  'class' => 'form-control']) !!}
                                @if ($errors->has('exit_price'))
                                <span class='text-danger'> {{ $errors->first('exit_price') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>PREÇO DE CUSTO</label>
                            <div class="input-group">
                                {!! Form::number('cost_price', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                                @if ($errors->has('cost_price'))
                                <span class='text-danger'> {{ $errors->first('cost_price') }} </span>
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

@push('js-topo')
@endpush

@push('js')
@endpush

@endsection
