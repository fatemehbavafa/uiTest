<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\Translation\t;

class Tag extends Model
{
    use HasFactory;
    protected $table='tags';
    protected $fillable=['parent_id','title'];

    public function testers()
    {
        return $this->belongsToMany(User::class,'tag_user');
    }

    public function websites()
    {
        return $this->belongsToMany(Website::class,'tag_website');
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class,'question_tag');
    }
}
