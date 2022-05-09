<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cessacao extends Model
{
    protected $table = 'cessacao';
    protected $primaryKey = 'id_cessacao';
    public $timestamps = FALSE;
    
    use HasFactory;
}
