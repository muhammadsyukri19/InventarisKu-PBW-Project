<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(CommodityLocationSeeder::class);
        $this->call(CommodityAcquisitionSeeder::class);
        $this->call(CommoditySeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(PermissionSeeder::class);
        $this->call(UserRoleSeeder::class);
        $this->call(RolePermissionSeeder::class);
    }
}
