<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Alternative;

class AlternativeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Alternative::create([
            'name' => 'Dendy Safrudin'
        ]);

        Alternative::create([
            'name' => 'Ahmad Rivaldi'
        ]);

        Alternative::create([
            'name' => 'Budi Gunawan'
        ]);

        Alternative::create([
            'name' => 'Fauzi Fahrul'
        ]);

        Alternative::create([
            'name' => 'Farhandika'
        ]);
    }
}
