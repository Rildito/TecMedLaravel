<?php

namespace App\Console;

use App\Console\Commands\DatabaseBackup;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        // $schedule->command('inspire')->hourly();
        // $schedule->command('backup:clean')->weekly()->mondays()->at('01:00');
        // $schedule->command('backup:run')->weekly()->mondays()->at('02:00');
        $schedule->command('backup:clean');
        $schedule->command('backup:run');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
