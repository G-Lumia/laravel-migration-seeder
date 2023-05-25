@extends('layouts.app')


@section('maincontent')
    <main>
        <div class="container">

            <h1>Lista dei Treni</h1>
            <table class="table table-hover table-dark">
                <thead>
                  <tr>
                    <th scope="col">Codice</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Giorno Partenza</th>
                    <th scope="col">Stazione Partenza</th>
                    <th scope="col">Orario Partenza</th>
                    <th scope="col">Stazione Arrivo</th>
                    <th scope="col">Orario Arrivo</th>
                    <th scope="col">Numero Carrozze</th>
                    <th scope="col">In Orario</th>
                    <th scope="col">Cancellato</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($trains as $train)
                  <tr>
                        <td>{{$train->codice}}</td>
                        <td>{{$train->azienda}}</td>
                        <td>{{$train->giorno_partenza}}</td>
                        <td>{{$train->stazione_partenza}}</td>
                        <td>{{$train->orario_partenza}}</td>
                        <td>{{$train->stazione_arrivo}}</td>
                        <td>{{$train->orario_arrivo}}</td>
                        <td>{{$train->numero_carrozze}}</td>
                        @if($train->in_orario)
                          <td>Sì</td>
                        @else
                          <td>No</td>
                        @endif
                        @if($train->cancellato)
                            <td> Sì </td>
                        @else
                            <td>No</td>
                        @endif
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </main>
@endsection
