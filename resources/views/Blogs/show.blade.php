@extends('layouts.mainlayout')

@section('title', 'Show Page')

@section('content')
    <div>
        <h1 class="w3-wide"><b>{{ $show['blogtitle'] }}</h1></b>
        <h3>Date: {{ $show['date'] }}</h3>
        <h2>{{ $show['subtitle'] }}</h2>
        <h6>{{ $show['content'] }}</h6>
    </div>
@endsection
