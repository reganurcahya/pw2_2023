<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $reviews = [
        [
            'no' => 1,
            'film' => '2012',
            'user' => 'niko',
            'rating' => 9.0,
            'review' => 'menegangkan',
        ],
        [
            'no' => 2,
            'film' => 'hitori no shita',
            'user' => 'nabil',
            'rating' => 9.5,
            'review' => 'seru dan menarik',
        ],
        [
            'no' => 3,
            'film' => 'evil dead rise',
            'user' => 'Rega',
            'rating' => 9.0,
            'review' => 'menegangkan dan serem bat',
        ],
        [
            'no' => 4,
            'film' => 'fast X ',
            'user' => 'sayid',
            'rating' => 9.1,
            'review' => 'seru banget',
        ],
    ];

    public function getAllReviews()
    {
        return $this->reviews;
    }
}
