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
                @if(isset($data->ib_codigo))
                {!! Form::model($data, ['url' => "/restrict/$page/$data->ib_codigo", 'method' => 'PATCH',
                'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
                @else
                {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
                'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
                @endif

                <div class="card-body">
                    <div class='row'>
                        <div class='input-field col-md-4'>
                            <label>CODIGO DO ORÇAMENTOS</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-barcode"></i>
                                </div>
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
                    </div>

                    <div class='input-field col-md-4'>
                        <label>CODIGO DO SERVIÇOS</label>
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-barcode"></i>
                            </div>
                            <select name='serv_codigo' class='form-control'>
                                @foreach($services as $service)
                                <option 
                                    @if(isset($data->serv_codigo) && ($data->serv_codigo==$service->serv_codigo)) @php echo 'selected'; @endphp @endif 
                                    value="{{$service->serv_codigo}}" >
                                    {{$service->serv_codigo}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('serv_codigo'))
                        <span class='text-danger'> {{ $errors->first('serv_codigo') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>QUANTIDADE</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        {!! Form::number('ib_quant', null, ['required' => 'yes','class' => 'form-control']) !!}
                        @if ($errors->has('ib_quant'))
                        <span class='text-danger'> {{ $errors->first('ib_quant') }} </span>
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