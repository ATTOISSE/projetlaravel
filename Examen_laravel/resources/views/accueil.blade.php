<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<style>
body {
    background: url('images/commande.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Yango</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('login') }}">Admin</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('chauffeur')}}">Driver</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('client')}}">Customer</a>
                </li>
            </ul>
        </div>
    </div>
</nav>