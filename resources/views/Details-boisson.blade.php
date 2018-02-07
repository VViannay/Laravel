@extends('template')

@section('titles')
            <h1>
                {{$boisson->LIBELLE}}
            </h1>


@endsection

@section('subtitle')
            <h2><STRONG>Code produit :</STRONG><BR>
                <p>{{$boisson -> CODE}}</p>
            </h2>
                <p>{{$boisson -> PRIX}}</p>
@endsection
