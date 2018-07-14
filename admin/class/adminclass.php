<?php

class adminclass {

    private $con;
    public function __construct(){ 
        $host="localhost";
        $user="root";
        $password="";
        $database="asset";
        $this->con= mysqli_connect($host, $user, $password, $database);
        if (!$this->con) {
            echo "True";
        }
    }
    public function save_category($data){
       $sql="INSERT INTO category (post_title,post_by) VALUES('$data[pname]','$data[name]')";
       if(mysqli_query($this->con, $sql)){
           
           $message="Category has been added successfully!";
           return ($message);
           
           
       }
       
       
    }
    
    public function select_all_category(){
        $sql="SELECT * FROM category";
        if (mysqli_query($this->con, $sql)) {
            $query = mysqli_query($this->con, $sql);
            return $query;
        }
          
        
    }
    

    
    
}


?>