<div class="container offset-7 mt-5 col-md-4">
    <div class="card-header bg-info text-white">
        <h3>Liste des trajes</h3>
    </div>
    <table class="table table-bordered">
        <thead>
            <th>N°</th>
            <th>Depart</th>
            <th>Destination</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($trajets as $trajet)
            <tr>
                <td>{{$trajet->id}}</td>
                <td>{{$trajet->depart}}</td>
                <td>{{$trajet->destination}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>