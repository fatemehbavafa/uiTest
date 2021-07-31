<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    use HasFactory;
    protected $table='tests';
    protected $fillable=['website_id','result'];

    public function questions()
    {
        return $this->belongsToMany(Question::class,'question_test');
    }

    public function testers()
    {
        $this->belongsToMany(User::class,'test_tester');
    }

}
