@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ $project->title }}
        </h2>

        <p>{{ $project->description }}</p>
        <hr>
        <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-sm btn-warning">Edit</a>

    </div>
@endsection