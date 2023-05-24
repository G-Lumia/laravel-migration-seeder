@extends('layouts.app')


@section('maincontent')
    <main>
        <h1>Lista dei Treni</h1>
        <ul>
            @foreach ($trains as $train)
                <li>{{ $train->codice }}</li>
            @endforeach
        </ul>
    </main>
@endsection
