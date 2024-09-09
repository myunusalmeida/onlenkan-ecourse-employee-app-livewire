<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nip', 'name', 'birth_date', 'birth_place', 'phone',
        'position_id', 'join_date'
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}
