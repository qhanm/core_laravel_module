<?php

namespace Modules\Backend\Entities;

use Illuminate\Foundation\Auth\User as Authentication;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package Modules\Backend\Http\Middleware
 * @property string $email
 * @property string $password
 */
class User extends Authentication
{
    use HasRoles;

    protected $table = 'users';

    protected $fillable = [
        'email',
        'username',
        'password',
        'remember',
    ];
}
