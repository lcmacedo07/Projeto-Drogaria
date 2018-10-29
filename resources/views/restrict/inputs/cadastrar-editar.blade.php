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
                            <label>CODIGO DA TRANSPORTADORA</label>
                            <div class="input-group">
                                <select name='conveyor_id' class='form-control'>
                                    @foreach($conveyors as $conveyor)
                                    <option 
                                        @if(isset($data->conveyor_id) && ($data->conveyor_id==$conveyor->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$conveyor->id}}" >
                                        {{$conveyor->conveyors}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('conveyor_id'))
                            <span class='text-danger'> {{ $errors->first('conveyor_id') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>DATA DO PEDIDO</label>
                        <div class="input-group">
                            {!! Form::date('requested_date', null, ['required' => 'yes','class' => 'form-control']) !!}
                            @if ($errors->has('requested_date'))
                            <span class='text-danger'> {{ $errors->first('requested_date') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-4'>
                        <label>DATA DA ENTRADA</label>
                        <div class="input-group">
                            {!! Form::date('entry_date', null, ['required' => 'yes','class' => 'form-control']) !!}
                            @if ($errors->has('entry_date'))
                            <span class='text-danger'> {{ $errors->first('entry_date') }} </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="row m-t-20">
                    <div class='input-field col-md-3'>
                        <label>FRETE</label>
                        <div class="input-group">
                            {!! Form::number('freight', null,['class' => 'form-control']) !!}
                            @if ($errors->has('freight'))
                            <span class='text-danger'> {{ $errors->first('freight') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>NUMERO DA NOTA FISCAL</label>
                        <div class="input-group">
                            {!! Form::number('numnf', null, ['required' => 'yes','class' => 'form-control']) !!}
                            @if ($errors->has('numnf'))
                            <span class='text-danger'> {{ $errors->first('numnf') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>IMPOSTO</label>
                        <div class="input-group">
                            {!! Form::number('tax', null,['required' => 'yes','class' => 'form-control']) !!}
                            @if ($errors->has('tax'))
                            <span class='text-danger'> {{ $errors->first('tax') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-3'>
                        <label>TOTAL</label>
                        <div class="input-group">
                            {!! Form::number('total', null,['required' => 'yes','class' => 'form-control']) !!}
                            @if ($errors->has('total'))
                            <span class='text-danger'> {{ $errors->first('total') }} </span>
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

@push('css')
@endpush

@push('js-topo')
@endpush

@push('js')
@endpush

@endsection