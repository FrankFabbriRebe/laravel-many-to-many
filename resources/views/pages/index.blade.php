@extends('layouts.main-layout')

@section('head')
<title>Projects</title>
@endsection

@section('content')
<h1>Project list</h1>

<!-- link to get create page -->
<a href="{{ route('route.createNewProject') }}">
    Click here to create a new project
    <br>
    <br>
    <br>
</a>

<ul>
    @foreach ($projects as $project)
    <li>

        <h3>Project name: </h3>
        <span>{{ $project -> name }}</span>
        <br>

        <h3>Type name: </h3>
        <span>{{ $project -> type -> name}}</span>


        <h3>Technology name: </h3>
        @foreach ($project -> technologies as $technology)
        #{{ $technology -> name }}
        @endforeach

        <!-- link to get edit page -->
        <a href="{{ route('route.editProject', $project -> id) }}">
            Clik here to edit project
        </a>

        <img src="{{ asset('storage/' . $project -> image) }}" alt="">

    </li>

    <br>
    <br>
    <br>

    @endforeach

</ul>
@endsection