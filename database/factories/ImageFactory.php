<?php

namespace Database\Factories;

use App\Models\Image;
use Facade\FlareClient\Stacktrace\File;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [

        'url' => 'posts/'. $this->faker->image(public_path('storage/posts'), 640, 480, null, false)

        ];
       
    }
}
