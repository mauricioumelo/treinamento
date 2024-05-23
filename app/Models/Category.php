<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $table = 'categories';

    protected $fillable = [
        'name',
        'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
    // protected function casts(): array
    // {
    //     return [
    //         'is_active' => 'boolean',
    //     ];
    // }
}
