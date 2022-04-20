<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminDetails extends Model
{
    use HasFactory;
    protected $table = 'admin_details';
    protected $fillable = ['company_name','address','phone','city','state','post_code'];
}
