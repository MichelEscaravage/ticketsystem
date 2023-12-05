@extends('base')
@section('content')
    <div class="container">
        <h1>Dashboard</h1>
        <h2>Event detailpagina</h2>
        <hr>
        <h2>{{ $event->title }}</h2>
        <p><b>Start:</b> {{$event->start_at}}</p>
        <p><b>Location:</b> {{$event->location}}</p>
        <p><b>Price:</b> &euro;{{$event->price}}</p>

        <a href="" class="btn btn-info">Aanpassen</a>
        <a href="" class="btn btn-danger">Verwijderen</a>
    </div>
@endsection
