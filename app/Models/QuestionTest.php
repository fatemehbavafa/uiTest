<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionTest extends Model
{
    use HasFactory;
    protected $table='question_test';
    protected $fillable=['question_id','test_id'];
}
