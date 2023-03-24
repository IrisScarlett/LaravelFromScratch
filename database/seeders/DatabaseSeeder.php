<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name'=>'Personal',
            'slug'=>'personal'
        ]);

        $family = Category::create([
            'name'=>'Family',
            'slug'=>'family'
        ]);

        $work = Category::create([
            'name'=>'Work',
            'slug'=>'work'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $family->id,
            'title' => 'My Family Post',
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet. Non consequatur assumenda ad voluptatem dolor sit porro voluptate quo tempora delectus aut quod galisum cum voluptatem dolor et iusto quibusdam. Id quas laboriosam eum asperiores harum ut voluptatem doloremque quo sequi vitae ea accusamus magnam in repudiandae natus id galisum asperiores. Ut asperiores natus et ratione placeat qui ipsa perferendis est rerum ullam sed atque illum non dolore totam. Et repellendus quia ut quia laborum aut doloremque commodi aut vitae itaque. </p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $work->id,
            'title' => 'My work Post',
            'slug' => 'my-work-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet. Non consequatur assumenda ad voluptatem dolor sit porro voluptate quo tempora delectus aut quod galisum cum voluptatem dolor et iusto quibusdam. Id quas laboriosam eum asperiores harum ut voluptatem doloremque quo sequi vitae ea accusamus magnam in repudiandae natus id galisum asperiores. Ut asperiores natus et ratione placeat qui ipsa perferendis est rerum ullam sed atque illum non dolore totam. Et repellendus quia ut quia laborum aut doloremque commodi aut vitae itaque. </p>'
        ]);

        Post::create([
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'title' => 'My Personal Post',
            'slug' => 'my-personal-post',
            'excerpt' => 'Lorem ipsum dolar sit amet.',
            'body' => '<p>Lorem ipsum dolor sit amet. Non consequatur assumenda ad voluptatem dolor sit porro voluptate quo tempora delectus aut quod galisum cum voluptatem dolor et iusto quibusdam. Id quas laboriosam eum asperiores harum ut voluptatem doloremque quo sequi vitae ea accusamus magnam in repudiandae natus id galisum asperiores. Ut asperiores natus et ratione placeat qui ipsa perferendis est rerum ullam sed atque illum non dolore totam. Et repellendus quia ut quia laborum aut doloremque commodi aut vitae itaque. </p>'
        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
