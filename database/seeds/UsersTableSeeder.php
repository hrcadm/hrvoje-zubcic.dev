<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    // TODO: Remove this class before production!
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Hrvoje Zubcic',
            'email' => 'admin@admin.hr',
            'password' => bcrypt('test')
        ]);
    }
}
