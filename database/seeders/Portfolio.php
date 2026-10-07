<?php

namespace Database\Seeders;

use App\Models\experiences;
use App\Models\Project;
use App\Models\Skill;
use Illuminate\Container\Attributes\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Portfolio extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $laravel = Tag::create(['name' => 'Laravel']);
        $mysql = Tag::create(['name' => 'Myaql']);

        $project = Project::create([
            'title'         => "Docker",
            'slug'          => "docker",
            'description'   => "A simple chat_system using laravel + vue + mysql",
            'github_url'    => "https://github.com/sokc72200-del/docker",
            'featured'      => true,
        ]);
        $project->tags()->attach([$laravel->id, $mysql->id]);

        Skill::create(['name' => 'laravel', 'category' => 'backend', 'level' => 60]);
        Skill::create(['name' => 'Vue', 'category' => 'frontend', 'level' => 20]);

        experiences::create([
            'company' => 'AngkrongSeaFood',
            'position' => 'StockController',
            'location' => 'Phnom Penh',
            'start_date' => '2026-03-01',
        ]);
    }
}
