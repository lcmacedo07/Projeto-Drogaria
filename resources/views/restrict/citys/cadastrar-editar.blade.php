@extends('layouts.restrict.app')
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
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
                    <div class="row">
                        <div class="col-md-6">
                            <label>CIDADE</label>
                            <div class="input-group">
                                {!! Form::text('city', null, ['required' => 'yes','maxlength' => '30',  'class' => 'form-control']) !!}
                                @if ($errors->has('city'))
                                <span class='text-danger'> {{ $errors->first('city') }} </span>
                                @endif
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label>UF</label>
                            <div class="input-group">
                                {!! Form::text('uf', null,['data-mask' => 'AA', 'maxlength' => '2', 'class' => 'form-control']) !!}
                                @if ($errors->has('uf'))
                                <span class='text-danger'> {{ $errors->first('uf') }} </span>
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


