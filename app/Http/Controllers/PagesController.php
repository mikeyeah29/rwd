<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class PagesController extends Controller
{
 	public function home() 
 	{
 		// $projects = [
 		// 	array(
			// 	'name' => 'Greenroom App',
			// 	'tags' => ['Vue', 'API', 'Cypress'],
			// 	'description' => 'Tour managing app for iPhone, Android & Web',
			// 	'img' => '/img/road.jpg'
			// ),
			// array(
			// 	'name' => 'Chord Generator',
			// 	'tags' => ['Vue', 'API', 'Cypress'],
			// 	'description' => 'A small web app that generates ',
			// 	'img' => '/img/road.jpg'
			// ),
			// array(
			// 	'name' => 'Acacia Custom Guitars',
			// 	'tags' => ['Vue', 'Laravel'],
			// 	'description' => 'Custom guitar form builder',
			// 	'img' => '/img/acacia.jpg'
			// ),
			// array(
			// 	'name' => 'The Dent Act',
			// 	'tags' => ['WordPress'],
			// 	'description' => 'WordPress theme for bands and artists',
			// 	'img' => '/img/tda.jpg'
			// ),
			// array(
			// 	'name' => 'WigWam',
			// 	'tags' => ['php', 'node js'],
			// 	'description' => 'Website mockup builder - designed for quick poc development',
			// 	'img' => '/img/wigwam.jpg'
			// ),
			// array(
			// 	'name' => 'Greenroom App',
			// 	'tags' => ['Vue', 'API', 'Cypress'],
			// 	'description' => '',
			// 	'img' => '/img/road.jpg'
			// )
 		// ];

 		$projects = Project::getFeatured();

 		$skills = [
			'Frontend' => [
				'html' => 95,
				'css/sass' => 95,
				'JavaScript' => 80,
				'jQuery' => 90,
				'VueJs' => 70,
				'React' => 20
			],
			'Backend' => [
				'php' => 80,
				'node' => 60,
				
			],
			'Framewords' => [
				'laravel' => 68,
				'WordPress' => 80
			],
			'Other' => [
				'Command Line' => 50,
			]
		];

 		return view('pages.home', [
 			'title' => 'Rockett Web Development',
 			'skills' => $skills,
 			'projects' => $projects
 		]);
 	}
}
