<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
class CustomizeDB extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'Custom:Customizedb {table : Name of the table you want to modify} {new : New name of the table}';

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
        $table_name = $this->argument('table');
        $new_table  = $this->argument('new');
        $cnfrm = $this->confirm("Are you sure you want to continue");
        if($cnfrm)
        {
        DB::statement("ALTER TABLE $table_name RENAME TO $new_table");
        $this->info("Table renamed SuccessFully");
        }
        else
        {
            $this->error("No Opertaion performed");
        }
    }
}
