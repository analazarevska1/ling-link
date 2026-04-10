<?php

namespace App\Filament\Pages\AnalyticsWidgets;

use App\Models\UserProfile;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class MotivationAnalyticsChart extends ChartWidget
{
    protected static ?string $heading = 'Мотивација за учење';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $data = UserProfile::select('motivation', DB::raw('count(*) as count'))
            ->groupBy('motivation')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Број на одговори',
                    'data' => $data->pluck('count')->toArray(),
                    'backgroundColor' => ['#84CDF1', '#194077', '#f8cf51', '#a8dff0', '#d6eef8'],
                ],
            ],
            'labels' => $data->pluck('motivation')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
