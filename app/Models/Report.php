<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;

    protected $table = 'reports';
    protected $primaryKey = 'id';
    public $incrementing = true;
    protected $attributes = [];
    protected $fillable = [];
    protected $hidden = [];
    public static $rules = [];
}
