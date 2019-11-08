<?php

use Illuminate\Database\Seeder;

class admin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admin')->delete();
        DB::table('admin')->insert([
            ['id'=>1,'name'=>'admin','email'=>'admin@gmail.com','password'=>bcrypt('123456'),'phone'=>'0342085666','level'=>1,'status'=>1],
            ['id'=>2,'name'=>'editor','email'=>'editor@gmail.com','password'=>bcrypt('123456'),'phone'=>'0967123999','level'=>2,'status'=>1],
            ['id'=>3,'name'=>'user','email'=>'user@gmail.com','password'=>bcrypt('123456'),'phone'=>'0981188256','level'=>3,'status'=>1],
        ]);
    }
}
