@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
                 <div class="row">
                    <div class="col-8">
                        <h1 class="display-one">Our Blog!</h1>
                        <p>Enjoy reading our posts. Click on a post to read!</p>
                    </div>
                    <div class="col-4">
                        <p>Create new Room</p>
                        <a href="/room/create/room" class="btn btn-primary btn-sm">Add Room</a>
                    </div>
                </div>                
                @forelse($rooms as $room)
                    <ul>
                        <li><a href="./rooms/{{ $room->id }}">{{ ucfirst($room->room_desc) }}</a></li>
                    </ul>
                @empty
                    <p class="text-warning">No blog Roomss available</p>
                @endforelse
            </div>
        </div>
    </div>
@endsection