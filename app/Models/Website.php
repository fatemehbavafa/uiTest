<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Website extends Model
{
    use HasFactory,Notifiable;

    protected $table = 'websites';
    protected $fillable = ['name', 'domain', 'employer_id', 'tester_count'];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag_website');
    }

    public function employer()
    {
        return $this->belongsTo(User::class);
    }

}
