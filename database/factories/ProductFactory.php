<?php

namespace Database\Factories;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true),
            'description' => $this->faker->paragraph(),
            'pictureUrl' => $this->faker->imageUrl(640, 480, 'products', true), // Valid image URL
            'price' => $this->faker->randomFloat(2, 1, 1000), // Price between 1.00 and 1000.00
            'categoryId' => Category::factory(), // Create or associate with a category
            'htmlContent' => '<p>' . $this->faker->text(200) . '</p>', // Simple HTML content
        ];
    }
}
