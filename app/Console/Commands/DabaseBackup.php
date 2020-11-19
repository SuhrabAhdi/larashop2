<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DabaseBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'backup:backupdb {user=Milestone}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make backup of application database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
       
       // $this->info("Congratulation, Your backup has successfully been generated");
   
    //   $username = $this->ask("Enter your username:");
    //   $pass = $this->secret("Enter your password:");
       
    //   $this->info("Your user is: $username and your password is :$pass");
   
// if($this->confirm("Would you like to continue?"))
// $this->info("Loading...");
// else
// $this->error("Disconned!");
// $this->call("route:list");
//$this->callSilent("route:list");
// $user = $this->argument('user');
// $this->info("your name $user");
//  $env =   config("app.env");
//  $this->info($env);
}
}
