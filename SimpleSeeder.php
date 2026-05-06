<!-- Command Send DATA in DATABASE -->
php artisan db:seed --class=SimpleSeeder

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Article::create([
            "title" => "Header. Happiness is near",
            "content" => "Description. I woke up happy! Smile. Cat. Soft pillow. Hooray!",

        ]);
    }
}
