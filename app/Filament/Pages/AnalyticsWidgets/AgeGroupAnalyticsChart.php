<?php

namespace App\Filament\Pages\AnalyticsWidgets;

use App\Models\UserProfile;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class AgeGroupAnalyticsChart extends ChartWidget
{
    protected static ?string $heading = 'Возрасни групи';
    protected static ?int $sort = 2;

    protected function getData(): array
    {
        $data = UserProfile::select('age_group', DB::raw('count(*) as count'))
            ->groupBy('age_group')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Апликации',
                    'data' => $data->pluck('count')->toArray(),
                    'backgroundColor' => '#194077',
                ],
            ],
            'labels' => $data->pluck('age_group')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'bar';
    }
}
