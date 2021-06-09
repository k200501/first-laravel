
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href= "{{ asset('/css/style.css' )}}">
    @yield('news')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">


</head>
<body>
    <div id="boxall">
        <div class="mask">
            <div class="boxin" >

                天竺鼠車車!!!<br>
                <input type="text" placeholder="天竺鼠車車名字" id="boxinput"><br>
                <input type="submit" name = "輸入" id="boxinput2" value="按下去">

                </div>
            </div>
        </div>
    </div>
    <div class="botton">
        <a href="{{ asset('/parallex') }}">全新頁面</a>
    </div>
    <br>
    <div class="botton">
        <a href="{{ asset('/product') }}">產品頁</a>
    </div>
    <br>
    <div class="botton">
        <a href="{{ asset('/') }}">首頁</a>
    </div>
    <div class="botton">
        <a href="{{ asset('/contactus') }}">聯絡我們</a>
    </div>

<div class="container">
    @if (Session::has('message'))
    <div class="alert alert-success" role="alert">
        {{ Session::get('message') }}
    </div>

    @endif
    @yield('content')
</div>
<div class="content2">
    @yield('content2')
</div>
{{-- bootstrap --}}
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</body>
</html>
