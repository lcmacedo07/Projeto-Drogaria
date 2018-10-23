@extends('layouts.restrict.app')
@section('title','Contact')
@section('content')

<nav aria-label='breadcrumb' class='m-t-20'>
    <ol class='breadcrumb text-uppercase'>
        <li class='breadcrumb-item'><a href='{{url('/restrict')}}'>HOME</a></li>
        <li class='breadcrumb-item active' aria-current='page'>MENSAGEM</li>
    </ol>
</nav>

<div class="col-md-12">
    <div class="card card-plain">
        <div class="box-body">
            <div class="card-body">
                <h4 class="title">{{ $contact->subject }}</h4>
                <div class="card-content">
                    <div class="row">
                        <div class="col-md-12">
                            <strong>Nome: {{ $contact->name }}</strong><br>
                            <b>E-mail: {{ $contact->email }}</b> <br>
                            <strong>Mensagem: </strong><hr>

                            <p>{{ $contact->message }}</p><hr>

                        </div>
                    </div>
                    <a href="{{ route('contact.index') }}" class="btn btn-danger">Voltar</a>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@push('scripts')

@endpush

@endsection
