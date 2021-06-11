@extends('layout.app')
@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
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
        <a href="{{ asset('/contactus') }}">客戶資料</a>
    </div>
</div>
<div class="col-sm-1">
    <div class="botton">
        <a href="{{ asset('/admin/products') }}">產品資料</a>
    </div>
</div>
</div>

<table id="productdata" class="display" style="width:100%">
    <thead>

        <tr>
            <th>產品名稱</th>
            <th>產品售價</th>
            <th>折扣</th>
            <th>描述</th>
            <th>操作</th>
            {{-- <th>編輯</th>
            <th>刪除</th> --}}

        </tr>
    </thead>
    <tbody>
        @foreach ($products as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{ $item->price }}</td>
            <td>{{ $item->discount }}</td>
            <td>{{ $item->discript }}</td>
            <td>

            {{-- <form action="{{ asset('admin/products/add') }}//{{ $item->id }}" method="POST"  style="display: inline-block">
                @csrf
                <button type="submit" class="btn btn-success btn-sm">新增</button>
            </form> --}}
            <a href="{{ asset('admin/products/add') }}" type="button" class="btn btn-success btn-sm">新增</a>
            <a href="{{ asset('admin/products/edit') }}/{{ $item->id }}" type="button" class="btn btn-warning btn-sm">編輯</a>
            <form action="{{ asset('admin/products/delete') }}/{{ $item->id }}" method="POST" style="display: inline-block">
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
            <th>操作</th>
            {{-- <th>編輯</th>
            <th>刪除</th> --}}

        </tr>
    </tfoot>
</table>


@endsection
@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
{{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}
<script>
    $(document).ready(function() {
    $('#productdata').DataTable(
        {
            "ordering":false
        }
    );
} );
</script>
@endsection
