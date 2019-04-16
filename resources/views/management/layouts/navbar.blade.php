<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">
        <a class="navbar-brand" href="#">Admin</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarContent">
            <div class="navbar-nav">
                <a class="nav-item nav-link @yield('nav_website')" href="{{ route('admin.website.edit') }}">Website</a>
                <a class="nav-item nav-link @yield('nav_home')" href="{{ route('admin.home.edit') }}">Home</a>
                <a class="nav-item nav-link" href="">About</a>
                <a class="nav-item nav-link" href="">Products</a>
                <a class="nav-item nav-link" href="">Store</a>
                <a class="nav-item nav-link" href="{{ route('admin.logout') }}">Logout</a>
            </div>
        </div>
    </div>
</nav>