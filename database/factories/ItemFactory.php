<?php

namespace Database\Factories;

use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $laptop = [
            'Laptop Gaming', 'Laptop kantor', 'Laptop sekolah','Laptop Editing'
        ];
        $brand = [
            'Asus', 'Lenovo', 'Macbook','Dell', 'Toshiba'
        ];

        return [
            'item_name' => fake()->randomElement($laptop) . '-' . fake()->randomElement($brand), //Laptop gaming - Asus
            'stok' => random_int(0, 100),
            'condition' => fake()->randomElement(['good', 'broke', 'maintenance']),
            'uuid' => Str::uuid7(),
            'desc' => fake()->realText()
        ];
    }
}
