<?php

namespace App\Console;

use App\Models\User;
use App\Models\Role;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

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
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        // Make user admin if he isn't. Send not found if no user found
        $this->command('make:adminuser {id}', function ($id) {
            $user = user::find($id);
            if ($user != null)
            {
                $role = role::where('slug','ADMI')->first();

                $user->role()->associate($role->id);
                $user->save();

                $this->info("{$user->pseudo} est admin");
            }
            else {
                $this->info("L’utilisateur {$id} n’existe pas");
            }
        })->purpose('Grants the admin role to a user');

        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
