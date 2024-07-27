<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'slug' => 'how-to-read-a-book',
            'title' => 'How to Read a Book',
            'deskripsi_singkat' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem sint non at quos laboriosam reprehenderit hic, quisquam aspernatur. Hic quia aperiam est et totam consequuntur assumenda tempore dolorem numquam facere?',
            'category' => 'Non Fiksi',
            'ketersediaan' => true,
            'isbn' => '132vbfd432',
        ];
    }
}
