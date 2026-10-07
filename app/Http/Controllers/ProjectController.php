<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\tag;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(Request $request){
        $projects = Project::with('tags')
            ->when($request->tag, fn ($q, $tag)=>
                $q->whereHas('tags', fn ($t)=> $t->where('name', $tag)))
            ->latest()
            ->paginate(9)
            ->withQueryString();
        return view('project.index',[
            'projects' => $projects,
            'tags'     => Tag::orderBy('name')->get(),
        ]);
    }
    public function show(Project $project){
        $project->increment('views');
        $project->load([
            'tags',
            'testimonials' => fn ($q) => $q->where('approved', true),
        ]);

        return view('project.show', compact('project'));
    }  
}
