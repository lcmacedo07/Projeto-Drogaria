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
                            <label>CODIGO DO ORÇAMENTOS</label>
                            <div class="input-group">
                                <select name='budget_id' class='form-control'>
                                    @foreach($budgets as $budget)
                                    <option 
                                        @if(isset($data->budget_id) && ($data->budget_id==$budget->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$budget->id}}" >
                                        {{$budget->budget_id}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('budget_id'))
                            <span class='text-danger'> {{ $errors->first('budget_id') }} </span>
                            @endif
                        </div>
                    </div>

                    <div class='input-field col-md-4'>
                        <label>CODIGO DO SERVIÇOS</label>
                        <div class="input-group">
                            <select name='service_id' class='form-control'>
                                @foreach($services as $service)
                                <option 
                                    @if(isset($data->service_id) && ($data->service_id==$service->service_id)) @php echo 'selected'; @endphp @endif 
                                    value="{{$service->service_id}}" >
                                    {{$service->service_id}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('service_id'))
                        <span class='text-danger'> {{ $errors->first('service_id') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>QUANTIDADE</label>
                    <div class="input-group">
                        <div class="input-group-addon">
                            <i class="fa fa-shopping-cart"></i>
                        </div>
                        {!! Form::number('quant', null, ['required' => 'yes','class' => 'form-control']) !!}
                        @if ($errors->has('quant'))
                        <span class='text-danger'> {{ $errors->first('quant') }} </span>
                        @endif
                    </div>
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

@endpush

@push('js')

@endpush

@endsection