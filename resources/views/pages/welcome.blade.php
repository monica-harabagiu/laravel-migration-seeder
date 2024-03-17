<div class="container my-5">
    <h1>Treni in partenza</h1>
    
    @foreach ($trains as $train)
        <div class="card my-5" style="width: 18rem;">
            <div class="card-body">
            <h5 class="card-title">{{ $train['azienda'] }}</h5>
            <p>Treno {{ $train['codice_treno'] }}</p>
            <hr>
            <h6>Partenza: {{ $train['stazione_di_partenza'] }}</h6>
            <p>{{ $train['orario_di_partenza'] }}</p>
            <h6>Arrivo: {{ $train['stazione_di_arrivo'] }}</h6>
            <p>{{ $train['orario_di_arrivo'] }}</p>
            <hr>
            @if ($train['in_orario'] == 1 && $train['cancellato'] == 0 )
                <h5>In orario</h5>
            @elseif ($train['in_orario'] == 0 && $train['cancellato'] == 0)
                <h5>In ritardo</h5>
            @elseif ($train['cancellato'] == 1)
                <h5>Cancellato</h5>
            @endif
            <hr>
            <p>Numero carrozze: {{ $train['numero_carrozze'] }}</p>
            </div>
        </div>
    @endforeach
</div>