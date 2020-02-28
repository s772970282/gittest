<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    //1用户模型关联表
    public $table = 't_user';
    //表2的主键
    public $primaryKey = 'id';
    /**
     * The attributes that are mass assignable.
     *3允许字段
     * @var array
     */
    protected $fillable = [
        'username', 'password',
    ];
    //4禁用时间戳 不填写会自动填充表里 create_at 和 updated_at
    public $timestamps = false;
    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
