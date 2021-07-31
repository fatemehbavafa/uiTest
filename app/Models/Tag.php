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
        return $this->belongsToMany(User::class);
    }

    public function websites()
    {
        return $this->belongsToMany(Website::class);
    }

    public function questions()
    {
        return $this->belongsToMany(Question::class);
    }
}
