<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'Prenom',
        'mail',
        'Adresse',
        'CIN',
        'UserName',
        'Sex',
        'Phone',
        'ID_Donor',
        'password',
        'Type_Blood'
    ];
}
