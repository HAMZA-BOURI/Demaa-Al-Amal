<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class stock extends Model
{
    use HasFactory;
    public function center()
    {
        return $this->belongsTo(center::class, 'ID_Center', 'id');
    }
}
