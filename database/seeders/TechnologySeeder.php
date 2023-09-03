<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            'Communication','Electrical','Energy','Mechanical','Medical','Transportation','3D Printing','Genomics'
        ];

        foreach($technologies as $tech){
            $newTech = new Technology();
            $newTech->name = $tech;
            $newTech->save();
        }
    }
}
