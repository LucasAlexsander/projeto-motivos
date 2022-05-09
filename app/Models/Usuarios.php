<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    protected $table = 'users';
    protected $primaryKey = 'id_users';
    public $timestamps = FALSE;
    use HasFactory;
}
