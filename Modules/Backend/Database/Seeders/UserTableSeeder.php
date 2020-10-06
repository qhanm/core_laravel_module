<?php
namespace Modules\Backend\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        $limit = 200;
        for($i = 0; $i < $limit; $i++)
        {
            \Illuminate\Support\Facades\DB::table('users')->insert([
                'email' => $faker->unique()->email,
                'username' => $faker->unique()->userName,
                'password' => \Illuminate\Support\Facades\Hash::make('nam631996'),
                'name' => $faker->name,
                'avatar' => '',
                'status' => Arr::random([5, 10, 15]),
            ]);
        }
    }
}
