@extends('adminlte::page')
@section('content')
<ol class='breadcrumb'>
    <li><a href='{{url('/restrict')}}'>Home</a></li>
    <li><a href='{{url('/restrict/users')}}'>Usuários</a></li>
    <li><a href='{{url("/restrict/$page")}}'>{{$titulo}}</a></li>
    <li class='active'>Gerencimento</li>
</ol>

<h3 class="section-title first-title">{{$titulo}}</h3>
<div class="content-box">
    <div class="content">

        @if(isset($data->id))
        {!! Form::model($data, ['url' => "/restrict/$page/$data->id", 'method' => 'PATCH',
        'class' => 'form-horizontal', 'enctype'=>'multipart/form-data']) !!}
        @else
        {!! Form::open(['url' => route("$page.store"), 'method' => 'POST', 'class' => 'form-horizontal',
        'enctype'=>'multipart/form-data', 'form-send'=> "restrict/$page/create" ]) !!}
        @endif
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
            <button type='submit' class='btn btn-primary waves-effect waves-light'>Salvar Dados</button>
        </div>
        {!! Form::close() !!}

</div>
</div>

@push('css')
@endpush

@push('js-topo')
@endpush

@push('js')
@endpush

@endsection