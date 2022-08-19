<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
//use App\Models\Admin;
use app\Models\Admin;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //use factory here to fill the data
        Admin::factory()->times(100)->create();
    }
}