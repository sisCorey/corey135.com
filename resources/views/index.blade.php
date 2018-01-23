@extends('common.c-index')

@section('title','智睿带你看世界')

@section('photos')

    @foreach ($list as $item)
    <article>
        <a class="thumbnail" href="{{ $item['path'] }}" data-position="top center"><img src="{{ $item['thumb'] }}" alt="{{ $item['title'] }}" /></a>
        <h2>{{ $item['title'] }}</h2>
        <p>{{ $item['desc'] }}</p>
    </article>
    @endforeach

@endsection