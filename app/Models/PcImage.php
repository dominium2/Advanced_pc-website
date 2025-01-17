<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PcImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'pc_id',
        'image_path',
    ];

    public function pc()
    {
        return $this->belongsTo(Pc::class);
    }
}
