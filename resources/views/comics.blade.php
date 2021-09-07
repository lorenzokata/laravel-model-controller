@extends('layouts.app')
@section('title', 'Comics')

@section('content')
    <section class="comics">
        <div class="container">
            @foreach ($comics as $item)
                <div class="card">
                    <img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}">
                    <div class="layover"><div class="card-text"><a href="">{{ $item['title'] }}</a></div></div>
                </div>
            @endforeach
        </div>
    </section>
@endsection