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
                        <div class='input-field col-md-4'>
                            <label>NOME</label>
                            <div class="input-group">
                                {!! Form::text('name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '120','class' => 'form-control']) !!}
                                @if ($errors->has('name'))
                                <span class='text-danger'> {{ $errors->first('name') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-4'>
                            <label>GENERO</label>
                            <div class="input-group">
                                {{ Form::select('genre', [
                                'M' => 'Masculino',
                                'F' => 'Femenino',
                            ], null, ['class' => 'form-control', 'required' => 'yes'])
                                }}
                                @if ($errors->has('genre'))
                                <span class='text-danger'> {{ $errors->first('genre') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-4'>
                            <label>DATA DE NASCIMENTO</label>
                            <div class="input-group">
                                {!! Form::date('date_of_birth', null, [ 'class' => 'form-control']) !!}
                                @if ($errors->has('date_of_birth'))
                                <span class='text-danger'> {{ $errors->first('date_of_birth') }} </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class='row m-t-20'>
                        <div class='input-field col-md-4'>
                            <label>CPF</label>
                            <div class="input-group">
                                {!! Form::text('cpf', null, ['data-mask' => '000.000.000-00', 'maxlength' => '14','class' => 'form-control']) !!}
                                @if ($errors->has('cpf'))
                                <span class='text-danger'> {{ $errors->first('cpf') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-4'>
                            <label>RG</label>
                            <div class="input-group">
                                {!! Form::text('rg', null, ['data-mask' => '0.000.000','maxlength' => '30', 'class' => 'form-control']) !!}
                                @if ($errors->has('rg'))
                                <span class='text-danger'> {{ $errors->first('rg') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-4'>
                            <label>TELEFONE</label>
                            <div class="input-group">
                                {!! Form::text('telephone', null, ['data-mask' => '(00)0000-0000','maxlength' => '14', 'class' => 'form-control']) !!}
                                @if ($errors->has('telephone'))
                                <span class='text-danger'> {{ $errors->first('telephone') }} </span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class='row m-t-20'>
                        <div class='input-field col-md-3'>
                            <label>CELULAR</label>
                            <div class="input-group">
                                {!! Form::text('cellphone', null, ['data-mask' => '(00)0000-0000','maxlength' => '16', 'class' => 'form-control']) !!}
                                @if ($errors->has('cellphone'))
                                <span class='text-danger'> {{ $errors->first('cellphone') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>CELULAR 2</label>
                            <div class="input-group">
                                {!! Form::text('cellphone2', null, ['data-mask' => '(00)0000-0000','maxlength' => '16', 'class' => 'form-control']) !!}
                                @if ($errors->has('cellphone2'))
                                <span class='text-danger'> {{ $errors->first('cellphone2') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>EMAIL</label>
                            <div class="input-group">
                                {!! Form::email('email', null, ['maxlength' => '255', 'class' => 'form-control']) !!}
                                @if ($errors->has('email'))
                                <span class='text-danger'> {{ $errors->first('email') }} </span>
                                @endif
                            </div>
                        </div>
                        <div class='input-field col-md-3'>
                            <label>SENHA</label><br/>
                            <div class="input-group">
                                {!! Form::password('password', null, ['minlength' => '6','maxlength' => '20', 'class' => 'form-control']) !!}
                                @if ($errors->has('password'))
                                <span class='text-danger'> {{ $errors->first('password') }} </span>
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
