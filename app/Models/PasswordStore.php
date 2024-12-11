<?php

namespace App\Models;

use App\Models\VaultUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PasswordStore extends Model
{
    use HasFactory;

    protected $table = 'password_stores';

    protected $fillable = ['user_id', 'title', 'password'];

public function user()
{
    return $this->belongsTo(VaultUser::class, 'user_id');
}
}
