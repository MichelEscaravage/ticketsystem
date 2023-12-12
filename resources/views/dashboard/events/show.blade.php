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
        <div class="buttons">
            <a href="" class="btn btn-info">Aanpassen</a>
            @csrf
            @method('DELETE')
            <form action="{{route('events.destroy', $event ->id)}}" method="post">
                <input type="submit" value="Verwijderen" class="btn btn-danger">
            </form>
            
        </div>
    </div>
@endsection
