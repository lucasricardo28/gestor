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
            'name' => 'Infanto'
        ]);

        PublicTarget::create([
            'name' => 'Juvenil'
        ]);

        PublicTarget::create([
            'name' => 'Masculino'
        ]);

        PublicTarget::create([
            'name' => 'Feminino'
        ]);

        PublicTarget::create([
            'name' => 'Classe Média'
        ]);

        PublicTarget::create([
            'name' => 'Mora Longe'
        ]);

        PublicTarget::create([
            'name' => 'Entre 10 e 20 anos'
        ]);

        PublicTarget::create([
            'name' => 'Entre 21 e 30 anos'
        ]);

        PublicTarget::create([
            'name' => 'Entre 31 e 50 anos'
        ]);

        PublicTarget::create([
            'name' => ' Altos'
        ]);

        PublicTarget::create([
            'name' => 'Baixos'
        ]);
    }
}
