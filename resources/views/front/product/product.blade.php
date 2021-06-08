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
{{-- <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset ('/css/style.css') }}">

</head> --}}
<link rel="stylesheet" href="/css/news.css">


@endsection

@section('content')
<h1>哈囉你好嗎！</h1>
{{-- <div class="name">黃色天竺鼠︰{{ $name }}</div>
<div class="name">女生天竺鼠︰{{ $name2 }}</div>
<div class="name">
    {{ $total }} --}}
</div>

<div class="container" style="margin: auto; width:80%" >
    <div class="row">
        @foreach ($product as $key =>$item)
        <div class="col-md-4">

            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h5 class="card-title">產品名稱︰{{ $item->name }}</h5>
                  <p class="card-text">產品描述︰{{ $item->discript }}</p>
                  <p class="card-text">產品原價︰{{ $price[$key]}}</p>
                  <p class="card-text">產品折扣︰{{ $discount_chinese[$key] }}折</p>
                  <p class="card-text">價格︰{{ $total_price[$key] }}</p>
                  <a href="{{ asset('/product') }}/{{ $item->id }}">查看更多</a>

                </div>
              </div>
        </div>

        @endforeach
    </div>
</div>



@endsection



