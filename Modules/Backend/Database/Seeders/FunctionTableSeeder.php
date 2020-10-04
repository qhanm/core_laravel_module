<?php

namespace Modules\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class FunctionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $listFunctions = [
            ['id' => 1, 'code' => 'role', 'name' => 'Role', 'url' => '/role', 'icon_css' => 'bx bx-store', 'sort_order' => 1, 'parent_id' => 0],
            ['id' => 2,'code' => 'role_list', 'name' => 'List', 'url' => '/role/list', 'icon_css' => 'bx bx-store', 'sort_order' => 1, 'parent_id' => 1],
            ['id' => 3,'code' => 'role_create', 'name' => 'Create', 'url' => '/role/create', 'icon_css' => 'bx bx-store', 'sort_order' => 1, 'parent_id' => 1],
            ['id' => 4,'code' => 'user', 'name' => 'User', 'url' => '/user', 'icon_css' => 'bx bx-store', 'sort_order' => 1, 'parent_id' => 0],
            ['id' => 5,'code' => 'user_list', 'name' => 'List', 'url' => '/user/list', 'icon_css' => 'bx bx-store', 'sort_order' => 1, 'parent_id' => 4],
            ['id' => 6,'code' => 'user_create', 'name' => 'Create', 'url' => '/user/create', 'icon_css' => 'bx bx-store', 'sort_order' => 1, 'parent_id' => 4],
        ];

        $role = Role::findByName('superadmin');

        foreach($listFunctions as $listFunction)
        {
            DB::table('functions')->insert($listFunction);

        }
        // $this->call("OthersTableSeeder");
    }
}
