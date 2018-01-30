@extends('template')

    @foreach( $drinks as $drink)

        @section('titles')
            <h1>{{$drink -> LIBELLE}}</h1>
        @endsection

        @section('subtitle')
            <p>{{$drink -> CODE}}</p>
            <p>{{$drink -> PRIX}}</p>
    @endforeach

        @endsection
