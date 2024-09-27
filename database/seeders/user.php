<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Seeder;

class user extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        ModelsUser::factory()->create([
            'name' => 'Test User',
            'email' => 'test@exam.com',
            'password' => 'test123',
            'address' => 'test123',
            'jobTitle' => 'test123',

        ]);
    }
}
