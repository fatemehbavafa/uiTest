<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
    protected $table='finances';
    protected $fillable=['website_id','cost','received','received_date','paid','paid_date'];
}
