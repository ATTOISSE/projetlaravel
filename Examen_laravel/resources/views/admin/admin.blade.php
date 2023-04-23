<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

<style>
body {
    background: url('images/chauffeur.jpg');
    background-repeat: no-repeat;
    background-size: cover;
}
</style>

<body>

    <div class="container mt-1">
        <div class="row"></div>
        <button class="btn btn-outline-secondary mt-3 text-black border-0 offset-9" id="btnAjout">Ajouter
            trajet</button>
        <a href="{{route('ajout')}}" class="btn btn-outline-secondary mt-3 text-black border-0" id="btnAjout">Lister
            trajet</a>
    </div>

    <form action="{{route('store')}}" method="POST">
        @csrf
        <div class="card col-4 offset-7 mt-5 bg-transparent" hidden id="formulaire">
            <div class="card-header text-white">
                <h5 class="text-center">Ajout d'un trajet</h5>
            </div>
            <div class="card-body">
                <label for="" class="text-bold text-primary"><b> Depart </b></label>
                <input name="depart" type="text" class="form-control bg-transparent">
                <label for="" class="text-bold text-primary"><b> Destination </b></label>
                <input name="destination" type="text" class="form-control bg-transparent">
                <button type="submit" class="btn btn-success mt-3 offset-3">Ajouter</button>
                <button type="reset" id="fermer" class="btn btn-secondary mt-3">Fermer</button>
            </div>
        </div>
    </form>

</body>

<script src="{{asset('js/script.js')}}">
</script>