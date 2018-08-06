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
        @if(isset($data->cit_codigo))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->cit_codigo", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-6'>
                <label>CIDADE</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-building"></i>
                    </div>
                    {!! Form::text('cit_city', null, ['required' => 'yes','maxlength' => '30', 'placeholder' => 'Insira o Nome da Cidade', 'class' => 'form-control']) !!}
                    @if ($errors->has('cit_city'))
                    <span class='text-danger'> {{ $errors->first('cit_city') }} </span>
                    @endif
                </div>
            </div>
            <div class='input-field col-md-6'>
                <label>UF</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-building"></i>
                    </div>
                    {!! Form::text('cit_uf', null,['data-mask' => 'AA', 'maxlength' => '2', 'placeholder' => 'Insira o UF', 'class' => 'form-control']) !!}
                    @if ($errors->has('cit_uf'))
                    <span class='text-danger'> {{ $errors->first('cit_uf') }} </span>
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


