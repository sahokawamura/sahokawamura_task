<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TaskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [[
            'title' => 'タスク1',
            'body' => 'タスク1'
        ]];

        DB::table('tasks')->insert($param);
    }
}
