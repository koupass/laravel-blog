<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new \App\Admin();
        $admin->email='info@vinstruction.ir';
        $admin->password=bcrypt('test_pw');
        $admin->save();
    }
}
