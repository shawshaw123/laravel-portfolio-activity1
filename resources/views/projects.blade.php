@extends('layout')
@section('title', 'My Projects')
@section('content')
    <h1>My Projects</h1>
    <div style="margin-top: 2rem;">

    @foreach($projects as $project)
        <div style="background: #9DC183; padding: 1.5rem; margin-bottom: 1rem; border-radius: 5px; overflow: hidden;">
            <h3 style="color: #2c3e50; margin-top: 0; margin-bottom: 1rem;">{{ $project['title'] }}</h3>
            @if(isset($project['image']))
                <img src="{{ asset($project['image']) }}" alt="{{ $project['title'] }}" style="width: 100%; height: 250px; object-fit: cover; border-radius: 5px; margin-bottom: 1rem;">
            @else
                <div style="width: 100%; height: 250px; background: #ddd; border-radius: 5px; margin-bottom: 1rem; display: flex; align-items: center; justify-content: center; color: #999;">
                    No Image Available
                </div>
            @endif
            <p style="margin-top: 0.5rem; color: #555;">{{ $project['description'] }}</p>
        </div>
    @endforeach
</div>
@endsection