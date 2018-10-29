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
                        <div class='input-field col-md-5'>
                            <label>CODIGO DO TIPOS DE CREDITOS</label>
                            <select name='credits_type_id' class='form-control'>
                                @foreach($creditsTypes as $creditsType)
                                <option 
                                    @if(isset($data->credits_type_id) && ($data->credits_type_id==$creditsType->id)) @php echo 'selected'; @endphp @endif 
                                    value="{{$creditsType->id}}" >
                                    {{$creditsType->descriptions}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('credits_type_id'))
                        <span class='text-danger'> {{ $errors->first('credits_type_id') }} </span>
                        @endif
                    </div>
                    <div class='input-field col-md-5'>
                        <label>CODIGO DO ORÇAMENTOS</label>
                        <select name='budget_id' class='form-control'>
                            @foreach($budgets as $budget)
                            <option 
                                @if(isset($data->budget_id) && ($data->budget_id==$budget->id)) @php echo 'selected'; @endphp @endif 
                                value="{{$budget->id}}" >
                                {{$budget->id}}
                        </option>
                        @endforeach
                    </select>
                    @if ($errors->has('budget_id'))
                    <span class='text-danger'> {{ $errors->first('budget_id') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-2'>
                    <label>REFERÊNCIA</label>
                    {!! Form::date('datereferencies', null, ['maxlength' => '20','class' => 'form-control']) !!}
                    @if ($errors->has('datereferencies'))
                    <span class='text-danger'> {{ $errors->first('datereferencies') }} </span>
                    @endif
                </div>
            </div>

            <div class='row m-t-20'>
                <div class='input-field col-md-4'>
                    <label>DATA DO LANCAMENTO</label>
                    {!! Form::date('datelaunch', null, ['maxlength' => '20','class' => 'form-control']) !!}
                    @if ($errors->has('datelaunch'))
                    <span class='text-danger'> {{ $errors->first('datelaunch') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-4'>
                    <label>DATA DO VENCIMENTO</label>
                    {!! Form::date('datematurity', null, ['maxlength' => '20','class' => 'form-control']) !!}
                    @if ($errors->has('datematurity'))
                    <span class='text-danger'> {{ $errors->first('datematurity') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-4'>
                    <label>DATA DO RECEBIMENTO</label>
                    {!! Form::date('datereceipt', null, ['maxlength' => '20','class' => 'form-control']) !!}
                    @if ($errors->has('datereceipt'))
                    <span class='text-danger'> {{ $errors->first('datereceipt') }} </span>
                    @endif
                </div>
            </div> 
            <div class='row m-t-20'>
                <div class='input-field col-md-6'>
                    <label>VALOR</label>
                    {!! Form::text('value', null, ['data-mask' => '000.000.000.000.000,00' , 'maxlength' => '20','class' => 'form-control']) !!}
                    @if ($errors->has('value'))
                    <span class='text-danger'> {{ $errors->first('value') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-6'>
                    <label>VALOR RECEBIDO</label>
                    {!! Form::text('valuereceipt', null, ['data-mask' => '000.000.000.000.000,00' , 'maxlength' => '20','class' => 'form-control']) !!}
                    @if ($errors->has('valuereceipt'))
                    <span class='text-danger'> {{ $errors->first('valuereceipt') }} </span>
                    @endif
                </div>
            </div> 
            <div class='row m-t-20'>
                <div class='input-field col-md-6'>
                    <label>NUMERO DO DOCUMENTO</label>
                    {!! Form::text('documentnumber', null, ['maxlength' => '20','class' => 'form-control']) !!}
                    @if ($errors->has('documentnumber'))
                    <span class='text-danger'> {{ $errors->first('documentnumber') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-6'>
                    <label>NOSSO NUMERO</label>
                    {!! Form::text('ournumber', null, ['maxlength' => '25','class' => 'form-control']) !!}
                    @if ($errors->has('ournumber'))
                    <span class='text-danger'> {{ $errors->first('ournumber') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-6'>
                    <label>STATUS</label>
                    {!! Form::text('status', null, ['maxlength' => '50', 'class' => 'form-control']) !!}
                    @if ($errors->has('status'))
                    <span class='text-danger'> {{ $errors->first('status') }} </span>
                    @endif
                </div>
                <div class='input-field col-md-6'>
                    <label>COMPLEMENTO</label>
                    {!! Form::text('complements', null, ['maxlength' => '200','class' => 'form-control']) !!}
                    @if ($errors->has('complements'))
                    <span class='text-danger'> {{ $errors->first('complements') }} </span>
                    @endif
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
<link rel='stylesheet' href='{{asset('bower_components/bootstrap-select/dist/css/bootstrap-select.css')}}'/>
@endpush

@push('js-topo')
@endpush

@push('js')
<script src="{{asset('bower_components/bootstrap-select/dist/js/bootstrap-select.js')}}"></script>
@endpush

@endsection