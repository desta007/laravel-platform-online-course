<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // membuat role
        // membuat default user super admin

        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $studentRole = Role::create([
            'name' => 'student'
        ]);

        $teacherRole = Role::create([
            'name' => 'teacher'
        ]);

        // akun superadmin
        $userOwner = User::create([
            'name' => 'Admin',
            'occupation' => 'Entrepreneur',
            'avatar' => 'images/default-avatar.png',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('12345678')
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
