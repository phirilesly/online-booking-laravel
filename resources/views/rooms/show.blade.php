@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                <a href="/rooms" class="btn btn-outline-primary btn-sm">Go back</a>
                <h1 class="display-one">{{ ucfirst($room->room_desc) }}</h1>
                <p>{!! $room->body !!}</p> 
                <hr>
                <a href="/rooms/{{ $room->id }}/edit" class="btn btn-outline-primary">Edit Post</a>
                <br><br>
                <form id="delete-frm" class="" action="" method="POST">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">Delete Post</button>
                </form>
            </div>
        </div>
    </div>
@endsection