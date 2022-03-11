@extends('layouts.mainlayout')

@section('title', 'Date Page')

@section('content')
    <div>
        <h1 class="w3-wide"><b>{{ $date['blogtitle'] }}</h1></b>
        <h3>Date: {{ $date['date'] }}</h3>
        <h2>{{ $date['subtitle'] }}</h2>
        <h6>{{ $date['content'] }}</h6>
    </div>
@endsection
