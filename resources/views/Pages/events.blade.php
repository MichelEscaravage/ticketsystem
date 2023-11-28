@extends('base')

@section('content')
    @foreach($events as $event)
        <div class="containter">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-text"><b>Datum:</b>{{$event->start_at}}</p>
                    <a href="#" class="btn btn-primary">Bestel Tickets</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection

