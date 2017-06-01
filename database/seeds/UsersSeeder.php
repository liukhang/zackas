<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
			'username'=> 'anh',
            'password'=> bcrypt('1212123'),
            'email'=>'abc@gmail.com',
            'firstname'=>'adadadadada',
            'phone'=>'0135685489',
            'address'=>'hanoi',
            'level'=> '1',
		]);
    }
}
