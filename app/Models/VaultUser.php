<?php
namespace App\Models;

use App\Models\PasswordStore;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class VaultUser extends Authenticatable
{
    use Notifiable;

    protected $table = 'vault_users';

    protected $fillable = ['name', 'last_name', 'email', 'password'];

    protected $hidden = ['password'];

    protected $casts = [
        'password' => 'hashed',
    ];

    public function passwordStores()
{
    return $this->hasMany(PasswordStore::class, 'user_id');
}

}
