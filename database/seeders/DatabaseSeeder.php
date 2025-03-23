<?php
namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'tesst@example.com',
            'password' => Hash::make('12345678'), // تشفير كلمة المرور
        ]);
    }
}