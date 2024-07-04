<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    protected $fillable = [
        'nom',
        'Prenom',
        'Username',
        'Password',
        'mail',
        'CIN',
        'Phone',
        'ID_Center',
        'Status'];
    use HasFactory;
    public function center()
    {
        return $this->belongsTo(Center::class, 'ID_Center', 'id');
    }
}
