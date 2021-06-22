<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DefaultAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'default',
            'email' => 'correo@correo.test',
            'tipo' => 'admin',
            'password' => Hash::make('itzel124*'),
        ]);
    }
}
