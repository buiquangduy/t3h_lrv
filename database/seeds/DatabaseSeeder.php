<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = [
            ['name' => 'admin', 'email' => 'admin@t-master.com', 'password'=> Hash::make('admin123')],
            ['name' => 'Ryan giggs', 'email' => 'someone1@t-master.com', 'password'=> Hash::make('admin123')],
            ['name' => 'Ruby on rails', 'email' => 'someone2@t-master.com', 'password'=> Hash::make('admin123')],
            ['name' => 'python', 'email' => 'someone3@t-master.com', 'password'=> Hash::make('admin123')]
        ];

        foreach($users as $user){
            User::create($user);
        }
        Model::reguard();
    }
}
