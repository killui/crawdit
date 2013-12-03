<?php

class projectdev extends Controller{
    
    

    function __construct($app, $url, $page) {
        parent::__construct();
        
        $projectName = preg_replace('$-$', ' ', $url[1]);
        
        //var_dump($projectName);
        $projectId = $url[1];
        
        $Project = new ProjectModel();
        
        $projects = $Project->getProject($projectId);
		
		$title = $projects->project_name;
        
        $genres = $Project->getGenres($projectId);
        //array_push($dataProject, $genre);
        
        $perks = $Project->getPerks($projectId);
        //array_push($dataProject, $perks);
		
        $ressources = $Project->getRessources($projectId);
        //array_push($dataProject, $ressources);
        
        $this->View->projectRender('projectdev', $title, $page, $projects, $perks, $ressources, $genres);
    }

}