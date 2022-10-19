<?php

namespace App\Console;

use App\Console\Commands\borrarDatos;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Database\Eloquent\Prunable;
//use App\Console\Commands\afterAt;


class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */

     protected $commands = [borrarDatos::class];//borrar datos de hace 3 años y llenar tablas

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('borrar:datos')->everyMinute();//borrar datos de hace 3 años y llenar tablas cada minuto
        
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
