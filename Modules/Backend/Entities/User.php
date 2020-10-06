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

    const STATUS_ACTIVE = 10;
    const STATUS_BLOCK = 5;
    const STATUS_TRASH = 15;
    const STATUS_ALL = 100;
    protected $table = 'users';

    protected $sortable = [
        'id',
        'username',
        'email',
        'name',
        'status',
        'avatar',
        'created_at',
        'updated_at'
    ];

    protected $fillable = [
        'email',
        'username',
        'password',
        'remember',
        'avatar',
        'status',
    ];

    public static function getCssStatus()
    {
        return [
            self::STATUS_ACTIVE => 'badge badge-pill badge-soft-success font-size-10',
            self::STATUS_BLOCK => 'badge badge-pill badge-soft-warning font-size-10',
            self::STATUS_TRASH => 'badge badge-pill badge-soft-danger font-size-10',
        ];
    }

    public static function getNameStatus()
    {
        return [
            self::STATUS_ALL => 'All',
            self::STATUS_ACTIVE => 'Active',
            self::STATUS_BLOCK => 'Block',
            self::STATUS_TRASH => 'Trash',
        ];
    }
}
