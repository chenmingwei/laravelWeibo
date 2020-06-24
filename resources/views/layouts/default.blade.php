<!doctype html>
<html lang="zh_CN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title', 'Weibo App')</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
@include('layouts/_header')

@yield('content')

<div class="container">
    @include('layouts/_footer')
</div>

</body>
</html>
