<?php

namespace Database\Seeders;

use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'nama' => 'pustakawan',
            'email' => 'pustakawan@unsur.ac.id',
           ])->assignRole('pustakawan');
    
        User::factory()->create([
            'nama' => 'mahasiswa',
            'email' => 'mahasisawa@unsur.ac.id',
           ])->assignRole('nahasisawa');
    
    }
}
