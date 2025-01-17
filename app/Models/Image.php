<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $table = 'profile_image';

    protected $fillable = [
        'user_id',
        'image_data',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
