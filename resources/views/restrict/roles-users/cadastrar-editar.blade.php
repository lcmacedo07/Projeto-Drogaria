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
                            <label>USER ID</label>
                            <select name='user_id' class='form-control'>
                                @foreach($users as $user)
                                <option 
                                    @if(isset($data->user_id) && ($data->user_id==$user->id)) @php echo 'selected'; @endphp @endif 
                                    value="{{$user->id}}" >
                                    {{$user->name}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('user_id'))
                        <span class='text-danger'> {{ $errors->first('user_id') }} </span>
                        @endif
                    </div>
                    <div class='input-field col-md-6'>
                        <label>ROLE ID</label>
                        <select name='role_id' class='form-control'>
                            @foreach($roles as $role)
                            <option 
                                @if(isset($data->role_id) && ($data->role_id==$role->id)) @php echo 'selected'; @endphp @endif 
                                value="{{$role->id}}" >
                                {{$role->name}}
                        </option>
                        @endforeach
                    </select>
                    @if ($errors->has('role_id'))
                    <span class='text-danger'> {{ $errors->first('role_id') }} </span>
                    @endif
                </div>
            </div>
            <hr/>
            <div>
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
