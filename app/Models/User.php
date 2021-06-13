<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

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

    public function tweets () {
        return $this->hasMany(User::class, 'tweets');
    }

    public function timeline () {
      $followids = $this->follow->pluck('id');

      return Tweet::where('user_id', $followids)->latest()->get();

    }

    //saves the followers
    public function follower (User $user) {
        return $this->follow()->save($user);
    }

    //A user can follow many users
    public function follow () {
        return $this->BelongsToMany(User::class, 'follows', 'user_id','following_user_id');
    }

    //get route by name
    public function getRouteKeyName()
    {
        return 'name';
    }
}
