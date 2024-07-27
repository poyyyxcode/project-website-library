<?php

namespace App\Console;

use App\Models\Buku;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {
            $bukusHaveDeadline = Buku::whereNotNull('deadline')->get();
            foreach ($bukusHaveDeadline as $bukuHaveDeadline){
                $bukuHaveDeadline->check_is_deadline();
            }
        })->everyHour();
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
