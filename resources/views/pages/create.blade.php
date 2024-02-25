@extends('layouts.main-layout')

@section('head')
<title>Create new project</title>
@endsection

@section('content')

<h1>Create a new project</h1>

<!-- FORM TO CREATE NEW PROJECT -->
<form method="POST">

    @csrf
    @method('POST')

    <label for="name">Project name</label>
    <input type="text" name="name" id="name">

    <br>

    <label for="author">Project author</label>
    <input type="text" name="author" id="author">

    <br>

    @foreach ($technologies as $technology)
    <input type="checkbox" name="technology_id[]" id="{{ 'technology_id_' . $technology -> id }}"
        value="{{ $technology -> id }}">
    <label for="{{ 'technology_id_' . $technology -> id }}">
        {{ $technology -> name }}
    </label>
    <br>

    @endforeach

    <input type="submit" value="CREATE">

</form>

@endsection