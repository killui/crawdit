<?php

class projectdev extends Controller{
    
    

    function __construct($app, $url, $page) {
        parent::__construct();
        print_r($url);
        
        $projectName = preg_replace('$-$', ' ', $url[1]);
        
        var_dump($projectName);
        $title = $projectName;
        $projectId = $url[2];
        
        $Project = new ProjectModel();
        
        $dataProject = $Project->getProject($projectId);
        
        $genres = $Project->getGenres($projectId);
        //array_push($dataProject, $genre);
        
        $perks = $Project->getPerks($projectId);
        //array_push($dataProject, $perks);
        
        $ressources = $Project->getRessources($projectId);
        //array_push($dataProject, $ressources);
        
        $this->View->projectRender('projectdev', $title, $page, $dataProject, $perks, $ressources, $genres);
    }

}