<?php

namespace App\Filament\Widgets;

use Filament\Widgets\BarChartWidget;
use App\Models\Pemesanan;

class PemesananGrafik extends BarChartWidget
{
    protected static ?string $heading = 'Grafik Pemesanan';

    protected function getData(): array
    {
        $data = Pemesanan::query()
            ->selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->groupBy('date')
            ->orderBy('date')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Pemesanan',
                    'data' => $data->pluck('count'),
                ],
            ],
            'labels' => $data->pluck('date'),
        ];
    }
}

