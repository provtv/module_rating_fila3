# HasRating Trait

## Descrizione
Il trait `HasRating` fornisce funzionalità per la gestione delle valutazioni (ratings) per modelli che necessitano di opzioni votabili/prevedibili. Il trait è utilizzato principalmente dal modello `Predict` (attraverso `Article`) per implementare le funzionalità di mercato predittivo.

## Modifiche Implementate

### 2024-XX-XX: Miglioramento della gestione delle immagini per ratings
- Risolto errore `Spatie\MediaLibrary\MediaCollections\Exceptions\UnreachableUrl` causato da tentativi di accesso a URL esterni non raggiungibili
- Sostituito il caricamento di immagini esterne con SVG icons embedded direttamente nell'array di risposta
- Implementate le funzioni precedentemente commentate per garantire funzionalità complete
- Rimossi riferimenti al "trading" per conformità legale

### Funzioni Principali

#### `getArrayRatingsWithImage(): array`
Restituisce un array di ratings con immagini o icone SVG associate.

```php
public function getArrayRatingsWithImage(): array
{
    $ratings = $this->ratings()->where('user_id', null)->get();
    $ratings_array = [];
    foreach ($ratings as $key => $rating) {
        $ratings_array[$key] = $rating->toArray();
        // SVG icons instead of external images
        $svgIcons = [
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="..." /></svg>',
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="..." /></svg>',
            '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6"><path fill-rule="evenodd" d="..." /></svg>'
        ];
        
        // Use media if it exists, otherwise don't try to create it
        $ratings_array[$key]['image'] = $rating->getFirstMediaUrl('rating');
        
        // Add SVG icon directly to the array
        $ratings_array[$key]['svg_icon'] = $svgIcons[$key % count($svgIcons)];
        $ratings_array[$key]['effect'] = false;
    }
    return $ratings_array;
}
```

#### `getOptionRatingsIdColor(): array`
Restituisce un array associativo di colori per ogni rating, con ID rating come chiave.

```php
public function getOptionRatingsIdColor(): array
{
    return Arr::pluck($this->ratings()->where('user_id', null)->get()->toArray(), 'color', 'id');
}
```

#### `getBettingUsers(): int`
Restituisce il numero di utenti unici che hanno partecipato a votazioni/previsioni per questo item.

```php
public function getBettingUsers(): int
{
    return RatingMorph::where('model_id', $this->id)
        ->where('user_id', '!=', null)
        ->distinct('user_id')
        ->count('user_id');
}
```

#### `getRatingsPercentageByVolume(): array`
Calcola la percentuale di voti per ogni opzione di rating basandosi sul volume di punti/crediti investiti.

```php
public function getRatingsPercentageByVolume(): array
{
    $ratings_options = $this->getOptionRatingsIdTitle();
    $result = [];

    $total_volume = $this->getVolumeCredit();
    if ($total_volume <= 0) {
        $total_volume = 1;
    }

    foreach ($ratings_options as $key => $value) {
        $volume = $this->getVolumeCredit($key);
        $result[$key] = round(($volume * 100) / $total_volume, 0);
    }

    return $result;
}
```

#### `getVolumeCredit(int $rating_id = null): float`
Calcola il volume totale di crediti/punti per tutte le opzioni o per un'opzione specifica.

```php
public function getVolumeCredit(int $rating_id = null): float
{
    $query = RatingMorph::where('model_id', $this->id)
        ->where('user_id', '!=', null);
        
    if (null !== $rating_id) {
        $query->where('rating_id', $rating_id);
    }
    
    return (float) $query->sum('points');
}
```

## Utilizzo nel Frontend

Il trait fornisce i dati necessari per il rendering delle opzioni di previsione nella griglia di mercati featured (`featured_grid.blade.php`). Le icone SVG incorporate sono utilizzate per offrire una visualizzazione coerente e professionale delle opzioni, evitando dipendenze da URL esterni.

## Collegamenti

- [Documentazione Principale Moduli](/docs/modules.md)
- [Modulo Predict](/Modules/Predict/docs/README.md)
- [Mercati Predittivi](/docs/predict-markets.md)