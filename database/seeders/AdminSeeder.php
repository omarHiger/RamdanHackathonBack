<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $first_names = ['هدى', 'عمر', 'أشرف'];
        $last_names = ['شاكر', 'هيجر', 'محمد'];
        $user_name = ['huda', 'omar', 'ashraf'];

        for ($i = 0; $i < 3; $i++) {
            $youths[] = [
                'first_name' => $first_names[$i],
                'last_name' => $last_names[$i],
                'email' => $user_name[$i] . '@gmail.com',
                'password' => Hash::make('password'),
                'is_super' => rand(0, 1),
            ];
        }

        for ($i = 0; $i < 3; $i++) {
            $donors[] = [
                'first_name' => $first_names[$i],
                'last_name' => $last_names[$i],
                'email' => $user_name[$i] . '@gmail.com',
                'password' => Hash::make('password'),
            ];
        }

        DB::table('admins')->insert($youths);
        DB::table('donors')->insert($donors);
    }
}
