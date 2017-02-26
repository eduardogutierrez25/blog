@include('landing.structure.head')
<body>
    <header>
        @include('landing.layouts.partials.nav')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>

    </footer>
    @include('landing.structure.javascript')
</body>
</html>
