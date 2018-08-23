<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens,Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * 配合passport做API登录方式的切换（邮箱或手机）
     * @param $username
     * @return \Illuminate\Database\Eloquent\Model|null|static
     */
    public function findForPassport($username)
    {
        $param = match_email_phone($username);

        return User::query()->where($param, $username)->first();
    }
}
