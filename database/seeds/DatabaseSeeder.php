<?php

use Illuminate\Database\Seeder;
use App\models\news;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
     
        $this->call(role::class);
        $this->call(admin::class);
        $this->call(inforcompany::class);
        $this->call(contact::class);
        $this->call(product::class);
        $this->call(banner::class);
       
        $this->call(talentwins::class);
        $this->call(introduce::class);
        $this->call(adviser::class);
       
        $this->call(elearning::class);
         $this->call(subelearning::class);

         $this->call(catenew::class);
         $this->call(newss::class);

         $this->call(cateservice::class);
         $this->call(services::class); 

         $this->call(support::class); 
         $this->call(sub_talentwins::class); 
        
         $this->call(prize::class); 
         $this->call(cateprize::class); 

         $this->call(cateprizenew::class);
         
    }
}
