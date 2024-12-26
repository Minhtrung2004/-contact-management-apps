<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Staff;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        // Tạo admin
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        // Lấy danh sách tất cả các Staff
        $staffMembers = Staff::all();

        // Tạo 5 user, mỗi user liên kết với 1 staff
        User::factory()->count(5)->create([
            'staff_id' => function () use (&$staffMembers) {
                // Lấy ra một staff từ danh sách và xóa nó khỏi danh sách
                $staff = $staffMembers->shift();
                return $staff->id;
            },
            'role' => 'staff',
            'password' => Hash::make('password'), // Mật khẩu mặc định là 'password'
        ]);
    }
}
