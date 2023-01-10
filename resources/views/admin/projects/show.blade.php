@extends('layouts.admin')

@section('content')
    <h1>{{ $project->slug }}</h1>
    <h2>{{ $project->content }}</h2>
@endsection
