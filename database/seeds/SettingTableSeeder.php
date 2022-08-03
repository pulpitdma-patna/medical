<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use App\Models\Auth\Settings;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Settings::truncate();
       Settings::create([
            'theme' => 'c',
            'font' => 'n',
            'data_theme' => 'l',
            'mode_type' => 'N',
        ]);
    }
}