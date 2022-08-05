<?php

use Illuminate\Database\Seeder;
use Illuminate\DB;
use App\lichtrinh;
use App\CTchuyendi;
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
        $time = date('Y-m-d H:i:s');
        
    	for ($i=2; $i<30 ; $i+=5) { 
   			$idlt = lichtrinh::create([
   				'xe_id' =>'20',
          'tuyen_id'=>'HN-BMT',
          'xuatben' =>'07:30',
          'ngaydi' => '2020/1/'.$i,
   				
   			]);   
         CTchuyendi::create([
            'lichtrinh_id' => $idlt->id
            
        ]);

    	}

     
    }
}
