<?php

namespace App\Filament\Pages\AnalyticsWidgets;

use App\Models\UserProfile;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class LanguageAnalyticsChart extends ChartWidget
{
    protected static ?string $heading = 'Претпочитани јазици';
    protected static ?int $sort = 1;

    protected function getData(): array
    {
        $data = UserProfile::select('language', DB::raw('count(*) as count'))
            ->groupBy('language')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Студенти',
                    'data' => $data->pluck('count')->toArray(),
                    'backgroundColor' => ['#194077', '#84CDF1', '#a8dff0', '#d6eef8', '#f8cf51'],
                ],
            ],
            'labels' => $data->pluck('language')->toArray(),
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
        return 'doughnut';
    }
}
