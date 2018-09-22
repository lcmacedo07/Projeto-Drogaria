@extends('adminlte::page')
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase breadcrumb-arrow'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item'><a href='{{route("$page.index")}}'>{{$titulo}}</a></li>
        <li class='breadcrumb-item active' aria-current='page'>EDIÇÃO DE REGISTRO</li>
    </ol>
</nav>
<div class='content-box'>
    <div class='content'>
        @if(isset($data->id))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->id", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-4'>
                <label>NOME</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-book"></i>
                    </div>
                    {!! Form::text('name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '120', 'placeholder' => 'Insira o Nome', 'class' => 'form-control']) !!}
                    @if ($errors->has('name'))
                    <span class='text-danger'> {{ $errors->first('name') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-4'>
                <label>GENERO</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-asl-interpreting"></i>
                    </div>
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
                    <div class="input-group-addon">
                        <i class="fa fa fa-calendar"></i>
                    </div>
                    {!! Form::date('date_of_birth', null, ['placeholder' => 'Insira a Data de Nascimento', 'class' => 'form-control']) !!}
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
                    <div class="input-group-addon">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    {!! Form::text('cpf', null, ['data-mask' => '000.000.000-00', 'maxlength' => '14', 'placeholder' => 'Insira o CPF', 'class' => 'form-control']) !!}
                    @if ($errors->has('cpf'))
                    <span class='text-danger'> {{ $errors->first('cpf') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-4'>
                <label>RG</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                    {!! Form::text('rg', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30', 'placeholder' => 'Insira o RG', 'class' => 'form-control']) !!}
                    @if ($errors->has('rg'))
                    <span class='text-danger'> {{ $errors->first('rg') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-4'>
                <label>TELEFONE</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    {!! Form::text('telephone', null, ['data-mask' => '(00)0000-0000','maxlength' => '14', 'placeholder' => 'Insira o Telefone', 'class' => 'form-control']) !!}
                    @if ($errors->has('telephone'))
                    <span class='text-danger'> {{ $errors->first('telephone') }} </span>
                    @endif
                </div>
            </div>
        </div>
        <div class='row m-t-20'>
            <div class='input-field col-md-4'>
                <label>CELULAR</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    {!! Form::text('cellphone', null, ['data-mask' => '(00)00000-0000','maxlength' => '16', 'placeholder' => 'Insira o Celular', 'class' => 'form-control']) !!}
                    @if ($errors->has('cellphone'))
                    <span class='text-danger'> {{ $errors->first('cellphone') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-4'>
                <label>CELULAR 2</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    {!! Form::text('cellphone2', null, ['data-mask' => '(00)00000-0000','maxlength' => '16',  'placeholder' => 'Insira o Celular 2','class' => 'form-control']) !!}
                    @if ($errors->has('cellphone2'))
                    <span class='text-danger'> {{ $errors->first('cellphone2') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-4'>
                <label>TIPO</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-book"></i>
                    </div>
                    {!! Form::text('type', null, ['maxlength' => '20', 'placeholder' => 'Insira o Tipo', 'class' => 'form-control']) !!}
                    @if ($errors->has('type'))
                    <span class='text-danger'> {{ $errors->first('type') }} </span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row m-t-20">
            <div class='input-field col-md-6'>
                <label>EMAIL</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user-secret"></i>
                    </div>
                    {!! Form::email('email', null, ['maxlength' => '255', 'placeholder' => 'Insira o Email', 'class' => 'form-control']) !!}
                    @if ($errors->has('email'))
                    <span class='text-danger'> {{ $errors->first('email') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-6'>
                <label>SENHA</label><br/>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-user-secret"></i>
                    </div>
                    {!! Form::password('password', null, ['minlength' => '6','maxlength' => '20','placeholder' => 'Insira a Senha', 'class' => 'form-control']) !!}
                    @if ($errors->has('password'))
                    <span class='text-danger'> {{ $errors->first('password') }} </span>
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
<script src="{{asset('/js/input-mask.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
@endpush

@endsection
