<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AppDownloadsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('app_downloads')->delete();
        
        \DB::table('app_downloads')->insert(array (
            0 => 
            array (
                'appstore_url' => 'https://apps.apple.com',
                'created_at' => '2023-10-12 11:43:01',
                'description' => NULL,
                'id' => 1,
                'playstore_url' => 'https://play.google.com',
                'provider_appstore_url' => 'https://apps.apple.com',
                'provider_playstore_url' => 'https://play.google.com',
                'title' => 'Play Store And App Store Url',
                'updated_at' => '2023-10-12 11:43:01',
            ),
        ));
        
        
    }
}