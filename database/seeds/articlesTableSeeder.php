<?php

use Illuminate\Database\Seeder;

class articlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Article::class, 500)->create();
    }
}
