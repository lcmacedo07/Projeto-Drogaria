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
        @if(isset($data->bud_codigo))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->bud_codigo", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-6'>
                <label>CLIENTE</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-address-card"></i>
                    </div>
                    <div class='select'>
                        <select name='user_id' class='form-control selectpicker' data-live-search='true'>
                            <option></option>
                            <option onclick="">NOVO CLIENTE</option>
                            
                            @foreach($users as $users)
                            <option 
                                @if(isset($data->user_id) && ($data->user_id==$users->id)) @php echo 'selected'; @endphp @endif 
                                value="{{$users->id}}" >
                                {{$users->name}}
                        </option>
                        @endforeach
                    </select>
                </div>
            </div>
            @if ($errors->has('user_id'))
            <span class='text-danger'> {{ $errors->first('user_id') }} </span>
            @endif
        </div>
        <div class='input-field col-md-2'>
            <label><i class='zmdi zmdi-help' data-toggle='tooltip' data-placement='top' title='Validade em dias da Proposta'></i>VALIDADE</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="	fa fa-calendar-check-o"></i>
                </div>
                {!! Form::number('bud_validateproposal', null, ['max' => '30', 'maxlength' => '2', 'placeholder' => 'Validade', 'class' => 'form-control']) !!}
                @if ($errors->has('bud_validateproposal'))
                <span class='text-danger'> {{ $errors->first('bud_validateproposal') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-2'>
            <label><i class='zmdi zmdi-help' data-toggle='tooltip' data-placement='top' title='Desconto concedido'></i>DESCONTO %</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-money"></i>
                </div>
                {!! Form::number('bud_discount', null, ['max' => '100', 'placeholder' => 'Desconto', 'class' => 'form-control']) !!}
                @if ($errors->has('bud_discount'))
                <span class='text-danger'> {{ $errors->first('bud_discount') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-2'>
            <label><i class='zmdi zmdi-help' data-toggle='tooltip' data-placement='top' title='Valor concedido'></i>VALOR R$</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-money"></i>
                </div>
                {!! Form::number('bud_value', null, ['min' => '1', 'placeholder' => 'Valor', 'class' => 'form-control']) !!}
                @if ($errors->has('bud_value'))
                <span class='text-danger'> {{ $errors->first('bud_value') }} </span>
                @endif
            </div>
        </div>
    </div>

    <div class='row m-t-20'>
        <div class='input-field col-md-4'>
            <label>CONDIÇÃO</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-credit-card-alt"></i>
                </div>
                {{ Form::select('bud_qtdpayments', [
                                '1' => 'À VISTA',
                                '2' => '2X',
                                '3' => '3X',
                                '4' => '4X',
                                '5' => '5X',
                                '6' => '6X',
                                '7' => '7X',
                                '8' => '8X',
                                '9' => '9X',
                                '10' => '10X',
                                '11' => '11X',
                                '12' => '12X',
                            ], null, ['class' => 'form-control', 'required' => 'yes'])
                }}
                @if ($errors->has('bud_qtdpayments'))
                <span class='text-danger'> {{ $errors->first('bud_qtdpayments') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-4'>
            <label>FORMA DE PAGAMENTO</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-credit-card-alt"></i>
                </div>
                {{ Form::select('bud_conditionspayments', [
                                'CART.DÉBITO' => 'CART.DÉBITO',
                                'CART.CRÉDITO' => 'CART.CRÉDITO',
                                'DINHEIRO' => 'DINHEIRO',
                                'CHEQUE' => 'CHEQUE',
                                'BOLETO' => 'BOLETO',
                            ], null, ['class' => 'form-control', 'required' => 'yes'])
                }}
                @if ($errors->has('bud_conditionspayments'))
                <span class='text-danger'> {{ $errors->first('bud_conditionspayments') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-4'>
            <label>STATUS</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                </div>
                {{ Form::select('bud_status', [
                                'AGUARDANDO' => 'AGUARDANDO',
                                'ACEITO' => 'ACEITO',
                                'FINALIZADO' => 'FINALIZADO',
                            ], null, ['class' => 'form-control', 'required' => 'yes'])
                }}
                @if ($errors->has('bud_status'))
                <span class='text-danger'> {{ $errors->first('bud_status') }} </span>
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
@push('css')
<link rel='stylesheet' href='{{asset('bower_components/bootstrap-select/dist/css/bootstrap-select.css')}}'/>
@endpush

@push('js-topo')
@endpush

@push('js')
<script src="{{asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
@endpush

@endsection