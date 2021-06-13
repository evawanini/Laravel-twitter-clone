<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class follow extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'following_user_id'];

    public function user()
    {
        return $this->BelongsToMany(User::class, 'follows', 'user_id', 'following_user_id');
    }
}
