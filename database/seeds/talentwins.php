<?php

use Illuminate\Database\Seeder;

class talentwins extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('talent_wins')->delete();
        DB::table('talent_wins')->insert([
            ['id'=>1,'title'=>'Talent Wins Technology','slug'=>'Talent-Wins-Technology-1'],
            ['id'=>2,'title'=>'Talent Wins Solution','slug'=>'Talent-Wins-Solution-2'],
            ['id'=>3,'title'=>'Talent Wins Academy','slug'=>'Talent-Wins-Academy-3'],
                   
        ]);
    }
}
