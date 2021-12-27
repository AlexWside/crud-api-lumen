<?php

namespace Database\Seeders;

use App\Models\Post;
use Carbon\Factory;
use Illuminate\Database\Seeder;



class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::factory()->count(10)->create();
        
    }
}
