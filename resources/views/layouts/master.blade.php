<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    @include("partials.head")
</head>
<body>
@include("partials.header")
<div class="container-fluid">
    <main class="tm-main">
        <!-- Search form -->
        @include("partials.search")
        @yield("content")
        @include("partials.footer")
    </main>
</div>
<script src="{{asset("assets/js/jquery.min.js")}}"></script>
<script src="{{asset("assets/js/templatemo-script.js")}}"></script>
@stack('js')
</body>
</html>
