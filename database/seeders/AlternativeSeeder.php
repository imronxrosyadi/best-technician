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
            'name' => 'Karyawan 1'
        ]);

        Alternative::create([
            'name' => 'Karyawan 2'
        ]);

        Alternative::create([
            'name' => 'Karyawan 3'
        ]);

        Alternative::create([
            'name' => 'Karyawan 4'
        ]);

        Alternative::create([
            'name' => 'Karyawan 5'
        ]);

        Alternative::create([
            'name' => 'Karyawan 6'
        ]);

        Alternative::create([
            'name' => 'Karyawan 7'
        ]);

        Alternative::create([
            'name' => 'Karyawan 8'
        ]);

        Alternative::create([
            'name' => 'Karyawan 9'
        ]);

        Alternative::create([
            'name' => 'Karyawan 10'
        ]);
    }
}
