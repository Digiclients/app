<?php

namespace Database\Seeders\autorisations;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::ADMIN;
        $manager = User::MANAGER;
        $particulier = User::PARTICULIER;
        $professionnel = User::PROFESSIONNEL;

        Role::create(['name' => $admin]);
        Role::create(['name' => $manager]);
        Role::create(['name' => $particulier]);
        Role::create(['name' => $professionnel]);
    }
}
