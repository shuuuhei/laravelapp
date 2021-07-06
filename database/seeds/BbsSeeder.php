<?php

use Illuminate\Database\Seeder;

class BbsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        \Illuminate\Support\Facades\DB::table('bbs')->truncate();

        DB::table('bbs')->insert([
          [
                'user_id' => 2,
                'title' => 'title1',
                'body' => 'body1',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ],
            [
                'user_id' => 2,
                'title' => 'title2',
                'body' => 'body2',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ],
            [
                'user_id' => 2,
                'title' => 'title3',
                'body' => 'body3',
                'created_at' => '2018-06-10 21:07:31',
                'updated_at' => '2018-06-10 21:07:31'
            ]
        ]);
    }
}
