@extends('layouts.admin')
@section('content')
    <h1>ciao sono la pagina index admin</h1>

    @foreach ($projects as $project)
        <li>
            <a href="{{ route('admin.projects.show', $project->slug) }}">
                {{ $project->title }}</a>
        </li>
    @endforeach
@endsection
