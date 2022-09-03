<?php/*  @dd($posts)!->*/?>
@extends('layout.base')
@section('container')
<h1>Halaman Posts</h1>
@foreach($posts as $post)
    <article>
        <h2>{{ $post["title"] }}</h2>
        <h5>{{ $post["author"] }}</h5>
        <p>{{ $post["body"] }}</p>
    </article>
@endforeach
@endsection