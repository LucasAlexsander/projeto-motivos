<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reativacao extends Model
{
    protected $table = 'reativacao';
    protected $primaryKey = 'id_reativacao';
    public $timestamps = FALSE;

    protected $fillable = ['codigo, nome'];
    
    use HasFactory;
}
