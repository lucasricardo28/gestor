<?php

use Illuminate\Database\Seeder;
use App\Entities\Regional;

class RegionalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Regional::create([
            'name' => 'Regional I'
        ]);
    }
}
