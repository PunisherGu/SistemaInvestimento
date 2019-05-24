<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        User::create([
            'cpf'           =>'12135404616',
            'name'          =>'Gustavo',
            'phone'         =>'38998845063',
            'birth'         =>'1994-08-16',
            'gender'        =>'M',
            'email'         =>'gustavoasnogueira@gmail.com',
            'password'      =>bcrypt('167943'),
        ]);
    }
}
