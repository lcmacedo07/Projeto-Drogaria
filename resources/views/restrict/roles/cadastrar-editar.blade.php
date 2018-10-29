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
                            <label>NOME</label>
                            {!! Form::text('name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '120','class' => 'form-control']) !!}
                            @if ($errors->has('name'))
                            <span class='text-danger'> {{ $errors->first('name') }} </span>
                            @endif
                        </div>
                        <div class='input-field col-md-9'>
                            <label>DESCRIÇÃO</label>
                            {!! Form::text('label', null, ['maxlength' => '200', 'class' => 'form-control']) !!}
                            @if ($errors->has('label'))
                            <span class='text-danger'> {{ $errors->first('label') }} </span>
                            @endif
                        </div>
                    </div>
                    <hr/>
                    <div class='modal-footer'>
                        <button type='reset' class='btn btn-default waves-effect'>Resetar</button>
                        <button type='submit' class='btn btn-success waves-effect waves-light'>Salvar Dados</button>
                    </div>
                    {!! Form::close() !!}
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