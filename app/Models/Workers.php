<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workers extends Model
{
    use HasFactory;
    protected  $fillable=[
        'Role',
        'CIN',
        'Date_Start',
        'Nom',
        'Prenom',
        'Phone',
        'mail',
        'ID_Center'
    ];
}
