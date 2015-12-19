<?php

use Illuminate\Database\Seeder;

use Menelik\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_title = ['Owner', 'Adminstration', 'Redcator', 'Encoder', 'User'];
        $role_slug = array('teklit', 'admin', 'redac', 'encod', 'user' );

        foreach (range(0, 4) as $index) {
        	Role::create([
	        	'role_title' => $role_title[$index],
	       		'role_slug'  => $role_slug[$index]
        	]);
        }
    }
}
