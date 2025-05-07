<?php

declare(strict_types=1);

namespace Modules\Rating\Filament\Resources\HasRatingResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Model;
use Modules\Rating\Actions\HasRating\GetCountByModelRatingIdAction;
use Modules\Rating\Actions\HasRating\GetSumByModelRatingIdAction;
use Modules\Rating\Models\Contracts\HasRatingContract;

/**
 * Widget per la visualizzazione delle statistiche dei rating.
 * Mostra il volume totale e il numero di giocatori per ogni rating associato al modello.
 *
 * @property (Model&HasRatingContract)|null $record
 */
class StatsOverview extends BaseWidget
{
    public (Model&HasRatingContract)|null $record = null;

    /**
     * Ottiene le statistiche per il widget.
     *
     * @return array
     */
    protected function getStats(): array
    {
        $stats = [];
<<<<<<< HEAD
        if (null === $this->record) {
=======
        if ($this->record === null) {
>>>>>>> 34a017e (.)
            return $stats;
        }

        // Ottiene i rating associati al modello
        $ratings = $this->record->ratings()->wherePivot('user_id', null)->get();
        
        // Calcola le statistiche per ogni rating
        foreach ($ratings as $rating) {
            $sum = app(GetSumByModelRatingIdAction::class)->execute($this->record, (string) $rating->id);
            $count = app(GetCountByModelRatingIdAction::class)->execute($this->record, (string) $rating->id);
            
            $stats[] = Stat::make((string) $rating->title, $sum)
                ->descriptionIcon('icon-bottlecap')
                ->description('Volume')
                ->label('Volume');
                
            $stats[] = Stat::make((string) $rating->title, $count)
                ->descriptionIcon('heroicon-o-users')
                ->description('Giocatori')
                ->color('success')
                ->label('Giocatori');
        }

        // Calcola le statistiche totali
        $sum = app(GetSumByModelRatingIdAction::class)->execute($this->record);
        $count = app(GetCountByModelRatingIdAction::class)->execute($this->record);
        
        $stats[] = Stat::make('Volume Totale', $sum)
            ->descriptionIcon('icon-bottlecap')
            ->description('Volume')
            ->label('Volume Totale');
            
        $stats[] = Stat::make('Giocatori Totali', $count)
            ->descriptionIcon('heroicon-o-users')
            ->description('Giocatori')
            ->color('success')
            ->label('Giocatori Totali');

        return $stats;
    }
}
