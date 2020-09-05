<?php

namespace App\Console;
use Illuminate\Support\Facades\Http;
use App\Models\Dashboard;
use App\Models\PortalPhone;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use App\Http\Controllers\DashboardController;
class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $dashboard_get = new DashboardController();
            $phones = PortalPhone::orderBy('sort')->get();
            foreach ($phones as $phone) {
                $dashboard = new Dashboard();
                $dashboard->name = $phone->name;
                $dashboard->phone = $phone->phone;
                $dashboard->date_from = $dashboard_get->getDataWeek('last_week_monday').'T09:00';
                $dashboard->date_to = $dashboard_get->getDataWeek('last_week_sunday').'T18:00';
                $dashboard->all = $dashboard_get->AllVoix($phone);
                $dashboard->fail = $dashboard_get->FailVoix($phone);
                if($dashboard->fail != 0 && $dashboard->all != 0) {
                    $dashboard->percent = round($dashboard->fail / $dashboard->all  * 100,2);
                } else {
                    $dashboard->percent = 0;
                }
                $dashboard->save();
            }
        })->weekly()->mondays()->at('0з5:00');
//        ->everyMinute();
//    ->weekly()->mondays()->at('5:00');
        $schedule->command('config:cache')->daily();
        $schedule->command('config:clear')->daily();
        $schedule->command('cache:clear')->daily();

        // $schedule->command('inspire')->hourly();
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
