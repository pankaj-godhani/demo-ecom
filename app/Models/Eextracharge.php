<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eextracharge extends Model
{
    use HasFactory;
    public $table = 'eextracharges';
    public $fillable = ['extracharge'];
}
