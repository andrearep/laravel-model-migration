@extends('layout.app')
@section('content')

<main id="holiday">
    <div class="container">
        <div class="cards">
            @foreach($holidays as $holiday)
            <div class="card">
                <div class="poster">
                    <img src="{{ $holiday['poster'] }}" alt="">
                </div>
                <h3>{{ $holiday['arrival']}}</h3>
                <span>Partenza da: {{ $holiday['departure']}} <i class="{{ $holiday['transport']}}"></i> </span>
                <span class="prezzo"> {{ $holiday['price']}} $ </span>
                <span class="date"> Partenza {{ $holiday['departure_date']}} Ritorno {{ $holiday['return_date']}}</span>
            </div>
            @endforeach
        </div>
    </div>
</main>

@endsection