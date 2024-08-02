<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
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


        User::create([
            'name' => 'admin',
            'email' => 'admin@digintal.com',
            'password' => bcrypt('admin'),
            'phone' => '+212 600000010',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ])->assignRole($admin);

        User::create([
            'name' => 'manager',
            'email' => 'manager@digintal.com',
            'password' => bcrypt('manager'),
            'phone' => '+212 600000020',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ])->assignRole($manager);

        User::create([
            'name' => 'particulier',
            'email' => 'particulier@digintal.com',
            'password' => bcrypt('particulier'),
            'phone' => '+212 600000030',
            'sellerType' => $particulier,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ])->assignRole($particulier);

        User::create([
            'name' => 'professionnel',
            'email' => 'professionnel@digintal.com',
            'password' => bcrypt('professionnel'),
            'phone' => '+212 600000040',
            'sellerType' => $professionnel,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ])->assignRole($professionnel);
    }
}
