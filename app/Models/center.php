<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class center extends Model
{
    use HasFactory;

    protected $table = 'centers';
    protected $fillable = [
        'Nome',
        'mail',
        'Phone',
        'Ville',
        'Date_S',
        'Status'
    ];
    public function dones()
    {
        return $this->hasMany(dones::class, 'ID_Center', 'id');
    }

    public function stocks()
    {
        return $this->hasMany(stock::class, 'ID_Center', 'id');
    }

    public function Admins()
    {
        return $this->hasMany(stock::class, 'ID_Center', 'id');
    }
}
