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
            <th>Edit</th>

        </tr>
        </thead>
        <tbody>
            @foreach( $CAF as $boisson)
        <tr>
            <td>{{$boisson -> LIBELLE}}</td>
            <td>{{$boisson -> CODE}}</td>
            <td>
                <a href="#" class="btn btn-xs btn-primary">Edit</a>
                <a href="#" class="btn btn-xs btn-primary">Infos</a>

            </td>


        </tr>


            @endforeach
        </tbody>
    </table>
@endsection

