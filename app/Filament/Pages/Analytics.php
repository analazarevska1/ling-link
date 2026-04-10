<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Analytics extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-chart-bar';
    protected static ?string $navigationLabel = 'Аналитика';
    protected static ?string $title = 'Аналитика на персонализација';
    protected static ?string $navigationGroup = 'Извештаи';

    protected static string $view = 'filament.pages.analytics';

    protected function getHeaderWidgets(): array
    {
        return [
            \App\Filament\Pages\AnalyticsWidgets\LanguageAnalyticsChart::class,
            \App\Filament\Pages\AnalyticsWidgets\LevelAnalyticsChart::class,
            \App\Filament\Pages\AnalyticsWidgets\AgeGroupAnalyticsChart::class,
            \App\Filament\Pages\AnalyticsWidgets\MotivationAnalyticsChart::class,
        ];
    }

    public function getHeaderWidgetsColumns(): int | array
    {
        return 2;
    }
}
