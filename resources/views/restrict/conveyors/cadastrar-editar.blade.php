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
                            <label>CODIGO DA CIDADE</label>
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
                        <label>TRANSPORTADORA</label>
                        <div class="input-group">
                            {!! Form::text('conveyors', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('conveyors'))
                            <span class='text-danger'> {{ $errors->first('conveyors') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>ENDERECO</label>
                        <div class="input-group">
                            {!! Form::text('address', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200','class' => 'form-control']) !!}
                            @if ($errors->has('address'))
                            <span class='text-danger'> {{ $errors->first('address') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>NUMERO</label>
                        <div class="input-group">
                            {!! Form::number('num', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                            @if ($errors->has('num'))
                            <span class='text-danger'> {{ $errors->first('num') }} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class='row m-t-20'>
                    <div class='input-field col-md-3'>
                        <label>BAIRRO</label>
                        <div class="input-group">
                            {!! Form::text('neighborhood', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30','class' => 'form-control']) !!}
                            @if ($errors->has('neighborhood'))
                            <span class='text-danger'> {{ $errors->first('neighborhood') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>CEP</label>
                        <div class="input-group">
                            {!! Form::text('cep', null, ['data-mask' => '00000-000','required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('cep'))
                            <span class='text-danger'> {{ $errors->first('cep') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>CNPJ</label>
                        <div class="input-group">
                            {!! Form::text('cnpj', null, ['data-mask' => '00.000.000/0000-00','required' => 'yes', 'min' => '5', 'maxlength' => '20', 'class' => 'form-control']) !!}
                            @if ($errors->has('cnpj'))
                            <span class='text-danger'> {{ $errors->first('cnpj') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>INSC</label>
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
                        <label>CONTATO</label>
                        <div class="input-group">
                            {!! Form::text('contact', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('contact'))
                            <span class='text-danger'> {{ $errors->first('contact') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label>TELEFONE</label>
                        <div class="input-group">
                            {!! Form::text('telephone', null,['data-mask' => '(00)0000-0000','required' => 'yes', 'min' => '5', 'maxlength' => '14','class' => 'form-control']) !!}
                            @if ($errors->has('telephone'))
                            <span class='text-danger'> {{ $errors->first('telephone') }} </span>
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
