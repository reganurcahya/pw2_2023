<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $genres = [
        [
            'no' => 1,
            'nama' => 'Action',
        ],
        [
            'no' => 2,
            'nama' => 'Drama'
        ],
        [
            'no' => 3,
            'nama' => 'Horror',
        ],
    ];

    public function getAllGenres()
    {
        return $this->genres;
    }
}

