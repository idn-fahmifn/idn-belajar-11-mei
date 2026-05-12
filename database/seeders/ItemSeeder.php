<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //kita buatkan sebuah objek untuk mengirim data ke database.

        // panggil model

        // Item::create([
        //     'item_name' => 'Laptop Macbook Pro 2023',
        //     'stok' => 30,
        //     'condition' => 'good',
        //     'uuid' => Str::uuid7(),
        //     'desc' => 'Laptop spek gahar digunakan untuk ngoding dan desain'
        // ]);

        Item::factory()->count(100)->create();
    }
}
