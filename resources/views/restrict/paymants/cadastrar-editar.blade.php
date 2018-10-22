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
                @if(isset($data->pay_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->pay_codigo", 'method' => 'PATCH',
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

                                <select name='pt_codigo' class='form-control'>
                                    @foreach($paymantsTypes as $paymantsTypes)
                                    <option 
                                        @if(isset($data->pt_codigo) && ($data->pt_codigo==$paymantsTypes->pt_codigo)) @php echo 'selected'; @endphp @endif 
                                        value="{{$paymantsTypes->pt_codigo}}" >
                                        {{$paymantsTypes->pt_description}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('pt_codigo'))
                            <span class='text-danger'> {{ $errors->first('pt_codigo') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>DATA DO LANCAMENTO</label>
                        <div class="input-group">
                            {!! Form::date('pay_datelaunch', null, ['required' => 'yes', 'placeholder' => 'Insira a Data do Lancamento', 'class' => 'form-control']) !!}
                            @if ($errors->has('pay_datelaunch'))
                            <span class='text-danger'> {{ $errors->first('pay_datelaunch') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>DATA DO VENCIMENTO</label>
                        <div class="input-group">
                            {!! Form::date('pay_datematurity', null, ['required' => 'yes', 'min' => '5', 'placeholder' => 'Insira a Data do Vencimento','class' => 'form-control']) !!}
                            @if ($errors->has('pay_datematurity'))
                            <span class='text-danger'> {{ $errors->first('pay_datematurity') }} </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class='row m-t-20'>
                    <div class='input-field col-md-4'>
                        <label>DATA DO PAGAMENTO</label>
                        <div class="input-group">
                            {!! Form::date('pay_datepayment', null, ['required' => 'pay_datepayment', 'min' => '5','placeholder' => 'Insira a Data do Pagamento', 'class' => 'form-control']) !!}
                            @if ($errors->has('pay_datepayment'))
                            <span class='text-danger'> {{ $errors->first('pay_datepayment') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>VALOR</label>
                        <div class="input-group">
                            {!! Form::number('pay_value', null, ['required' => 'yes','placeholder' => 'Insira o Valor', 'class' => 'form-control']) !!}
                            @if ($errors->has('pay_value'))
                            <span class='text-danger'> {{ $errors->first('pay_value') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>COMPLEMENTO</label>
                        {!! Form::text('pay_complements', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '200', 'placeholder' => 'Insira o Complemento', 'class' => 'form-control']) !!}
                        @if ($errors->has('pay_complements'))
                        <span class='text-danger'> {{ $errors->first('pay_complements') }} </span>
                        @endif
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
