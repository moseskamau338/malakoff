<?php

namespace App\Nova\Dashboards;

use Laravel\Nova\Dashboard;

class TraficInsights extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards(): array
    {
        return [
            new TraficInsights(),
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public static function uriKey(): string
    {
        return 'trafic-insights';
    }
    /**
     * Get the displayable name of the dashboard.
     *
     * @return string
     */
    public static function label()
    {
        return 'Traffic Insights';
    }
}
