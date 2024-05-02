<?php

declare(strict_types=1);

namespace Modules\Rating\Filament\Resources\HasRatingResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Database\Eloquent\Model;
use Modules\Rating\Actions\HasRating\GetCountByModelRatingIdAction;
use Modules\Rating\Actions\HasRating\GetSumByModelRatingIdAction;

class StatsOverview extends BaseWidget
{
    public ?Model $record = null;

    protected function getStats(): array
    {
        $stats = [];
        $ratings = $this->record->ratings()->wherePivot('user_id', null)->get();
        foreach ($ratings as $rating) {
            $sum = app(GetSumByModelRatingIdAction::class)->execute($this->record, (string) $rating->id);
            $count = app(GetCountByModelRatingIdAction::class)->execute($this->record, (string) $rating->id);
            $stats[] = Stat::make($rating->title, $sum)->descriptionIcon('icon-bottlecap')->description('volume');
            $stats[] = Stat::make($rating->title, $count)->descriptionIcon('heroicon-o-users')->description('players')->color('success');
        }

        $sum = app(GetSumByModelRatingIdAction::class)->execute($this->record);
        $count = app(GetCountByModelRatingIdAction::class)->execute($this->record);
        $stats[] = Stat::make('Tot Volume', $sum)->descriptionIcon('icon-bottlecap')->description('volume');
        $stats[] = Stat::make('Tot Player', $count)->descriptionIcon('icon-bottlecap')->description('players')->color('success');

        return $stats;
    }
}
