<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $posts = [
            [
                'meta_title' => 'meta_title',
                'meta_keyword' => 'meta_keyword',
                'meta_description' => 'meta_description',
                'title' => 'title',
                'image' => 'https://www.postplanner.com/hubfs/how%20to%20write%20a%20facebook%20post.jpg',
                'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category_id' => 1,
                'user_id' => 1,
                'views' => 0,
            ],
            [
                'meta_title' => 'meta_title',
                'meta_keyword' => 'meta_keyword',
                'meta_description' => 'meta_description',
                'title' => 'title',
                'image' => 'https://www.postplanner.com/hubfs/how%20to%20write%20a%20facebook%20post.jpg',
                'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category_id' => 2,
                'user_id' => 1,
                'views' => 0,
            ],
            [
                'meta_title' => 'meta_title',
                'meta_keyword' => 'meta_keyword',
                'meta_description' => 'meta_description',
                'title' => 'title',
                'image' => 'https://www.postplanner.com/hubfs/how%20to%20write%20a%20facebook%20post.jpg',
                'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category_id' => 3,
                'user_id' => 1,
                'views' => 0,
            ],
            [
                'meta_title' => 'meta_title',
                'meta_keyword' => 'meta_keyword',
                'meta_description' => 'meta_description',
                'title' => 'title',
                'image' => 'https://www.postplanner.com/hubfs/how%20to%20write%20a%20facebook%20post.jpg',
                'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category_id' => 4,
                'user_id' => 1,
                'views' => 0,
            ],
            [
                'meta_title' => 'meta_title',
                'meta_keyword' => 'meta_keyword',
                'meta_description' => 'meta_description',
                'title' => 'title',
                'image' => 'https://www.postplanner.com/hubfs/how%20to%20write%20a%20facebook%20post.jpg',
                'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category_id' => 5,
                'user_id' => 1,
                'views' => 0,
            ],
            [
                'meta_title' => 'meta_title',
                'meta_keyword' => 'meta_keyword',
                'meta_description' => 'meta_description',
                'title' => 'title',
                'image' => 'https://www.postplanner.com/hubfs/how%20to%20write%20a%20facebook%20post.jpg',
                'description' => 'It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum',
                'category_id' => 6,
                'user_id' => 1,
                'views' => 0,
            ],
        ];


        foreach ($posts as $key => $post) {

            Post::updateOrCreate($post);
        }
    }
}
