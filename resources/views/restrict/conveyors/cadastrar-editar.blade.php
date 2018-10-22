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
                @if(isset($data->con_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->con_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-3'>
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
                    <div class='input-field col-md-3'>
                        <label>TRANSPORTADORA</label>
                        <div class="input-group">
                            {!! Form::text('con_conveyors', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('con_conveyors'))
                            <span class='text-danger'> {{ $errors->first('con_conveyors') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>ENDERECO</label>
                        <div class="input-group">
                            {!! Form::text('con_address', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('con_address'))
                            <span class='text-danger'> {{ $errors->first('con_address') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>NUMERO</label>
                        <div class="input-group">
                            {!! Form::number('con_num', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                            @if ($errors->has('con_num'))
                            <span class='text-danger'> {{ $errors->first('con_num') }} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class='row m-t-20'>
                    <div class='input-field col-md-3'>
                        <label>BAIRRO</label>
                        <div class="input-group">
                            {!! Form::text('con_neighborhood', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30','class' => 'form-control']) !!}
                            @if ($errors->has('con_neighborhood'))
                            <span class='text-danger'> {{ $errors->first('con_neighborhood') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>CEP</label>
                        <div class="input-group">
                            {!! Form::text('con_cep', null, ['data-mask' => '00000-000','required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('con_cep'))
                            <span class='text-danger'> {{ $errors->first('con_cep') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>CNPJ</label>
                        <div class="input-group">
                            {!! Form::text('con_cnpj', null, ['data-mask' => '00.000.000/0000-00','required' => 'yes', 'min' => '5', 'maxlength' => '20', 'class' => 'form-control']) !!}
                            @if ($errors->has('con_cnpj'))
                            <span class='text-danger'> {{ $errors->first('con_cnpj') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>INSC</label>
                        <div class="input-group">
                            {!! Form::text('con_insc', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '20','class' => 'form-control']) !!}
                            @if ($errors->has('con_insc'))
                            <span class='text-danger'> {{ $errors->first('con_insc') }} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class='input-field col-md-6'>
                        <label>CONTATO</label>
                        <div class="input-group">
                            {!! Form::text('con_contact', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('con_contact'))
                            <span class='text-danger'> {{ $errors->first('con_contact') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label>TELEFONE</label>
                        <div class="input-group">
                            {!! Form::text('con_telephone', null,['data-mask' => '(00)0000-0000','required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('con_telephone'))
                            <span class='text-danger'> {{ $errors->first('con_telephone') }} </span>
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
