<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dones extends Model
{
    use HasFactory;
    protected $table = 'dones';

    public function donor()
    {
        return $this->belongsTo(donor::class, 'ID_Donor');
    }

    public function center()
    {
        return $this->belongsTo(Center::class, 'ID_Center', 'id');
    }

}
