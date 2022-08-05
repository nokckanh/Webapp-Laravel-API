<?php

use Illuminate\Database\Seeder;

class oauth extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->insert([
    	['id' => '1', 'name' => 'Laravel Personal Access Client','secret'=>'ql2kXVrfAmnQGinSr9NdsD6qX5IEUQr5gOqNv4db','redirect' => 'http://xecaonguyen.herokuapp.com','personal_access_client'=>'1','password_client' => '0','revoked'=>'0'],
    	['id' => '2', 'name' => 'Laravel Password Grant Client','secret'=>'0xsb79VttZl5iUvgqeIgg6hmi1dtscscRq1zgdrU','provider' => 'user','redirect' => 'http://xecaonguyen.herokuapp.com','personal_access_client'=>'0','password_client' => '1','revoked'=>'0'],
		]);
    }
}
