<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('mahasiswa.index')}}">
            <img src="{{asset('client/img/logo.svg')}}" height="50" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
            aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link" href="{{route('mahasiswa.index')}}">Data Alumni</a>
                <a class="nav-item nav-link" href="{{route('perusahaan.index')}}">Data Perusahaan</a>
                <a class="nav-item nav-link btn-login" href="{{route('dashboard.index')}}">Login</a>
            </div>
        </div>
    </div>
</nav>
<!-- End Navbar -->