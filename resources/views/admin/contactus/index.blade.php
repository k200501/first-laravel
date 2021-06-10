@extends('layout.app')
@section('css')

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

@endsection
@section('page_title','聯絡我們管理')

@section('h1_title','聯絡我們-儀表板')

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
</div>
<table id="mydatatable" class="display" style="width:100%">
    <thead>

        <tr>
            <th>姓名</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Content</th>
            <th>按鈕</th>
            <th>刪除</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($list as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td>{{ $item->email }}</td>
            <td>{{ $item->phone }}</td>
            <td>{{ $item->content }}</td>
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

        {{-- <tr>
            <td>Unity Butler</td>
            <td>Marketing Designer</td>
            <td>San Francisco</td>
            <td>47</td>
            <td>2009/12/09</td>
            <td>$85,675</td>
        </tr>
        <tr>
            <td>Howard Hatfield</td>
            <td>Office Manager</td>
            <td>San Francisco</td>
            <td>51</td>
            <td>2008/12/16</td>
            <td>$164,500</td>
        </tr>
        <tr>
            <td>Hope Fuentes</td>
            <td>Secretary</td>
            <td>San Francisco</td>
            <td>41</td>
            <td>2010/02/12</td>
            <td>$109,850</td>
        </tr>
        <tr>
            <td>Vivian Harrell</td>
            <td>Financial Controller</td>
            <td>San Francisco</td>
            <td>62</td>
            <td>2009/02/14</td>
            <td>$452,500</td>
        </tr>
        <tr>
            <td>Timothy Mooney</td>
            <td>Office Manager</td>
            <td>London</td>
            <td>37</td>
            <td>2008/12/11</td>
            <td>$136,200</td>
        </tr>
        <tr>
            <td>Jackson Bradshaw</td>
            <td>Director</td>
            <td>New York</td>
            <td>65</td>
            <td>2008/09/26</td>
            <td>$645,750</td>
        </tr>
        <tr>
            <td>Olivia Liang</td>
            <td>Support Engineer</td>
            <td>Singapore</td>
            <td>64</td>
            <td>2011/02/03</td>
            <td>$234,500</td>
        </tr>
        <tr>
            <td>Bruno Nash</td>
            <td>Software Engineer</td>
            <td>London</td>
            <td>38</td>
            <td>2011/05/03</td>
            <td>$163,500</td>
        </tr>
        <tr>
            <td>Sakura Yamamoto</td>
            <td>Support Engineer</td>
            <td>Tokyo</td>
            <td>37</td>
            <td>2009/08/19</td>
            <td>$139,575</td>
        </tr>
        <tr>
            <td>Thor Walton</td>
            <td>Developer</td>
            <td>New York</td>
            <td>61</td>
            <td>2013/08/11</td>
            <td>$98,540</td>
        </tr> --}}


    </tbody>
    <tfoot>
        <tr>
            <th>姓名</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Content</th>、
            <th>按鈕</th>
            <th>刪除</th>

        </tr>
    </tfoot>
</table>

@endsection
 @section('js')
 <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
 {{-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> --}}

<script>
    $(document).ready(function() {
    $('#mydatatable').DataTable(
        {
            "ordering":false
        }
    );
} );
</script>

 @endsection
