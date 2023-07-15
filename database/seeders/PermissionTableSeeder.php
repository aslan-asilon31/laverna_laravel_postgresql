<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        {
            $permissions = [
                'user-list',
                'user-create',
                'user-edit',
                'user-delete',
                'category-list',
                'category-create',
                'category-edit',
                'category-delete',
                'package-list',
                'package-create',
                'package-edit',
                'package-delete',
                'menu-list',
                'menu-create',
                'menu-edit',
                'menu-delete',
                'order-list',
                'order-create',
                'order-edit',
                'order-delete',
                'payment-list',
                'payment-create',
                'payment-edit',
                'payment-delete',
                'reservation-list',
                'reservation-create',
                'reservation-edit',
                'reservation-delete',
                'hotel-list',
                'hotel-create',
                'hotel-edit',
                'hotel-delete',
                'permission-list',
                'permission-create',
                'permission-edit',
                'permission-delete',
                'role-list',
                'role-create',
                'role-edit',
                'role-delete',
             ];
     
             foreach ($permissions as $permission) {
                  Permission::create(['name' => $permission]);
             }
        }
    }
}
