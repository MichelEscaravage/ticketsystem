@extends('base')
@section('content')
    <div class="container">
        <div class="mb-3">
            <form action="{{ route('events.store') }}" method="POST">
                @csrf
                <label class="form-label" for="title">Title</label>
                <input class="form-control" type="text" name="title">
                <br>

                <label class="form-label" for="start_at">starts at</label>
                <input class="form-control" name="start_at" id="start_at" type="date">
                <br>

                <label class="form-label" for="description">Description</label>
                    <textarea class="form-control" name="description" id="description" cols="30" rows="10"></textarea>
                <br>

                <label class="form-label" for="location">Adress</label>
                <input class="form-control" type="text" name="location">
                <br>

                <label class="form-label" for="price">Price</label>
                <input class="form-control" type="text" name="price">
                <br>

                <label class="form-label" for="end_at">starts at</label>
                <input class="form-control" name="end_at" id="end_at" type="date">
                <br>
                
                <input type="submit" class="btn btn-primary">
                
            </form>
        </div>
    </div>
@endsection
