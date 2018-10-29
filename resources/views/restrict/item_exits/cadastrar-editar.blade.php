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
                        <div class='input-field col-md-6'>
                            <label>CODIGO DA SAIDA</label>
                            <div class="input-group">
                                <select name='exit_id' class='form-control'>
                                    @foreach($exits as $exit)
                                    <option 
                                        @if(isset($data->exit_id) && ($data->exit_id==$exit->id)) @php echo 'selected'; @endphp @endif 
                                        value="{{$exit->id}}" >
                                        {{$exit->id}}
                                </option>
                                @endforeach
                            </select>
                            @if ($errors->has('exit_id'))
                            <span class='text-danger'> {{ $errors->first('exit_id') }} </span>
                            @endif
                        </div>
                    </div>
                    <div class='input-field col-md-6'>
                        <label>CODIGO DO PRODUTO</label>
                        <div class="input-group">
                            <select name='product_id' class='form-control'>
                                @foreach($products as $product)
                                <option 
                                    @if(isset($data->product_id) && ($data->product_id==$product->id)) @php echo 'selected'; @endphp @endif 
                                    value="{{$product->id}}" >
                                    {{$product->id}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('product_id'))
                        <span class='text-danger'> {{ $errors->first('product_id') }} </span>
                        @endif
                    </div>
                </div>
            </div>    
            <div class="row m-t-20">
                <div class='input-field col-md-4'>
                    <label>LOTE</label>
                    <div class="input-group">
                        {!! Form::text('lot', null, ['required' => 'yes', 'min' => '5', 'maxlength' => '30','class' => 'form-control']) !!}
                        @if ($errors->has('lot'))
                        <span class='text-danger'> {{ $errors->first('lot') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>QUANTIDADE</label>
                    <div class="input-group">
                        {!! Form::number('amount', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                        @if ($errors->has('amount'))
                        <span class='text-danger'> {{ $errors->first('amount') }} </span>
                        @endif
                    </div>
                </div>
                <div class='input-field col-md-4'>
                    <label>VALOR</label>
                    <div class="input-group">
                        {!! Form::number('value', null, ['required' => 'yes', 'min' => '1','class' => 'form-control']) !!}
                        @if ($errors->has('value'))
                        <span class='text-danger'> {{ $errors->first('value') }} </span>
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