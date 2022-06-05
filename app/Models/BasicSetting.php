<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BasicSetting extends Model
{
    use HasFactory;

    /**
     * @var array
     */
    public $casts = [
        'email_verification' => 'boolean',
    ];

    /**
     * @var string
     */
    protected $table = 'basic_settings';

    /**
     * @var array
     */
    protected $guarded = [''];
}
