<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tags;
class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = new Tags();
        $tags->tag1 = env('Tag1', 'Tabby');
        $tags->tag2 = env('Tag2', 'Feral');
        $tags->tag3 = env('Tag3', 'Domesticated');

    }
}

