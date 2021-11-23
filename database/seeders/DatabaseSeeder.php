<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FeatureSeeder::class);
        $this->call(FeedbackSeeder::class);
        $this->call(KomputerSeeder::class);
        $this->call(ReviewSeeder::class);
        $this->call(SectionSeeder::class);
        $this->call(SummarySeeder::class);
    }
}
