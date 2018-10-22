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
                @if( isset($data->sto_codigo) )
                {!! Form::model($data, ['url' => "/restrict/$page/$data->sto_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-3'>
                            <label class="bmd-label-floating">CODIGO DA CIDADE</label>
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
                        <label class="bmd-label-floating">NOME DA LOJA</label>
                        <div class="input-group">
                            {!! Form::text('sto_name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30','class' => 'form-control']) !!}
                            @if ($errors->has('sto_name'))
                            <span class='text-danger'> {{ $errors->first('sto_name') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">CNPJ</label>
                        <div class="input-group">
                            {!! Form::text('sto_cnpj', null, ['data-mask' => '00.000.000/0000-00','required' => 'yes', 'min' => '10', 'maxlength' => '20','class' => 'form-control']) !!}
                            @if ($errors->has('sto_cnpj'))
                            <span class='text-danger'> {{ $errors->first('sto_cnpj') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">ENDEREÇO</label>
                        <div class="input-group">
                            {!! Form::text('sto_address', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('sto_address'))
                            <span class='text-danger'> {{ $errors->first('sto_address') }} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class='row m-t-20'>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">UF</label>
                        <div class="input-group">
                            {!! Form::text('sto_uf', null, ['data-mask' => 'AA', 'maxlength' => '2','class' => 'form-control']) !!}
                            @if ($errors->has('sto_uf'))
                            <span class='text-danger'> {{ $errors->first('sto_uf') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">TELEFONE</label>
                        <div class="input-group">
                            {!! Form::text('sto_telephone', null, ['data-inputmask' => '(00)0000-0000','required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('sto_telephone'))
                            <span class='text-danger'> {{ $errors->first('sto_telephone') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">CODIGO POSTAL</label>
                        {!! Form::text('sto_zip_code', null,['data-mask' => '00000-000','required' => 'yes', 'min' => '5', 'maxlength' => '15','class' => 'form-control']) !!}
                        @if ($errors->has('sto_zip_code'))
                        <span class='text-danger'> {{ $errors->first('sto_zip_code') }} </span>
                        @endif
                    </div>
                <div class='input-field col-md-3'>
                    <label class="bmd-label-floating">INSC</label>
                    <div class="input-group">
                        {!! Form::text('sto_insc', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '20','class' => 'form-control']) !!}
                        @if ($errors->has('sto_insc'))
                        <span class='text-danger'> {{ $errors->first('sto_insc') }} </span>
                        @endif
                    </div>
                </div>
            </div>    
            <div class="row m-t-20">
                <div class='input-field col-md-6'>
                    <label class="bmd-label-floating">NOME FANTASIA</label>
                    <div class="input-group">
                        {!! Form::text('sto_fantasy_name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                        @if ($errors->has('sto_fantasy_name'))
                        <span class='text-danger'> {{ $errors->first('sto_fantasy_name') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-6'>
                    <label class="bmd-label-floating">RAZÃO SOCIAL</label>
                    <div class="input-group">
                        {!! Form::text('sto_social_reason', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                        @if ($errors->has('sto_social_reason'))
                        <span class='text-danger'> {{ $errors->first('sto_social_reason') }} </span>
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

@endpush

@push('js-topo')

@endpush

@push('js')

@endpush

@endsection