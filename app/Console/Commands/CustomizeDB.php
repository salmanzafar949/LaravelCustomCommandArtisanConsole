<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class CustomizeDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Customizedb';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'allows you to change table and column name is the db';

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
    }
}
