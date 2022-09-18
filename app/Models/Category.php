<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    /**
     * @var string
     */
    protected $table = 'categories';

    /**
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'featured', 'status',
    ];

    /**
     * @var array
     */
    protected $casts = [
        'featured' => 'boolean',
        'status'   => 'boolean',
    ];
}
