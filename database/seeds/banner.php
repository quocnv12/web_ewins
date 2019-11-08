<?php

use Illuminate\Database\Seeder;

class banner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->delete();
        DB::table('banner')->insert([
            ['id'=>1,'title'=>'E-Learning Talent Wins','content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia','link'=>'Get Started','image'=>'panner-1.png','status'=>1],
            ['id'=>2,'title'=>'E-Learning Talent Wins','content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia','link'=>'Get Started','image'=>'panner-2.png','status'=>1],
            ['id'=>3,'title'=>'E-Learning Talent Wins','content'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam assumenda ea quo cupiditate facere deleniti fuga officia','link'=>'Get Started','image'=>'panner-3.png','status'=>1],
           
                  
        ]);
    }
}
