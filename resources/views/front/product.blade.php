@extends('layout.front')
{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">

</head> --}}


@section('news')
<link rel="stylesheet" href="/css/news.css">


@endsection
@section('content')
<h1>哈囉你好嗎！</h1>
<div class="name">黃色天竺鼠︰{{ $name }}</div>
<div class="name">女生天竺鼠︰{{ $name2 }}</div>
<div class="name">
    {{ $total }}
</div>


@endsection


