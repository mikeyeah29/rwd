<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    public function index()
 	{
 		return view('projects.index', [
 			'title' => 'Rockett Web Development',
 			'projects' => Project::getByType('app')
 		]);
 	}

 	public function show()
 	{
 		return view('projects.show', [
 			'title' => 'Rockett Web Development'
 		]);
 	}
}
