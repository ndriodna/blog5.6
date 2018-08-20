<?php

use Illuminate\Database\Seeder;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\post::class, 10)->create();
    }
}
