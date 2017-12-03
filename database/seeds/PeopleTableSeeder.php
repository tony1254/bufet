<?php

use Illuminate\Database\Seeder;
use App\Person;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $person = new Person();
        $person->cui = '2145800082214';
        $person->name1 = 'luis';
        $person->name2 = 'antonio';
        $person->name3 = '';
        $person->lastName1 = 'garcia';
        $person->lastName2 = 'aguirre';
        $person->lastName3 = '';
        $person->sex = 'masculino';
        $person->nationality = 'guatemala';
        $person->dateBirth = '1992-09-23';
        $person->placeBirth = 'moyuta, jutiapa';
        $person->placeLive = 'san benito, peten';
        $person->civilStatus = 'soltero';
        $person->save();

    }
}
