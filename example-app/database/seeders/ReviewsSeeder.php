<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Review::create([
                'no' => 1,
                'film' => 'god of war',
                'user' => 'Fauzan',
                'rating' => 9.0,
                'review' => 'good.',
            
        ]);
        Review::create([
                'no' => 2,
                'film' => 'The God Father',
                'user' => 'nabil',
                'rating' => 9.5,
                'review' => 'seru bngt',
            
        ]);
        Review::create([
                'no' => 3,
                'film' => 'hitori no shita',
                'user' => 'Rega',
                'rating' => 9.0,
                'review' => 'keren',
            
            
        ]);
        Review::create([
                'no' => 4,
                'film' => 'Jujutsu Kaisen  0',
                'user' => 'Sumbul',
                'rating' => 9.1,
                'review' => 'Yuta kece parah',
           
        ]);
        Review::create([
                'no' => 5,
                'film' => 'One Pice',
                'user' => 'enzy',
                'rating' => 9.3,
                'review' => 'Sangat keren',
            
        ]);

    }
}
