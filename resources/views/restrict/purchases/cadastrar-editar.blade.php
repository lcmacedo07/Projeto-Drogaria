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
                @if(isset($data->pur_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->pur_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-4'>
                            <label>CODIGO DO FORNECEDOR</label>
                            <div class="input-group">
                                <select name='pro_codigo' class='form-control'>
                                    @foreach($providers as $provider)
                                    <option 
                                        @if(isset($data->pro_codigo) && ($data->pro_codigo==$provider->pro_codigo)) @php echo 'selected'; @endphp @endif 
                                        value="{{$provider->pro_codigo}}" >
                                        {{$provider->pro_provider}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('pro_codigo'))
                            <span class='text-danger'> {{ $errors->first('pro_codigo') }} </span>
                            @endif
                        </div>
                    </div>

                    <div class='input-field col-md-4'>
                        <label>DATA DA COMPRA</label>
                        <div class="input-group">
                            {!! Form::date('pur_date', null, ['required' => 'yes', 'min' => '5', 'class' => 'form-control']) !!}
                            @if ($errors->has('pur_date'))
                            <span class='text-danger'> {{ $errors->first('pur_date') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>REFERENCIA</label>
                        <div class="input-group">
                            {!! Form::text('pur_reference', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200', 'class' => 'form-control']) !!}
                            @if ($errors->has('pur_reference'))
                            <span class='text-danger'> {{ $errors->first('pur_reference') }} </span>
                            @endif
                        </div>
                    </div>
                </div>   
                <div class="row m-t-20">
                    <div class='input-field col-md-6'>
                        <label>QUANTIDADE</label>
                        <div class="input-group">
                            {!! Form::number('pur_amount', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                            @if ($errors->has('pur_amount'))
                            <span class='text-danger'> {{ $errors->first('pur_amount') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label>VALOR</label>
                        <div class="input-group">
                            {!! Form::number('pur_value', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                            @if ($errors->has('pur_value'))
                            <span class='text-danger'> {{ $errors->first('pur_value') }} </span>
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
