<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;
use App\Person;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        
        // La creación de datos de roles debe ejecutarse primero
	    $this->call(RoleTableSeeder::class);
	    // Los usuarios necesitarán los roles previamente generados
        $this->call(UserTableSeeder::class);
        // Las personas 
	    $this->call(PeopleTableSeeder::class);
    }
}
