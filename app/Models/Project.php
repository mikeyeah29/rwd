<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Database\data\projects;

class Project extends Model
{
    use HasFactory;

    const PROJECTS = [
    	'greenroom-app' => [
			'name' => 'GreenRoom App',
			'tags' => ['Vue', 'API', 'Cypress'],
			'type' => 'app',
			'img' => '',
			'description' => 'chord-generator'
		],
		'chord-generator' => [
			'name' => 'Chord Generator',
			'tags' => ['Js', 'SVG'],
			'type' => 'app',
			'img' => '',
			'description' => 'chord-generator'
		],
		'the-dent-act' => [
			'name' => 'The Dent Act',
			'tags' => ['WordPress', 'html', 'css'],
			'type' => 'website',
			'img' => '',
			'description' => 'the-dent-act'
		]
    ];

    static public function get($slug) 
    {
        if(isset(Self::PROJECTS[$slug])) {
            return Self::PROJECTS[$slug];
        }
 
        return null;
    }

    static public function getFeatured() 
    {
    	return Self::PROJECTS;
    }

    static public function getByTech($tech) 
    {
    	$projects = [];
    	foreach (Self::PROJECTS as $project) {
    		if(in_array($tech, $project['tech'])) {
    			$projects[] = $project;
    		}
    	}
    	return $projects;
    }

    static public function getByType($type) 
    {
    	$projects = [];
    	foreach (Self::PROJECTS as $project) {
    		if($project['type'] === $type) {
    			$projects[] = $project;
    		}
    	}
    	return $projects;
    }
}
