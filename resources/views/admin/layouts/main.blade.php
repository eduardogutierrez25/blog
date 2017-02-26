@include('admin.structure.head')
<body>
    <header>
        @include('admin.layouts.partials.nav')
    </header>
    <section>
        @yield('content')
    </section>
    <footer>

    </footer>
    @include('admin.structure.javascript')
</body>
</html>
