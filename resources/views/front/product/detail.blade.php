@extends('layout.front')
@section('title','產品頁')

@section('css')

<link rel="stylesheet" href="{{ asset ('/css/style.css') }}">
@endsection

@section('content')
<h1>最新消息</h1>
<div class="container">
    <h2 class="title">
       產品名稱︰ {{ $productid->name }}
    </h2>

<p class="text">
    產品描述︰{{ $productid->discript }}
</p>
<p class="text">
    折扣︰{{ $productid->discount*100 }}折
</p>
<p class="text">
    原價︰{{ $productid->price }}
</p>
{{-- <p class="text">
    售價︰ {{ $pricetotal }}

</p> --}}
<p class="text">
    售價︰{{ round($productid->price*$productid->discount) }}
</p>
</div>

@endsection
