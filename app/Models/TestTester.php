<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TestTester extends Model
{
    use HasFactory;
    protected $table='test_tester';
    protected $fillable=['test_id','tester_id'];
}
