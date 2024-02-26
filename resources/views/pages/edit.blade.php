@extends('layouts.main-layout')

@section('head')
<title>Projects</title>
@endsection

@section('content')

<h1>Edit project</h1>

<!-- FORM TO EDIT A PROJECT -->
<form action="{{ route('route.update', $project -> id) }}" method="POST">

    @csrf
    @method('POST')

    <label for="name">Name</label>
    <input type="text" name="name" id="name" value="{{ $project -> name }}">

    <br>

    <label for="author">Author</label>
    <input type="text" name="author" id="author" value="{{ $project -> author }}">

    <br>

    <label for="type_id">Type</label>
    <select name="type_id" id="type_id">
        @foreach ($types as $type)
        <option value="{{ $type -> id }}" @if ($project -> type -> id == $type -> id)
            selected
            @endif
            >{{ $type -> name }}</option>
        @endforeach
    </select>

    <br>

    @foreach ($technologies as $technology)
    <div>
        <input type="checkbox" name="technology_id[]" value="{{ $technology -> id }}" @foreach ($project -> technologies
        as $pTech)
        @checked($pTech -> id === $technology -> id)
        @endforeach
        >
        <label>
            {{ $technology -> name }}
        </label>
    </div>
    @endforeach

    <br>

    <input type="submit" value="UPDATE">

</form>

@endsection