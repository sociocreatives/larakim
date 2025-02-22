<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertise extends Model
{
    use HasFactory;
    protected $table = 'expertise';
    public $timestamps = false;
    protected $fillable = ['title', 'body'];
}
