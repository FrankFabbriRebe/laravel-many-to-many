@extends('layouts.main-layout')

@section('head')
<title>Create new project</title>
@endsection

@section('content')

<h1>Create a new project</h1>

<!-- FORM TO CREATE NEW PROJECT -->
<form action="{{ route('route.storeNewProject') }}" method="POST" enctype="multipart/form-data">


    @csrf
    @method('POST')

    <label for=" name">Project name</label>
    <input type="text" name="name" id="name">

    <br>

    <label for="author">Project author</label>
    <input type="text" name="author" id="author">

    <br>

    <label for="type_id">Type</label>
    <select name="type_id" id="type_id">
        @foreach ($types as $type)
        <option value="{{ $type -> id}}">{{ $type -> name }}</option>
        @endforeach
    </select>

    <br>

    @foreach ($technologies as $technology)
    <label for="{{ 'technology_id_' . $technology -> id }}">
        {{ $technology -> name }}
    </label>
    <input type="checkbox" name="technology_id[]" id="{{ 'technology_id_' . $technology -> id }}"
        value="{{ $technology -> id }}">
    @endforeach

    <label for="image">Image</label>
    <input type="file" name="image" id="image">

    <br>
    <br>
    <br>

    <input type="submit" value="CREATE">

</form>

@endsection