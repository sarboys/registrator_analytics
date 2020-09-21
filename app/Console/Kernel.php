<?php

namespace App\Console;
use App\Models\Deal;
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
        })->weekly()->mondays()->at('05:00');
//        $schedule->call(function () {
//            $leadID = 0;
//            $finish = false;
//            $dashboard_get = new DashboardController();
//            $date_from = $dashboard_get->getDataWeek('last_week_monday').'T09:00';
//            $date_to = $dashboard_get->getDataWeek('last_week_sunday').'T18:00';
//
//            while (!$finish) {
//                sleep(5);
//                $response = Http::post('https://portal.keydisk.ru/rest/896/gnird2l2jwx4a07z/crm.deal.list', [
//                    'order' => array(),
//                    'filter' => array(
//                        '>ID' => $leadID,
//                        "CATEGORY_ID" => 13,
//                        "UF_CRM_1555936928" => array(5060,5061,5220),
//                        "UF_CRM_1515649548" => array('Астрал-М ЦП','ОПС ЭДО','Астрал СПБ ЦП','Калуга Астрал ЦП','ОП в Новосибирске ЦП','ОП в Омске ЦП','ОП в Уфе ЦП','ОП в Саратове ЦП','ОП в Воронеже ЦП','ОП в Томске ЦП'),
//                        ">=DATE_CREATE" => $date_from,
//                        "<=DATE_CREATE" => $date_to
//                    ),
//                    'select' => array('*','UF_*'),
//                    'start' => -1
//                ]);
//
//                $res = json_decode($response, true);
//                if (count($res['result']) > 0)
//                {
//                    foreach ($res['result'] as $lead)
//                    {
//                        $leadID = $lead['ID'];
//                        $deal = new Deal();
//                        $deal->id_deal = $lead['ID'];
//                        $deal->title = $lead['TITLE'];
//                        $deal->time = $lead['UF_CRM_1555936928'];
//                        $deal->date_from = $date_from;
//                        $deal->date_to = $date_to;
//                        $deal->remark = $lead['UF_CRM_1515649548'];
//                        $deal->save();
//                    }
//                }
//                else
//                {
//                    $finish = true;
//                }
//            }
//        })->everyMinute();
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
