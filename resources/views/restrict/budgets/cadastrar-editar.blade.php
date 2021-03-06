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
                    <div class="row">
                        <div class='input-field col-md-6'>
                            <label>CLIENTE</label>
                            <div class="input-group">
                                <select name='user_id' class='form-control'>
                                    @foreach($users as $users)
                                    <option 
                                        @if(isset($data->user_id) && ($data->user_id==$users->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$users->id}}" >
                                        {{$users->name}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                        @if ($errors->has('user_id'))
                        <span class='text-danger'> {{ $errors->first('user_id') }} </span>
                        @endif
                    </div>
                    <div class='input-field col-md-2'>
                        <label><i class='zmdi zmdi-help' data-toggle='tooltip' data-placement='top' title='Validade em dias da Proposta'></i>VALIDADE</label>
                        <div class="input-group">
                            {!! Form::number('validateproposal', null, ['max' => '30', 'maxlength' => '2','class' => 'form-control']) !!}
                            @if ($errors->has('validateproposal'))
                            <span class='text-danger'> {{ $errors->first('validateproposal') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-2'>
                        <label><i class='zmdi zmdi-help' data-toggle='tooltip' data-placement='top' title='Desconto concedido'></i>DESCONTO %</label>
                        <div class="input-group">
                            {!! Form::number('discount', null, ['max' => '100','class' => 'form-control']) !!}
                            @if ($errors->has('discount'))
                            <span class='text-danger'> {{ $errors->first('discount') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-2'>
                        <label><i class='zmdi zmdi-help' data-toggle='tooltip' data-placement='top' title='Valor concedido'></i>VALOR R$</label>
                        <div class="input-group">
                            {!! Form::number('value', null, ['min' => '1','class' => 'form-control']) !!}
                            @if ($errors->has('value'))
                            <span class='text-danger'> {{ $errors->first('value') }} </span>
                            @endif
                        </div>
                    </div>
                </div>

                <div class='row m-t-20'>
                    <div class='input-field col-md-4'>
                        <label>CONDIÇÃO</label>
                        <div class="input-group">
                            {{ Form::select('qtdpayments', [
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
                            @if ($errors->has('qtdpayments'))
                            <span class='text-danger'> {{ $errors->first('qtdpayments') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>FORMA DE PAGAMENTO</label>
                        <div class="input-group">
                            {{ Form::select('conditionspayments', [
                                'CART.DÉBITO' => 'CART.DÉBITO',
                                'CART.CRÉDITO' => 'CART.CRÉDITO',
                                'DINHEIRO' => 'DINHEIRO',
                                'CHEQUE' => 'CHEQUE',
                                'BOLETO' => 'BOLETO',
                            ], null, ['class' => 'form-control', 'required' => 'yes'])
                            }}
                            @if ($errors->has('conditionspayments'))
                            <span class='text-danger'> {{ $errors->first('conditionspayments') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>STATUS</label>
                        <div class="input-group">
                            {{ Form::select('status', [
                                'AGUARDANDO' => 'AGUARDANDO',
                                'ACEITO' => 'ACEITO',
                                'FINALIZADO' => 'FINALIZADO',
                            ], null, ['class' => 'form-control', 'required' => 'yes'])
                            }}
                            @if ($errors->has('status'))
                            <span class='text-danger'> {{ $errors->first('status') }} </span>
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
</div>

@push('css')

@endpush

@push('js')

@endpush

@endsection

