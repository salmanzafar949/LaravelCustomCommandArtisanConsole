<?php

namespace App\Console\Commands;
use App\User;
use Illuminate\Console\Command;


class UsersList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'User:info';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all the registerd users';

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
        //
        $this->info("Currently Registered Users");
        $header = ['Name', 'Email'];
        $users  = User::select('name','email')->get();
        $this->table($header, $users);
    }
}
