<?php

namespace Modules\Backend\Entities;

use Illuminate\Foundation\Auth\User as Authentication;
use Kyslik\ColumnSortable\Sortable;
use Spatie\Permission\Traits\HasRoles;

/**
 * Class User
 * @package Modules\Backend\Http\Middleware
 * @property string $email
 * @property string $password
 */
class User extends Authentication
{
    use HasRoles, Sortable;

    protected $table = 'users';

    protected $sortable = [
        'id',
        'username',
        'email',
        'name'
    ];

    protected $fillable = [
        'email',
        'username',
        'password',
        'remember',
    ];
}
