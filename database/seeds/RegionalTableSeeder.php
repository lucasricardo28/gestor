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
        Regional::create([
            'name' => 'Regional I'
        ]);

        Regional::create([
            'name' => 'Regional II'
        ]);

        Regional::create([
            'name' => 'Regional III'
        ]);

        Regional::create([
            'name' => 'Regional IV'
        ]);

        Regional::create([
            'name' => 'Regional V'
        ]);

        Regional::create([
            'name' => 'Regional VI'
        ]);
    }
}
