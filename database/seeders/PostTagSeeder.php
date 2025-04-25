<?php

namespace Database\Seeders;

use App\Models\PostTag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $post_tags = [
            [
                'post_id' => 1,
                'tag_id' => 1,
            ],
            [
                'post_id' => 1,
                'tag_id' => 2,
            ],
            [
                'post_id' => 2,
                'tag_id' => 1,
            ],
            [
                'post_id' => 3,
                'tag_id' => 3,
            ],
            [
                'post_id' => 4,
                'tag_id' => 3,
            ],
            [
                'post_id' => 4,
                'tag_id' => 2,
            ],
        ];
        foreach ($post_tags as $tag) {
            PostTag::updateOrCreate($tag);
        }
    }
}
