<?php
namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Admin extends Authenticatable {
    use HasApiTokens, HasFactory, Notifiable, TwoFactorAuthenticatable;
    protected $fillable = ['name','username','email','phone_number','password','super_admin','status'];
    protected $hidden = ['password','remember_token', 'two_factor_secret','two_factor_recovery_codes','two_factor_confirmed_at',];

    public function profile(): HasOne {
        return $this->hasOne(AdminProfile::class, 'admin_id', 'id')->withDefault();
    }
}