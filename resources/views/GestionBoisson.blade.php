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
        @foreach ($drinks as $drink)

        <tr>
            <td>{{$drink -> LIBELLE}}</td>
            <td>{{$drink -> CODE   }}</td>
            <td>
                <a href='/details-boisson/{{$drink->CODE}}' class="btn btn-xs btn-infos">plus d'infos</a>
            </td>


        </tr>


        @endforeach
        </tbody>
    </table>
@endsection

