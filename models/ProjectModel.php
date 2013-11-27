<?php

class ProjectModel extends Model {

    function __construct() {
        parent::__construct();
    }

    public function getProject($id) {
        global $database;

        $query = $database->prepare('SELECT * 
            FROM  project, region, user
            WHERE project_id = :id
            AND region_id = region_region_id
            AND user.user_id = project.user_user_id');

        $query->bindParam(':id', $id);

        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    
    public function getGenres($id) {
        global $database;

        $query = $database->prepare('SELECT genre_name 
            FROM  project, genre, genre_has_project
            WHERE genre.genre_id = genre_has_project.genre_genre_id 
            AND project.project_id = genre_has_project.project_project_id');

        $query->bindParam(':id', $id);

        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    
    public function getPerks($id) {
        global $database;

        $query = $database->prepare('SELECT perks_money, perks_reward 
            FROM  project, perks
            WHERE project_id = :id
            AND project_id = project_project_id');

        $query->bindParam(':id', $id);

        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }
    
    public function getRessources($id) {
        global $database;

        $query = $database->prepare('SELECT ressource_name, ressource_need_number 
            FROM  ressource, ressource_need, project
            WHERE project_id = :id
            AND project_id = project_project_id
            AND ressource_need.ressource_ressource_id = ressource.ressource_id');

        $query->bindParam(':id', $id);

        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

}