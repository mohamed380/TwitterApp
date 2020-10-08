<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\Tag;
use App\Models\Tweet;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::query()->truncate();
        User::query()->truncate();
        Tweet::query()->truncate();
        Tag::query()->truncate();
    
        Admin::factory()->count(2)->create();
        User::factory()->count(20)->create();
        Tweet::factory()->count(100)->create();
        Tag::factory()->count(20)->create();
    }
}
