@extends('layouts.app')

@section('content')
<form action="">
    @csrf
    <div class="container mt-5 col-md-8">
        <div class="card">
            <div class="card-header bg-info">
                <h3>Ajouter Produit</h3>
            </div>
            <div class="card-body">
                <label for="" class="">Libelle</label>
                <input name="libelle" type="text" class="form-control">

            </div>
        </div>
    </div>
</form>
@endsection