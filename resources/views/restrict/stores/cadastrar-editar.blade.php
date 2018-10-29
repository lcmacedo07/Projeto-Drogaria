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
                @if( isset($data->id) )
                {!! Form::model($data, ['url' => "/restrict/$page/$data->id", 'method' => 'PATCH',
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
                                <select name='city_id' class='form-control'>
                                    @foreach($citys as $city)
                                    <option 
                                        @if(isset($data->city_id) && ($data->city_id==$city->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$city->id}}" >
                                        {{$city->city}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('city_id'))
                            <span class='text-danger'> {{ $errors->first('city_id') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">NOME DA LOJA</label>
                        <div class="input-group">
                            {!! Form::text('name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30','class' => 'form-control']) !!}
                            @if ($errors->has('name'))
                            <span class='text-danger'> {{ $errors->first('name') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">CNPJ</label>
                        <div class="input-group">
                            {!! Form::text('cnpj', null, ['data-mask' => '00.000.000/0000-00','required' => 'yes', 'min' => '10', 'maxlength' => '20','class' => 'form-control']) !!}
                            @if ($errors->has('cnpj'))
                            <span class='text-danger'> {{ $errors->first('cnpj') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">ENDEREÇO</label>
                        <div class="input-group">
                            {!! Form::text('address', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('address'))
                            <span class='text-danger'> {{ $errors->first('address') }} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class='row m-t-20'>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">UF</label>
                        <div class="input-group">
                            {!! Form::text('uf', null, ['data-mask' => 'AA', 'maxlength' => '2','class' => 'form-control']) !!}
                            @if ($errors->has('uf'))
                            <span class='text-danger'> {{ $errors->first('uf') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">TELEFONE</label>
                        <div class="input-group">
                            {!! Form::text('telephone', null, ['data-inputmask' => '(00)0000-0000','required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('telephone'))
                            <span class='text-danger'> {{ $errors->first('telephone') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">CODIGO POSTAL</label>
                        {!! Form::text('zip_code', null,['data-mask' => '00000-000','required' => 'yes', 'min' => '5', 'maxlength' => '15','class' => 'form-control']) !!}
                        @if ($errors->has('zip_code'))
                        <span class='text-danger'> {{ $errors->first('zip_code') }} </span>
                        @endif
                    </div>
                    <div class='input-field col-md-3'>
                        <label class="bmd-label-floating">INSC</label>
                        <div class="input-group">
                            {!! Form::text('insc', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '20','class' => 'form-control']) !!}
                            @if ($errors->has('insc'))
                            <span class='text-danger'> {{ $errors->first('insc') }} </span>
                            @endif
                        </div>
                    </div>
                </div>    
                <div class="row m-t-20">
                    <div class='input-field col-md-6'>
                        <label class="bmd-label-floating">NOME FANTASIA</label>
                        <div class="input-group">
                            {!! Form::text('fantasy_name', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('fantasy_name'))
                            <span class='text-danger'> {{ $errors->first('fantasy_name') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label class="bmd-label-floating">RAZÃO SOCIAL</label>
                        <div class="input-group">
                            {!! Form::text('social_reason', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('social_reason'))
                            <span class='text-danger'> {{ $errors->first('social_reason') }} </span>
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