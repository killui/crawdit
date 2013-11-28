<?php

class ProjectModel extends Model{

    function __construct() {
        parent::__construct();
        
    }
    
    public function getProject($id) {
        global $database;

        $query = $database->prepare('select * from project, user
		where user_user_id = user_id
		and project_id = :id
		order by TW_TWEETS.TWE_DATE desc');

        $query->bindParam(':id', $id);

        $query->execute();
        $data = $query->fetchAll();
        return $data;
    }

}