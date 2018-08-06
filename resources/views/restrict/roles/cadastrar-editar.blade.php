@extends('adminlte::page')
@section('content')
<ol class='breadcrumb'>
    <li><a href='{{url('/restrict')}}'>Home</a></li>
    <li><a href='{{url('/restrict/users')}}'>Usuários</a></li>
    <li><a href='{{url("/restrict/$page")}}'>{{$titulo}}</a></li>
    <li class='active'>Gerencimento</li>
</ol>
<div class="content-box">
<div class='content'>
            @if(isset($data->id))
            {!! Form::model($data, ['url' => "/restrict/$page/$data->id", 'method' => 'PATCH',
            'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
            @else
            {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
            'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
            @endif

            <div class='row'>
                <div class='input-field col-md-3'>
                    <label>NOME</label>
                    {!! Form::text('name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '120', 'placeholder' => 'Insira o Nome', 'class' => 'form-control']) !!}
                    @if ($errors->has('name'))
                    <span class='text-danger'> {{ $errors->first('name') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-9'>
                    <label>DESCRIÇÃO</label>
                    {!! Form::text('label', null, ['maxlength' => '200',  'placeholder' => 'Insira a Descrição','class' => 'form-control']) !!}
                    @if ($errors->has('label'))
                    <span class='text-danger'> {{ $errors->first('label') }} </span>
                    @endif
                </div>
            </div>
            <hr/>
            <div class='modal-footer'>
                <button type='reset' class='btn btn-default waves-effect'>Resetar</button>
                <button type='submit' class='btn btn-primary waves-effect waves-light'>Salvar Dados</button>
            </div>
            {!! Form::close() !!}
</div>
</div>


@push('css')
@endpush

@push('js-topo')
@endpush

@push('js')
@endpush

@endsection