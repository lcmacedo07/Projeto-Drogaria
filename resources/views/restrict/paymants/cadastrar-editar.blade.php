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
                            <label>CODIGO DO TIPOS DE PAGAMENTOS</label>
                            <div class="input-group">

                                <select name='paymants_type_id' class='form-control'>
                                    @foreach($paymantsTypes as $paymantsTypes)
                                    <option 
                                        @if(isset($data->paymants_type_id) && ($data->paymants_type_id==$paymantsTypes->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$paymantsTypes->id}}" >
                                        {{$paymantsTypes->description}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('paymats_type_id'))
                            <span class='text-danger'> {{ $errors->first('paymats_type_id') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>DATA DO LANCAMENTO</label>
                        <div class="input-group">
                            {!! Form::date('datelaunch', null, ['required' => 'yes', 'placeholder' => 'Insira a Data do Lancamento', 'class' => 'form-control']) !!}
                            @if ($errors->has('datelaunch'))
                            <span class='text-danger'> {{ $errors->first('datelaunch') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>DATA DO VENCIMENTO</label>
                        <div class="input-group">
                            {!! Form::date('datematurity', null, ['required' => 'yes', 'min' => '5', 'placeholder' => 'Insira a Data do Vencimento','class' => 'form-control']) !!}
                            @if ($errors->has('datematurity'))
                            <span class='text-danger'> {{ $errors->first('datematurity') }} </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class='row m-t-20'>
                    <div class='input-field col-md-4'>
                        <label>DATA DO PAGAMENTO</label>
                        <div class="input-group">
                            {!! Form::date('datepayment', null, ['required' => 'datepayment', 'min' => '5','placeholder' => 'Insira a Data do Pagamento', 'class' => 'form-control']) !!}
                            @if ($errors->has('datepayment'))
                            <span class='text-danger'> {{ $errors->first('datepayment') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>VALOR</label>
                        <div class="input-group">
                            {!! Form::number('value', null, ['required' => 'yes','placeholder' => 'Insira o Valor', 'class' => 'form-control']) !!}
                            @if ($errors->has('value'))
                            <span class='text-danger'> {{ $errors->first('value') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>COMPLEMENTO</label>
                        {!! Form::text('complements', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200', 'placeholder' => 'Insira o Complemento', 'class' => 'form-control']) !!}
                        @if ($errors->has('complements'))
                        <span class='text-danger'> {{ $errors->first('complements') }} </span>
                        @endif
                    </div>

                </div>
                <hr/>
                <div class='btn-group'>
                    <button type='reset' class='btn btn-default waves-effect'>Resetar</button>
                    <button type='submit' class='btn btn-success waves-effect waves-light'>Salvar Dados</button>
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
