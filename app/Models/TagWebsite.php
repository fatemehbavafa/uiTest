<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TagWebsite extends Model
{
    use HasFactory;
    protected $table='tag_website';
    protected $fillable=['tag_id','website_id'];
}
