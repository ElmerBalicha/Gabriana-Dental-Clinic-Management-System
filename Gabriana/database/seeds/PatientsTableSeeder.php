<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        for ($x = 0; $x <= 10; $x++) {
            DB::table('patients')->insert([
                'name' => str_random(10),
                'address' => str_random(10),
                'occupation' => str_random(10),
                'patientTelNo' => str_random(10),
                'status' => str_random(10),
                'birthDate' => '1997-9-8',
                'age' => str_random(2),
                'sex' => str_random(10),
                'medconditions' => 'None',
                'allergies' => 'None',
                'balance' => '0',
                'patStatus' => 'Active' 
            ]);    
        } 
    
       
    }
}
