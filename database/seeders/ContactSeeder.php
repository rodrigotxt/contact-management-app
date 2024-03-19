<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use \App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Contact::factory(10)->create();
    }
}
