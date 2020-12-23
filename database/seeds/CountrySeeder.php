<?php

use Illuminate\Database\Seeder;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('countries')->insert([
            [
              'country_name' => 'Saudia',
              'country_shortcode' => 'sa',
            ],
            [
              'country_name' => 'United Arab Emirates',
              'country_shortcode' => 'ae',
            ],
            ]);
        
    }
}
