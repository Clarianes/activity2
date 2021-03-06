@extends('layouts.mainlayout')

@section('title', 'Index Page')

@section('content')
    @forelse ($showall as $key => $blogs)
        @if ($loop->odd)
            <h1 style="text-shadow:1px 1px 0 black; color: #3CB371;"><b>{{ $key . '. ' . $blogs['blogtitle'] }}</h1></b>
        @else
            <h1 style="text-shadow:1px 1px 0 #3CB371; color: black;"><b>{{ $key . '. ' . $blogs['blogtitle'] }}</h1></b>
        @endif

        <h3>Date: {{ $blogs['date'] }}</h3>
        <h2>{{ $blogs['subtitle'] }}</h2>
        <h6>{{ $blogs['content'] }}</h6>
        <hr class='shine' />
    @empty
        <h1>No Blogs</h1>
    @endforelse

@endsection
