<?php

namespace Database\Seeders;

use App\Models\Feature;
use Illuminate\Database\Seeder;

class FeatureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Feature::create([
            'heading' => 'Laptop',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'button' => 'laptop.php',
        ]);
        Feature::create([
            'heading' => 'Komputer',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'button' => 'komputer.php',
        ]);
        Feature::create([
            'heading' => 'Proyektor',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'button' => 'proyektor.php',
        ]);
        Feature::create([
            'heading' => 'Kamera',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'button' => 'kamera.php',
        ]);
        Feature::create([
            'heading' => 'Monitor',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'button' => 'monitor.php',
        ]);
        Feature::create([
            'heading' => 'Tablet',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.',
            'button' => 'tablet.php',
        ]);
    }
}
