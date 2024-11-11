<?php

namespace App\Filament\Resources\PostResource\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected static string $view = 'filament.resources.post-resource.widgets.stats-overview';

    // protected function getStats(): array
    // {
    //     return [
    //         Stat::make('Unique views', '192.1k'),
    //         Stat::make('Bounce rate', '21%'),
    //         Stat::make('Average time on page', '3:12'),
    //     ];
    // }
}
