<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Type;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker)
    {

        $types = Type::all();

        for ($i = 0; $i < 50; $i++){
            $newProject = new Project();
            $newProject->type_id = ($faker->randomElement($types))->id;
            $newProject->title = $faker->word();
            $newProject->description = $faker->paragraphs(2,true);
            $newProject->image = $faker->imageUrl(360, 360,'animal',true, 'animals', true, 'png');
            $newProject->group_name = $faker->word();
            $newProject->started_at = $faker->date('Y_m_d');
            $newProject->finished_at = $faker->date('Y_m_d');
            $newProject->final_score = $faker->randomDigit();
            $newProject->save();
        }
    }
}
