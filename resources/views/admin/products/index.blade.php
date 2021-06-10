@extends('layout.app')
@section('css')

@endsection
@section('content')

<div class="row">
    <div class="col-sm-1">
        <div class="botton">
            <a href="{{ asset('/parallex') }}">全新頁面</a>
        </div>
    </div>

<div class="col-sm-1">
    <div class="botton">
        <a href="{{ asset('/product') }}">產品頁</a>
    </div>
</div>

<div class="col-sm-1">
    <div class="botton">
        <a href="{{ asset('/') }}">首頁</a>
    </div>
</div>
<div class="col-sm-1">
    <div class="botton">
        <a href="{{ asset('/contactus') }}">新增資料</a>
    </div>
</div>
<div class="col-sm-1">
    <div class="botton">
        <a href="{{ asset('/admin/product') }}">新增資料</a>
    </div>
</div>
</div>

<table id="mydatatable" class="display" style="width:100%">
    <thead>

        <tr>
            <th>產品名稱</th>
            <th>產品售價</th>
            <th>折扣</th>
            <th>描述</th>
            <th>新增</th>
            <th>編輯</th>
            <th>刪除</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($product as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}</td>
            <td>{{ $item->discript }}</td>
            <td><a href="{{ asset('admin/contactur/create') }}" class="btn btn-dark btn-sm">新增</a></td>
            <td><a href="{{ asset('admin/contactus') }}/{{ $item->id }}" type="button" class="btn btn-warning btn-sm">編輯</a></td>
            <td>
                <form action="{{ asset('admin/contactus/delete') }}/{{ $item->id }}" method="POST" style="display: inline-block">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger btn-sm">刪除這筆資料</button>

                </form>



            </td>

        </tr>
        {{-- {{ asset('/product') }}/{{ $item->id }}
        /admin/contactus/edit --}}

        @endforeach

    </tbody>
    <tfoot>
        <tr>
            <th>產品名稱</th>
            <th>產品售價</th>
            <th>折扣</th>
            <th>描述</th>
            <th>新增</th>
            <th>編輯</th>
            <th>刪除</th>

        </tr>
    </tfoot>
</table>


@endsection
@section('js')

@endsection
