<?php

namespace Database\Factories;

use App\Models\Notif;
use Illuminate\Database\Eloquent\Factories\Factory;

class NotifFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Notif::class;

    public function definition()
    {
        return [
          'title' => $this->faker->sentence(mt_rand(2,8)),
          'slug' => $this->faker->slug(),
          'excerpt' => $this->faker->paragraph(),
          // 'body' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))) . '</p>',
          'body' => collect($this->faker->paragraphs(mt_rand(5,10)))
                        ->map(fn($p)=> "<p>$p</p>")
                        ->implode(''),
          'user_id' => mt_rand(1,3),
          'category_id' => mt_rand(1,2)
        ];
    }
}
