<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{config("app.name")}} - @yield('title')</title>
<link rel="stylesheet" href="{{asset("assets/fontawesome/css/all.min.css")}}"> <!-- https://fontawesome.com/ -->
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet"> <!-- https://fonts.google.com/ -->
<link href="{{asset("assets/css/bootstrap.min.css")}}" rel="stylesheet">
<link href="{{asset("assets/css/templatemo-xtra-blog.css")}}" rel="stylesheet">

@stack('css')

