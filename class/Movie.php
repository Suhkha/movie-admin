<?php
class Movie{
    private $title;
    private $description;
    private $group_actors;

    //-- Initialize variables
    public function __construct($title, $description, $group_actors){
        $this->id               = $id;
        $this->title            = $title;
        $this->description      = $description;
        $this->group_actors     = $group_actors;
    }

    public function index(){
        $all = mysql_query("SELECT id, title FROM movies");     
        
        while($row = mysql_fetch_assoc($all)){
           $this->all[] = $row;
        }

        return $this->all; 
    }

    public function insert(){
        $save = mysql_query("INSERT INTO movies (title, description) 
                             VALUES ('".$this->title."','".$this->description."')");
        $id_last_movie = mysql_insert_id();

       for ($i=0;$i<count($this->group_actors);$i++){
                $save_actors_in_movie = mysql_query("INSERT INTO actors_in_movies (id_fk_movie, id_fk_actor)
                                             VALUES ('".$id_last_movie."','".$this->group_actors[$i]."')");
        }
        
        if($save_actors_in_movie ==  true){  
            header("Location: new.php?status=ok");
            die();

        }else{

            header("Location:new.php?status=error");
            die();
        }

    }

    public function find($id){
        return $find = mysql_query("SELECT id, title, description FROM movies WHERE id = '".$id."' LIMIT 1");

    }

    public function find_movie_for_actor($id){

        $find_m_a = mysql_query("SELECT movies.id, title, id_fk_movie FROM actors_in_movies
            INNER JOIN movies ON (movies.id = actors_in_movies.id_fk_movie)
            INNER JOIN actors ON (actors_in_movies.id_fk_actor = actors.id) WHERE actors.id = '".$id."'");
    
        while($row_movie_actor = mysql_fetch_assoc($find_m_a)){
             $this->find_m_a[] = $row_movie_actor;
         }

         return $this->find_m_a;

    }


}

?>