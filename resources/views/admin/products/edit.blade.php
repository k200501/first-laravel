@extends('layout.app')

@section('title','新增資料')

@section('css')

@endsection
@section('content')
<form action="{{ asset('/admin/products/edit/edit') }}/{{ $productsid->id }}" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">產品名稱︰</label>
        <input type="text" class="form-control" id="name" name='name' value="{{ $productsid->name }}" required>
      </div>
      <div class="form-group col-md-6">
        <label for="price">售價</label>
        <input type="number" class="form-control" id="price" name='price' value="{{ $productsid->price }}" required>
      </div>
    </div>
    <div class="form-group">
      <label for="discount">折扣</label>
      <input type="number" step="0.01" class="form-control" id="discount" name="discount" value="{{ $productsid->discount }}" placeholder="0.5" required>
    </div>
    <div class="form-group">
      <label for="discript">內容</label>
      <textarea name="discript" id="discript" cols="30" rows="3"  class="form-control"  required>{{ $productsid->discript }}</textarea>
    </div>
      <button type="submit" class="btn btn-primary">送出</button>
  </form>

@endsection
@section('js')

@endsection
