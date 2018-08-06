@extends('adminlte::page')
@section('content')
<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase breadcrumb-arrow'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item'><a href='{{route("$page.index")}}'>{{$titulo}}</a></li>
        <li class='breadcrumb-item active' aria-current='page'>EDIÇÃO DE REGISTRO</li>
    </ol>
</nav>
<div class="content-box">
    <div class='content'>
        @if(isset($data->inp_codigo))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->inp_codigo", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
        <div class='row'>
            <div class='input-field col-md-4'>
                <label>CODIGO DA TRANSPORTADORA</label>
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-barcode"></i>
                    </div>
                    <select name='con_codigo' class='form-control'>
                        @foreach($conveyors as $conveyor)
                        <option 
                            @if(isset($data->con_codigo) && ($data->con_codigo==$conveyor->con_codigo)) @php echo 'selected'; @endphp @endif 
                            value="{{$conveyor->con_codigo}}" >
                            {{$conveyor->con_conveyors}}
                    </option>
                    @endforeach
                </select>
                @if ($errors->has('con_codigo'))
                <span class='text-danger'> {{ $errors->first('con_codigo') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-4'>
            <label>DATA DO PEDIDO</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa fa-calendar"></i>
                </div>
                {!! Form::date('inp_requested_date', null, ['required' => 'yes','placeholder' => 'Insida a Data do Pedido', 'class' => 'form-control']) !!}
                @if ($errors->has('inp_requested_date'))
                <span class='text-danger'> {{ $errors->first('inp_requested_date') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-4'>
            <label>DATA DA ENTRADA</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa fa-calendar"></i>
                </div>
                {!! Form::date('inp_entry_date', null, ['required' => 'yes','placeholder' => 'Insira a Data da Entrada', 'class' => 'form-control']) !!}
                @if ($errors->has('inp_entry_date'))
                <span class='text-danger'> {{ $errors->first('inp_entry_date') }} </span>
                @endif
            </div>
        </div>
    </div>
    <div class="row m-t-20">
        <div class='input-field col-md-3'>
            <label>FRETE</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-money"></i>
                </div>
                {!! Form::number('inp_freight', null,['data-mask' => '000.000.000.000.000,00' ,'placeholder' => 'Insira o Frete', 'class' => 'form-control']) !!}
                @if ($errors->has('inp_freight'))
                <span class='text-danger'> {{ $errors->first('inp_freight') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-3'>
            <label>NUMERO DA NOTA FISCAL</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-barcode"></i>
                </div>
                {!! Form::number('inp_numnf', null, ['required' => 'yes','placeholder' => 'Insira o Número da Nota Fiscal', 'class' => 'form-control']) !!}
                @if ($errors->has('inp_numnf'))
                <span class='text-danger'> {{ $errors->first('inp_numnf') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-3'>
            <label>IMPOSTO</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-money"></i>
                </div>
                {!! Form::number('inp_tax', null,['required' => 'yes', 'placeholder' => 'Insira o Imposto', 'class' => 'form-control']) !!}
                @if ($errors->has('inp_tax'))
                <span class='text-danger'> {{ $errors->first('inp_tax') }} </span>
                @endif
            </div>
        </div>
        <div class='input-field col-md-3'>
            <label>TOTAL</label>
            <div class="input-group">
                <div class="input-group-addon">
                    <i class="fa fa-money"></i>
                </div>
                {!! Form::number('inp_total', null,['required' => 'yes', 'placeholder' => 'Insira o Total', 'class' => 'form-control']) !!}
                @if ($errors->has('inp_total'))
                <span class='text-danger'> {{ $errors->first('inp_total') }} </span>
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
<script src="{{asset('/js/input-mask.min.js')}}"></script>
<script src="{{asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
@endpush

@endsection       

