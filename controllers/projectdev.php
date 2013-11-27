<?php

class projectdev extends Controller{

    function __construct($app, $url) {
        parent::__construct();
        
        //print_r($url);
        $projectId = $url[1];
        
        $Project = new ProjectModel();
        
        $dataProject = $Project->getProject($projectId);
        
        $genres = $Project->getGenres($projectId);
        //array_push($dataProject, $genre);
        
        $perks = $Project->getPerks($projectId);
        //array_push($dataProject, $perks);
        
        $ressources = $Project->getRessources($projectId);
        //array_push($dataProject, $ressources);
        
        $this->View->projectRender('projectdev', $dataProject, $perks, $ressources, $genres);
    }

}