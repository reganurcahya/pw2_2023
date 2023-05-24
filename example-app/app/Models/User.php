<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $users = [
        [
            'no' => 1,
            'nama' => 'niko',
            'username' => 'niko',
            'password' => 1111111,
            'email' => 'nikoardiansyah@gmail.com',
            'role' => 'INA',
        ],
        [
            'no' => 2,
            'nama' => 'Nabil',
            'username' => 'nabil',
            'password' => 11111112,
            'email' => 'mnabil@gmail.com',
            'role' => 'INA',
        ],
        [
            'no' => 3,
            'nama' => 'rega',
            'username' => 'Rega',
            'password' => 87654321,
            'email' => 'rega15@gmail.com',
            'role' => 'INA',
        ],
        
    ];

    public function getAllUsers()
    {
        return $this->users;
    }
}
