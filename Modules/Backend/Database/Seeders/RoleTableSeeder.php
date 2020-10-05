<?php
namespace Modules\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\Backend\Entities\User;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            'user.list',
            'user.create',
            'user.edit',
            'user.delete',
            'role.list',
            'role.create',
            'role.edit',
            'role.delete',
            'product.list',
            'product.edit',
            'product.create',
            'product.delete',
        ];

        $role = \Spatie\Permission\Models\Role::create(['name' => 'superadmin']);
        $user = User::all()->first();

        $user->assignRole($role);
        foreach($list as $item)
        {
            $permission = \Spatie\Permission\Models\Permission::create(['name' => $item]);

            $permission->assignRole($role);
        }
    }
}
