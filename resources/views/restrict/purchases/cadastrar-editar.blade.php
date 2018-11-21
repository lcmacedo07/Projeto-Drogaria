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
                            <label>CODIGO DO FORNECEDOR</label>
                            <div class="input-group">
                                <select name='provider_id' class='form-control'>
                                    @foreach($providers as $provider)
                                    <option 
                                        @if(isset($data->provider_id) && ($data->provider_id==$provider->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$provider->id}}" >
                                        {{$provider->provider}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('provider_id'))
                            <span class='text-danger'> {{ $errors->first('provider_id') }} </span>
                            @endif
                        </div>
                    </div>

                    <div class='input-field col-md-4'>
                        <label>DATA DA COMPRA</label>
                        <div class="input-group">
                            {!! Form::date('date', null, ['required' => 'yes', 'min' => '5', 'class' => 'form-control']) !!}
                            @if ($errors->has('date'))
                            <span class='text-danger'> {{ $errors->first('date') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>REFERENCIA</label>
                        <div class="input-group">
                            {!! Form::text('reference', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200', 'class' => 'form-control']) !!}
                            @if ($errors->has('reference'))
                            <span class='text-danger'> {{ $errors->first('reference') }} </span>
                            @endif
                        </div>
                    </div>
                </div>   
                <div class="row m-t-20">
                    <div class='input-field col-md-6'>
                        <label>QUANTIDADE</label>
                        <div class="input-group">
                            {!! Form::number('amount', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                            @if ($errors->has('amount'))
                            <span class='text-danger'> {{ $errors->first('amount') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label>VALOR</label>
                        <div class="input-group">
                            {!! Form::number('value', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                            @if ($errors->has('value'))
                            <span class='text-danger'> {{ $errors->first('value') }} </span>
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
