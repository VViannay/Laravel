@extends('template')
@section('titles')
    Gestion des Boissons
@endsection

@section('subtitle')
    <h2>Créer, Editer, un outils de gestion de boissons complet !</h2>

@endsection
@section('form')
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Code</th>
                <th>Infos</th>

            </tr>
        </thead>
        <tbody>
        @foreach ($boissons as $boisson)
            <tr>
                    <td>{{$boisson->LIBELLE}}</td>
                    <td>{{$boisson->CODE  }}</td>
                <td>
                        <button><a href='/drink/{{$boisson->CODE}}'>Plus d'infos</a></button>
                    </td>

        </tr>
        @endforeach
        </tbody>
    </table>
    <h2>Créer , Editer une boissons</h2>

    <form action ='/drink/create' method = POST>
        {{ csrf_field() }}
        <div class="form-group">
            <label for="formGroupExampleInput">Nom de boissons</label>
            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Entrez le nom de la boissons" name="DrinkName">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Code Produit</label>
            <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Entrez le code produit" name="Code" maxlength="3">
        </div>
        <div class="form-group">
            <label for="formGroupExampleInput2">Prix</label>
            <input id="number" type="number" class="form-control" id="formGroupExampleInput2" placeholder="Entrez le prix de la boissons " name="DrinkPrice">
        </div>
        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection