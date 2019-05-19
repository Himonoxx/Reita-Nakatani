@extends('layouts.app')

@section('content')
<div class="row">
    
    <div class="col-sm-10 offset-sm-1">
    <h1 class="text-center">{{ $contact->title }}</h1>
    </div>
    
    <div class="card col-sm-10 offset-sm-1">
        <ul class="list-group list-group-flush">
            <li class="list-group-item"><b>Name :</b> {{ $contact->name }}</li>
            <li class="list-group-item"><b>Email :</b> {{ $contact->email }}</li>
            <li class="list-group-item"><b>Title :</b> {{ $contact->title }}</li>
            <li class="list-group-item"><b>Massage</b><br>{{ $contact->content }}</li>
        </ul>
        <div class="mb-auto">
            <a class="btn btn-info text-dark btn-block mb-2" href=https://accounts.google.com/AccountChooser/signinchooser?service=mail role="button">Reply</a>
        </div>
        <div>
            {!! link_to_route('contacts.destroy','Delete',['contact'=>$contact],['class'=>'btn btn-danger btn-block mb-5']) !!}
        </div>
    </div>
    
    
    
    
    
</div>


@endsection