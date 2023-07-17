<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::truncate();
        Setting::factory()->createMany([
            [
                'user_id' => 1,
                'name' => 'Items per page',
                'key' => Setting::$KEY_LIST_PER_PAGE,
                'value' => env(Setting::$KEY_LIST_PER_PAGE, 50)
            ],
            [
                'user_id' => 1,
                'name' => 'Search items per page',
                'key' => Setting::$KEY_SEARCH_PER_PAGE,
                'value' => env(Setting::$KEY_SEARCH_PER_PAGE, 50)
            ],
            [
                'user_id' => 1,
                'name' => 'API per page',
                'key' => Setting::$KEY_API_PER_PAGE,
                'value' => env(Setting::$KEY_API_PER_PAGE, 20)
            ],
            [
                'user_id' => 1,
                'name' => 'DB Datetime Format',
                'key' => Setting::$KEY_DB_DT_FORMAT,
                'value' => env(Setting::$KEY_DB_DT_FORMAT, 'Y-m-d H:i:s')
            ],
            [
                'user_id' => 1,
                'name' => 'System Datetime Format',
                'key' => Setting::$KEY_SYSTEM_DT_FORMAT,
                'value' => env(Setting::$KEY_SYSTEM_DT_FORMAT, 'd M Y H:i:s')
            ],
            [
                'user_id' => 1,
                'name' => 'DB Date Format',
                'key' => Setting::$KEY_DB_DATE_FORMAT,
                'value' => env(Setting::$KEY_DB_DATE_FORMAT, 'Y-m-d')
            ],
            [
                'user_id' => 1,
                'name' => 'System Date Format',
                'key' => Setting::$KEY_SYSTEM_DATE_FORMAT,
                'value' => env(Setting::$KEY_SYSTEM_DATE_FORMAT, 'd M Y')
            ],
            [
                'user_id' => 1,
                'name' => 'Year Format',
                'key' => Setting::$KEY_YEAR_FORMAT,
                'value' => env(Setting::$KEY_YEAR_FORMAT, 'Y')
            ],
            [
                'user_id' => 1,
                'name' => 'Mail From Address',
                'key' => Setting::$KEY_MAIL_FROM_ADDRESS,
                'value' => env(Setting::$KEY_MAIL_FROM_ADDRESS, '')
            ],
            [
                'user_id' => 1,
                'name' => 'Mail From Name',
                'key' => Setting::$KEY_MAIL_FROM_NAME,
                'value' => env(Setting::$KEY_MAIL_FROM_NAME, '')
            ],
        ]);
    }
}
