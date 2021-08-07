<?php

namespace App\Models;

use App\Traits\JqGrid;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='users';
    protected $fillable = ['first_name','last_name','username','password','email','ssn','phone','gender','token'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class,'tag_user');
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class,'role_user');
    }

    public function websites()
    {
        return $this->hasMany(Website::class);
    }

    public function tests()
    {
        $this->belongsToMany(Test::class,'test_tester');
    }
    public function scopeEmployers($query)
    {
        return $query->whereHas('roles', function ($que) {
            $que->where('title', 'employer');
        });
    }

}
