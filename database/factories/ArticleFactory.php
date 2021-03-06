<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Article;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title = $this->faker->sentence(10);
        return [
            'user_id' => 1,
            'category_id' => rand(1,10),
            'title' => $title,
            'slug' => \Str::slug($title),
            'thumbnail' => 'img/bandre.jpg',
            'text' => $this->faker->paragraph(15)
        ];
    }
}
