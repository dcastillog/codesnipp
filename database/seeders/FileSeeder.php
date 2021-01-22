<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\File;
use App\Models\Snippet;

class FileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        File::factory()->count(3)->forSnippet(['user_id' => 1])->create();
        File::factory()->count(2)->forSnippet(['user_id' => 2])->create();
        File::factory()->count(1)->forSnippet(['user_id' => 3])->create();
    }
}