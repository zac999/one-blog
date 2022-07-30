<!DOCTYPE html>
<html>
<head>
  <title>@yield('title','Fuck App') - study</title>
  <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
  @include('layouts._header')

  <div class="container">
    <div class="pffest-md-1 col-md-10">
    @include('shared._messages')
    @yield('content')
    @include('layouts._footer')
    </div>
  </div>


</body>

</html>
