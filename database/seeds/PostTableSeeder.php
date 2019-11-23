<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;


class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            'name' => 'sdfsdf',
            'created_at' => Carbon::now(),
        ]);
         DB::table('posts')->insert([
            'name' => 'two ',
            'created_at' => Carbon::now(),
        ]); 
         DB::table('posts')->insert([
            'name' => 'three',
            'created_at' => Carbon::now(),
        ]);
    }
}
