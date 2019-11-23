<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'post_id' => '1',
            'comment' => "Hello this is bad",
            'created_at' => Carbon::now(),

        ]);
        DB::table('comments')->insert([
            'post_id' => '1',
            'comment' => "secend comment for one id post ",
            'created_at' => Carbon::now(),

        ]);
        DB::table('comments')->insert([
            'post_id' => '1',
            'comment' => "third comment for one id post  this is bad",
            'created_at' => Carbon::now(),

        ]);


    }
}
