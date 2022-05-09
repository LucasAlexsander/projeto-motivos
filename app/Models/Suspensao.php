<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suspensao extends Model
{
    protected $table = 'suspensao';
    protected $primaryKey = 'id_suspensao';
    public $timestamps = FALSE;
    
    use HasFactory;
}
