<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PagesController extends Controller
{
 	public function home() 
 	{
 		$projects = Project::getFeatured();

 		$levels = ['got the gist', 'confident', 'nailing it', 'god like'];

 		$skillTree = [
			'Frontend' => [
				'html' => 95,
				'css/sass' => 95,
				'JavaScript' => 75,
				'jQuery' => 90,
				'VueJs' => 70,
				'React' => 20
			],
			'Backend' => [
				'php' => 80,
				'node' => 60,
				
			],
			'Framewords' => [
				'laravel' => 80,
				'WordPress' => 90
			],
			'Other' => [
				'Command Line' => 50,
			]
		];

 		return view('pages.home', [
 			'title' => 'Rockett Web Development',
 			'levels' => $levels,
 			'skillTree' => $skillTree,
 			'projects' => $projects
 		]);
 	}
}
