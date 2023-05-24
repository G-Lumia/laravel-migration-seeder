@extends('layouts.app')


@section('maincontent')
    <main>
        <div class="container">

            <h1>Lista dei Treni</h1>
            @foreach ($trains as $train)
                <div class="card my-5">
                    <div class="card-title p-3">
                        <h1>
                            {{$train->codice}}
                        </h1>
                    </div>
                    <div class="card-body">
                        <div>
                            <h3> Azienda: </h3>
                            <p>{{$train->azienda}}</p>
                        </div>
                        <div>
                            <h3> Stazione di partenza: </h3>
                            <p>{{$train->stazione_partenza}}</p>
                            <h3> Orario di partenza: </h3>
                            <p>{{$train->orario_partenza}}</p>
                        </div>
                        <div>
                            <h3> Stazione di arrivo: </h3>
                            <p>{{$train->stazione_arrivo}}</p>
                            <h3> Orario di arrivo: </h3>
                            <p>{{$train->orario_arrivo}}</p>
                        </div>
                        <div>
                            <h3> Numero di carrozze: </h3>
                            <p>{{$train->numero_carrozze}}</p>
                        </div>
                        <div>
                            <h3> In orario: </h3>
                            @if($train->in_orario)
                                <p> Sì </p>
                            @else
                            <p> No </p>
                            @endif
                        </div>
                        <div>
                            <h3> Cancellato: </h3>
                            @if($train->cancellato)
                                <p> Sì </p>
                            @else
                            <p> No </p>
                            @endif
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
