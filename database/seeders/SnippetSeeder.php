<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Snippet;
use App\Models\User;

class SnippetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Snippet::factory()->count(3)->forUser()->hasTags(2)->create();
        Snippet::factory()->count(2)->forUser()->create();
        Snippet::factory()->count(1)->forUser()->hasTags(3)->create();
        Snippet::factory()->count(2)->forUser()->create();
        Snippet::factory()->count(3)->forUser()->hasTags(1)->create();
    }
}
