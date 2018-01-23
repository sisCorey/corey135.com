@extends('common.a-index')

@section('title','corey135 后台')

@section('menus')

    @foreach ($menus as $item)
    <article>
        <a class="thumbnail" href="{{ $item['url'] }}" data-position="top center">{{ $item.name }}</a>
        <h2>{{ $item['title'] }}</h2>
        <p>{{ $item['desc'] }}</p>
    </article>
    @endforeach

@endsection