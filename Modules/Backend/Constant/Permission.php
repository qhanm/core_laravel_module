<?php
namespace Modules\Backend\Constant;

class Permission
{
    const USER_LIST = 'user.list';
    const USER_EDIT = 'user.edit';
    const USER_CREATE = 'user.create';
    const USER_DELETE = 'user.delete';

    const PERMISSION_USER_LIST = 'permission:user.list';

    public static function getUserSidebar()
    {
        return [
            self::USER_LIST,
            self::USER_CREATE,
        ];
    }
}
