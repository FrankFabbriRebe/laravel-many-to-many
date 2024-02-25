@extends('layouts.main-layout')

@section('head')
<title>Technologies</title>
@endsection

@section('content')

<h1>Technologies list</h1>

<ul>
    @foreach ($technologies as $technology)
    <li>
        <h3>Technology name: </h3>
        <span>{{ $technology -> name }}</span>
    </li>
    @endforeach
</ul>

@endsection