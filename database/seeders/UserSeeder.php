<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new \App\Models\User;

        $user = $user::firstOrNew([
            'name' => 'Rodrigo Martins',
            'email' => 'contato@rodrigo.inf.br'
            ]);
        $user->password = bcrypt('123456');
        $user->save();
    }
}
