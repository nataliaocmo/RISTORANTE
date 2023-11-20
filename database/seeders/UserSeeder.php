<?php

namespace Database\Seeders;

use App\Http\Controllers\UserController;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Asegúrate de que esta línea esté presente

class UserSeeder extends Seeder
{
    public function run()
    {
        // Tu código de siembra aquí
        DB::table('users')->insert([
            'name' => "",
            'email' => "",
            'address' => "",
            'password' => "",
        ]);
        this.UserController();
    }
}
