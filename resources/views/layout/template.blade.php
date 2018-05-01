<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <style>
    div.nav {
      float            : left;
      background-color : #7fffd4;
      margin-top       : 50px;
      margin-left      : 750px;
    }

    div.main{
      float            : right;
      background-color : #7fffd4;
      margin-top       : 50px;
      margin-right     : 850px;
    }


  </style>
</head>
<body>
  <center>
    <h1 class="title">@yield('title')</h1>
  </center>
    <div class="nav">
      @yield('menubar')
    </div>
    <div class=main>
      @yield('content')
    </div>
</body>
</html>
