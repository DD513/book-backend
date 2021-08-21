<?php

namespace Database\Factories;

use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class bookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $factory->define(book::class,function(Faker $faker){
            return [
                'ISBN' => $this->faker->Str::random(13),
                'name' => $faker->title,
                'cover' => $faker->url,
                'author' => $faker->name,
                'created_at' => $faker->dateTime($max = 'now', $timezone = null)
            ];
        });
        
    }
}
