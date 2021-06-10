@extends('layout.app')


@section('content')
<form action="{{ asset('/admin/contactus/update') }}/{{ $contactusid->id }}" method="POST">
    @csrf
    <div class="form-row">
      <div class="form-group col-md-6">
        <label for="name">姓名︰</label>
        <input type="text" class="form-control" id="name" name='name' value="{{ $contactusid->name }}" required>
      </div>
      <div class="form-group col-md-6">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name='email' value="{{ $contactusid->email }}" required>
      </div>
    </div>
    <div class="form-group">
      <label for="phone">電話</label>
      <input type="text" class="form-control" id="phone" name="phone" value="{{ $contactusid->phone }}" placeholder="0987-878787" required>
    </div>
    <div class="form-group">
      <label for="content">內容</label>
      <textarea name="content" id="content" cols="30" rows="3"  class="form-control"  required>{{ $contactusid->content }}</textarea>
    </div>
      <button type="submit" class="btn btn-primary">送出</button>
  </form>

  @endsection

