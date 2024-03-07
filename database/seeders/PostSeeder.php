<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

//Models
use App\Models\Post;
use Nette\Schema\Helpers;

//Helpers
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Schema;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::withoutForeignKeyConstraints(function () {
            Post::truncate();
        });

        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $title = fake()->sentence();
            $slug = Str::slug($title);
            $post->title = $title;
            $post->slug = $slug;
            $post->content = fake()->paragraph();
            $post->save();

            // OPPURE

            //$titleForMassAssignmentFillable = fake()->sentence();
            //$slugForMassAssignmentFillable = Str::slug($titleForMassAssignmentFillable);
            //$postWithMassAssignmentFillable = Post::create([
            //    'title' => $titleForMassAssignmentFillable,
            //    'slug' => $slugForMassAssignmentFillable,
            //    'content' => fake()->paragraph(),
            //]);
        }
    }
}
