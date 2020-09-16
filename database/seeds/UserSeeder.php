<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $this->adminTableSeeds();
    }
    private function adminTableSeeds()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email'  => 'admin@gmail.com',
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'role' => 'admin',
            /*
            'email'      => env('MAIL_USERNAME'),
            'password'   => env('MAIL_PASSWORD'),
            'phone'      => env('SCHOOL_ADMIN_CONTACT'),
            */
        ]);
    }
}
