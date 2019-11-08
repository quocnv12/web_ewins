<?php

use Illuminate\Database\Seeder;

class adviser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('adviser')->delete();
        DB::table('adviser')->insert([
            ['id'=>1,'name'=>'John Rooster','image'=>'person_2.jpg','position'=>'Giáo sư','information'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.'],
            ['id'=>2,'name'=>'Tom Sharp','image'=>'person_3.jpg','position'=>'Tiến sĩ','information'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.'],
            ['id'=>3,'name'=>'Winston Hodson','image'=>'person_4.jpg','position'=>'Thạc sĩ','information'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.'],
            ['id'=>4,'name'=>'John Rooster','image'=>'person_2.jpg','position'=>'Giáo sư','information'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.'],
            ['id'=>5,'name'=>'Tom Sharp','image'=>'person_3.jpg','position'=>'Tiến sĩ','information'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.'],
            ['id'=>6,'name'=>'Winston Hodson','image'=>'person_4.jpg','position'=>'Thạc sĩ','information'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque laboriosam ratione ipsam, quia sint unde, veniam impedit, autem modi facilis quibusdam aliquid nesciunt doloremque praesentium repellat ipsa voluptatum voluptate ad.'],
         
        ]);
    }
}
