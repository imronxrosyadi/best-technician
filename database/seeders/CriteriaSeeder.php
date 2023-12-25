<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Criteria;

class CriteriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Criteria::create([
            'name' => 'Pemahaman'
        ]);

        Criteria::create([
            'name' => 'Kemampuan'
        ]);

        Criteria::create([
            'name' => 'Kepribadian'
        ]);

        Criteria::create([
            'name' => 'Absensi'
        ]);

        Criteria::create([
            'name' => 'Kerja Sama'
        ]);
    }
}
