<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;

    protected $fillable = [
        'Typeblood',
        'nom',
        'Phone',
        'Prenom',
        'mail',
        'Adresse',
        'CIN',
        'ID_Center'
    ];
    protected $table = 'donors';

    public function dones()
    {
        return $this->hasMany(dones::class, 'ID_Donor');
    }

}
