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
                @if(isset($data->exi_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->exi_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-6'>
                            <label>CODIGO DA LOJA</label>
                            <div class="input-group">
                                <select name='sto_codigo' class='form-control'>
                                    @foreach($stores as $store)
                                    <option 
                                        @if(isset($data->sto_codigo) && ($data->sto_codigo==$store->sto_codigo)) @php echo 'selected'; @endphp @endif 
                                        value="{{$store->sto_codigo}}" >
                                        {{$store->sto_name}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('sto_codigo'))
                            <span class='text-danger'> {{ $errors->first('sto_codigo') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label>CODIGO DA TRANSPORTADORA</label>
                        <div class="input-group">
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
            </div>    
            <div class="row m-t-20">
                <div class='input-field col-md-4'>
                    <label>TOTAL</label>
                    <div class="input-group">
                        {!! Form::number('exi_total', null, ['required' => 'yes', 'min' => '1', 'class' => 'form-control']) !!}
                        @if ($errors->has('exi_total'))
                        <span class='text-danger'> {{ $errors->first('exi_total') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>FRETE</label>
                    <div class="input-group">
                        {!! Form::number('exi_freight', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                        @if ($errors->has('exi_freight'))
                        <span class='text-danger'> {{ $errors->first('exi_freight') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>IMPOSTO</label>
                    <div class="input-group">
                        {!! Form::number('exi_tax', null,['data-mask' => '000.000.000.000.000,00' ,'class' => 'form-control']) !!}
                        @if ($errors->has('exi_tax'))
                        <span class='text-danger'> {{ $errors->first('exi_tax') }} </span>
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
<link rel='stylesheet' href='{{asset('bower_components/bootstrap-select/dist/css/bootstrap-select.css')}}'/>
@endpush

@push('js-topo')
@endpush

@push('js')
<script src="{{asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
@endpush

@endsection