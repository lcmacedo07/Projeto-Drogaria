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
                @if(isset($data->for_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->for_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-6'>
                            <label>CODIGO DA CIDADE</label>
                            <div class="input-group">
                                <select name='cit_codigo' class='form-control'>
                                    @foreach($citys as $city)
                                    <option 
                                        @if(isset($data->cit_codigo) && ($data->cit_codigo==$city->cit_codigo)) @php echo 'selected'; @endphp @endif 
                                        value="{{$city->cit_codigo}}" >
                                        {{$city->cit_city}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('cit_codigo'))
                            <span class='text-danger'> {{ $errors->first('cit_codigo') }} </span>
                            @endif
                        </div>
                    </div>

                    <div class='input-field col-md-6'>
                        <label>FORNECEDORES</label>
                        <div class="input-group">
                            {!! Form::text('pro_provider', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200', 'class' => 'form-control']) !!}
                            @if ($errors->has('pro_provider'))
                            <span class='text-danger'> {{ $errors->first('pro_provider') }} </span>
                            @endif
                        </div>
                    </div>    
                </div>    
                <div class="row m-t-20">    
                    <div class='input-field col-md-3'>
                        <label>ENDERECO</label>
                        <div class="input-group">
                            {!! Form::text('pro_address', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '60', 'class' => 'form-control']) !!}
                            @if ($errors->has('pro_address'))
                            <span class='text-danger'> {{ $errors->first('pro_address') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>NUMERO</label>
                        <div class="input-group">
                            {!! Form::number('pro_num', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                            @if ($errors->has('pro_num'))
                            <span class='text-danger'> {{ $errors->first('pro_num') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>BAIRRO</label>
                        <div class="input-group">
                            {!! Form::text('pro_neighborhood', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '40',  'class' => 'form-control']) !!}
                            @if ($errors->has('pro_neighborhood'))
                            <span class='text-danger'> {{ $errors->first('pro_neighborhood') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>CEP</label>
                        <div class="input-group">
                            {!! Form::text('pro_zip_code', null,['data-mask' => '00000-000','required' => 'yes', 'min' => '5', 'maxlength' => '14',  'class' => 'form-control']) !!}
                            @if ($errors->has('pro_zip_code'))
                            <span class='text-danger'> {{ $errors->first('pro_zip_code') }} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class='input-field col-md-3'>
                        <label>CONTATO</label>
                        <div class="input-group">
                            {!! Form::text('pro_contact', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '50', 'class' => 'form-control']) !!}
                            @if ($errors->has('pro_contact'))
                            <span class='text-danger'> {{ $errors->first('pro_contact') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>CNPJ</label>
                        <div class="input-group">
                            {!! Form::text('pro_cnpj', null,['data-mask' => '00.000.000/0000-00','required' => 'yes', 'min' => '5', 'maxlength' => '20', 'class' => 'form-control']) !!}
                            @if ($errors->has('pro_cnpj'))
                            <span class='text-danger'> {{ $errors->first('pro_cnpj') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>INCS</label>
                        <div class="input-group">
                            {!! Form::text('pro_insc', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '120', 'placeholder' => 'Insira o INSC', 'class' => 'form-control']) !!}
                            @if ($errors->has('pro_insc'))
                            <span class='text-danger'> {{ $errors->first('pro_insc') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>TELEFONE</label>
                        <div class="input-group">
                            {!! Form::text('pro_telephone', null,['data-mask' => '(00)0000-0000','required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('pro_telephone'))
                            <span class='text-danger'> {{ $errors->first('pro_telephone') }} </span>
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