@extends('layout.front')

@section('title','最新消息內容頁')


@section('css')
<link rel="stylesheet" href="{{ asset ('/css/style.css') }}">

@endsection
@section('content')
<h1>最新消息</h1>
<div class="container">
    <h2 class="title">
        {{ $record->title }}
    </h2>

<p class="text">
    {{ $record->content }}
</p>
</div>

@endsection
