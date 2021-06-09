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
<form action="/push" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">姓名</label>
        <input type="text" class="form-control" id="name" name='name' required>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name='email' required>
      </div>
    </div>
    <div class="form-group">
      <label for="phone">電話</label>
      <input type="text" class="form-control" id="phone" name="phone" placeholder="0987-878787" required>
    </div>
    <div class="form-group">
      <label for="content">內容</label>
      <textarea name="content" id="content" cols="30" rows="3" class="form-control" required></textarea>
      {{-- <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor"> --}}
    </div>
    {{-- <div class="form-row">
      <div class="form-group col-md-6">
        <label for="inputCity">City</label>
        <input type="text" class="form-control" id="inputCity">
      </div>
      <div class="form-group col-md-4">
        <label for="inputState">State</label>
        <select id="inputState" class="form-control">
          <option selected>Choose...</option>
          <option>...</option>
        </select>
      </div>
      <div class="form-group col-md-2">
        <label for="inputZip">Zip</label>
        <input type="text" class="form-control" id="inputZip">
      </div>
    </div> --}}
    {{-- <div class="form-group">
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="gridCheck">
        <label class="form-check-label" for="gridCheck">
          Check me out
        </label>
      </div>
    </div> --}}
    <button type="submit" class="btn btn-primary">送出</button>
  </form>

  @endsection
