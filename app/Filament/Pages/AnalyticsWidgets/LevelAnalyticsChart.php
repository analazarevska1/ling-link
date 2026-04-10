<?php

namespace App\Filament\Pages\AnalyticsWidgets;

use App\Models\UserProfile;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class LevelAnalyticsChart extends ChartWidget
{
    protected static ?string $heading = 'Претходно знаење (Ниво)';
    protected static ?int $sort = 4;

    protected function getData(): array
    {
        $data = UserProfile::select('level', DB::raw('count(*) as count'))
            ->groupBy('level')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Студенти',
                    'data' => $data->pluck('count')->toArray(),
                    'backgroundColor' => ['#f8cf51', '#a8dff0', '#194077', '#d6eef8', '#84CDF1'],
                ],
            ],
            'labels' => $data->pluck('level')->toArray(),
        ];
    }

    protected function getOptions(): array
    {
        return [
            'scales' => [
                'x' => [
                    'display' => false,
                ],
                'y' => [
                    'display' => false,
                ],
            ],
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
