<?php
class Actor{
    private $name;
    private $bio;

    public function __construct($name, $bio){
        $this->id               = $id;
        $this->name             = $name;
        $this->bio              = $bio;
    }

    public function insert(){
        $save = mysql_query("INSERT INTO actors (name, bio) 
                             VALUES ('".$this->name."','".$this->bio."')");
        
        if($save ==  true){  
            header("Location: new.php?status=ok");
            die();

        }else{

            header("Location:new.php?status=error");
            die();
        }

    }

    public function index_actor(){
        $all = mysql_query("SELECT id, name, bio FROM actors");     
        
        while($row = mysql_fetch_assoc($all)){
         $this->all[] = $row;
     }

     return $this->all; 
 }

    public function find_actor($id){

        $find = mysql_query("SELECT movies.id, name, id_fk_actor FROM actors_in_movies
            INNER JOIN movies ON (movies.id = actors_in_movies.id_fk_movie)
            INNER JOIN actors ON (actors_in_movies.id_fk_actor = actors.id) WHERE movies.id = '".$id."'");
    
        while($row_actor = mysql_fetch_assoc($find)){
             $this->find[] = $row_actor;
         }

         return $this->find;

    }

    public function find_bio($id){
        return $find = mysql_query("SELECT id, name, bio FROM actors WHERE id = '".$id."' LIMIT 1");

    }
}

?>