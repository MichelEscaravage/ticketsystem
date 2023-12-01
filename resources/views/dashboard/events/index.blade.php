
@extends('base')

@section('content')
    
        <table class="table">
            <th>
                Titel
            </th>
            <th>
                Startdatum
            </th>
            <th>
                Prijs
            </th>
            <th>
                Locatie
            </th>
            @foreach($events as $event)
            <tr>
                <td><a href="">{{$event->title}}</a></td>
                <td>{{$event->start_at}}</td>
                <td>{{$event->price}}</td>
                <td>{{$event->location}}</td>
            </tr>
            @endforeach
        </table>
        <button class="btn btn-primary" type="button">Nieuw evenement aanmaken</button>
        
        @endsection