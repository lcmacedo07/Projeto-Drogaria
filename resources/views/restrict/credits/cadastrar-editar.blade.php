@extends('adminlte::page')
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase breadcrumb-arrow'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item'><a href='{{route("$page.index")}}'>{{$titulo}}</a></li>
        <li class='breadcrumb-item active' aria-current='page'>EDIÇÃO DE REGISTRO</li>
    </ol>
</nav>
<div class='content-box'>
    <div class='content'>
        @if(isset($data->cred_codigo))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->cred_codigo", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-5'>
                <label>CODIGO DO TIPOS DE CREDITOS</label>
                <select name='ct_codigo' class='form-control'>
                    @foreach($creditsTypes as $creditsType)
                    <option 
                        @if(isset($data->ct_codigo) && ($data->ct_codigo==$creditsType->ct_codigo)) @php echo 'selected'; @endphp @endif 
                        value="{{$creditsType->ct_codigo}}" >
                        {{$creditsType->ct_descriptions}}
                </option>
                @endforeach
            </select>
            @if ($errors->has('ct_codigo'))
            <span class='text-danger'> {{ $errors->first('ct_codigo') }} </span>
            @endif
        </div>
        <div class='input-field col-md-5'>
            <label>CODIGO DO ORÇAMENTOS</label>
            <select name='bud_codigo' class='form-control'>
                @foreach($budgets as $budget)
                <option 
                    @if(isset($data->bud_codigo) && ($data->bud_codigo==$budget->bud_codigo)) @php echo 'selected'; @endphp @endif 
                    value="{{$budget->bud_codigo}}" >
                    {{$budget->bud_codigo}}
            </option>
            @endforeach
        </select>
        @if ($errors->has('bud_codigo'))
        <span class='text-danger'> {{ $errors->first('bud_codigo') }} </span>
        @endif
    </div>
    <div class='input-field col-md-2'>
        <label>REFERÊNCIA</label>
        {!! Form::date('cred_datereferencies', null, ['maxlength' => '20', 'placeholder' => 'Insira a Referência', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_datereferencies'))
        <span class='text-danger'> {{ $errors->first('cred_datereferencies') }} </span>
        @endif
    </div>
</div>

<div class='row m-t-20'>
    <div class='input-field col-md-4'>
        <label>DATA DO LANCAMENTO</label>
        {!! Form::date('cred_datelaunch', null, ['maxlength' => '20', 'placeholder' => 'Insira a Data do Lancamento', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_datelaunch'))
        <span class='text-danger'> {{ $errors->first('cred_datelaunch') }} </span>
        @endif
    </div>
    <div class='input-field col-md-4'>
        <label>DATA DO VENCIMENTO</label>
        {!! Form::date('cred_datematurity', null, ['maxlength' => '20', 'placeholder' => 'Insira a Data do Vencimento', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_datematurity'))
        <span class='text-danger'> {{ $errors->first('cred_datematurity') }} </span>
        @endif
    </div>
    <div class='input-field col-md-4'>
        <label>DATA DO RECEBIMENTO</label>
        {!! Form::date('cred_datereceipt', null, ['maxlength' => '20', 'placeholder' => 'Insira a Data do Recebimento', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_datereceipt'))
        <span class='text-danger'> {{ $errors->first('cred_datereceipt') }} </span>
        @endif
    </div>
</div> 
<div class='row m-t-20'>
    <div class='input-field col-md-6'>
        <label>VALOR</label>
        {!! Form::text('cred_value', null, ['data-mask' => '000.000.000.000.000,00' , 'maxlength' => '20', 'placeholder' => 'Insira o Valor', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_value'))
        <span class='text-danger'> {{ $errors->first('cred_value') }} </span>
        @endif
    </div>
    <div class='input-field col-md-6'>
        <label>VALOR RECEBIDO</label>
        {!! Form::text('cred_valuereceipt', null, ['data-mask' => '000.000.000.000.000,00' , 'maxlength' => '20', 'placeholder' => 'Insira o Valor Recebido', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_valuereceipt'))
        <span class='text-danger'> {{ $errors->first('cred_valuereceipt') }} </span>
        @endif
    </div>
</div> 
<div class='row m-t-20'>
    <div class='input-field col-md-6'>
        <label>NUMERO DO DOCUMENTO</label>
        {!! Form::text('cred_documentnumber', null, ['maxlength' => '20', 'placeholder' => 'Insira o Número do Documento', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_documentnumber'))
        <span class='text-danger'> {{ $errors->first('cred_documentnumber') }} </span>
        @endif
    </div>
    <div class='input-field col-md-6'>
        <label>NOSSO NUMERO</label>
        {!! Form::text('cred_ournumber', null, ['maxlength' => '25', 'placeholder' => 'Insira o Número', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_ournumber'))
        <span class='text-danger'> {{ $errors->first('cred_ournumber') }} </span>
        @endif
    </div>
    <div class='input-field col-md-6'>
        <label>STATUS</label>
        {!! Form::text('cred_status', null, ['maxlength' => '50', 'placeholder' => 'Insira o Status', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_status'))
        <span class='text-danger'> {{ $errors->first('cred_status') }} </span>
        @endif
    </div>
    <div class='input-field col-md-6'>
        <label>COMPLEMENTO</label>
        {!! Form::text('cred_complements', null, ['maxlength' => '200', 'placeholder' => 'Insira o Complemento', 'class' => 'form-control']) !!}
        @if ($errors->has('cred_complements'))
        <span class='text-danger'> {{ $errors->first('cred_complements') }} </span>
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
 @push('css')
    <link rel='stylesheet' href='{{asset('bower_components/bootstrap-select/dist/css/bootstrap-select.css')}}'/>
    @endpush

    @push('js-topo')
    @endpush

    @push('js')
    <script src="{{asset('/js/input-mask.min.js')}}"></script>
    <script src="{{asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
    @endpush

    @endsection



