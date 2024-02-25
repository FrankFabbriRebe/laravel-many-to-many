<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import model
use App\Models\Project;
use App\Models\Type;
use App\Models\Technology;

class ProjectTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Project::factory()
            ->count(10)
            ->make()
            ->each(function ($project) {

                $type = Type::inRandomOrder()->first();

                $project->type()->associate($type);

                $project->save();

            });


    }
}
