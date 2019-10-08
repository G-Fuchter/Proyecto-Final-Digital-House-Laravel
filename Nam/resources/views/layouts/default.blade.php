<!doctype html>
@include('includes.header')
<body>
<main role="main">
    @include('includes.messages')
    @yield('content')

</main>
</body>
@include('includes.footer')
</html>