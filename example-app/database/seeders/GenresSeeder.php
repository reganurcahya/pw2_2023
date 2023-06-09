<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::create([
            'nama' => 'Acrion',
            'deskripsi' => 'Action-packed movies',
        ]);

        Genre::create([
            'nama' => 'Drama',
            'deskripsi' => 'Emotional and serios themes',
        ]);

        Genre::create([
            'nama' => 'Horror',
            'deskripsi' => 'Scrary movies',
        ]);
    }
}
