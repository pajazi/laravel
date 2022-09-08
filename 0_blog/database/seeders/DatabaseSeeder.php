<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();
        Category::truncate();
        Post::truncate();

        $user = \App\Models\User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family'
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work'
        ]);


        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$personal->id,
            'title' => 'My Post',
            'slug' => 'my-post',
            'excerpt' => 'Victory Day',
            'body' => 'Victory Day (or Otto settembre) is a public holiday celebrated in Malta on 8 September[1] and recalls the end of three historical sieges made on the Maltese archipelago, namely: the Great Siege of Malta by the Ottoman Empire ending in 1565; the Siege of Valletta by the French Blockade ending in 1800; and, the Siege of Malta during the Second World War by the Axis forces ending in 1943.'
        ]);

        Post::create([
            'user_id'=>$user->id,
            'category_id'=>$family->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Personal Day Off',
            'body' => 'Victory Day (or Otto settembre) is a public holiday celebrated in Malta on 8 September[1] and recalls the end of three historical sieges made on the Maltese archipelago, namely: the Great Siege of Malta by the Ottoman Empire ending in 1565; the Siege of Valletta by the French Blockade ending in 1800; and, the Siege of Malta during the Second World War by the Axis forces ending in 1943.'
        ]);
    }
}
