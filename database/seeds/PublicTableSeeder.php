<?php

use Illuminate\Database\Seeder;

use App\Entities\PublicTarget;

class PublicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        PublicTarget::create([
            'name' => 'juvenil'
        ]);
    }
}
