<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        //$this->call(UsersTableSeeder::class);
        //$this->call(RolesTableSeeder::class);
        //$this->call(ProfilesTableSeeder::class);
        $this->call(BookletsTableSeeder::class);
        $this->call(NationalExamsTableSeeder::class);
        $this->Call(ChoicesTableSeeder::class);

        Model::reguard();
    }
}
