<?php

use Illuminate\Database\Seeder;

class ProprieteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Proprietes::class, 12)->create();
    }
}
