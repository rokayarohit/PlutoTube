<?php 


class User {
    private $conn, $sqlData, $userLoggedInObj;

    public function __construct($conn, $input, $userLoggedInObj){
        $this->userLoggedInObj = $userLoggedInObj;
        $this->conn = $conn;
        
        if(in_array($input)){
            $this->sqlData = $input;
        }
        else{
            $query = $this->conn->prepare("SELECT * FROM videos WHERE id = :id");
            $query->bindParam(":id", $input);
            $query->execute();
            $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
        }           
    }

    public function getVideoId(){
        return $this->sqlData["id"];
    }
    
    
    public function getVideoUploadedBy(){
        return $this->sqlData["uploadedBy"];
    }

    
    public function getVideoTitle(){
        return $this->sqlData["title"];
    }

    
    public function getVideoDescription(){
        return $this->sqlData["description"];
    }
    
    public function getVideoCategory(){
        return $this->sqlData["category"];
    }

    
    public function getVideoPrivacy(){
        return $this->sqlData["privacy"];
    }

    
    public function getVideoFilePath(){
        return $this->sqlData["filePath"];
    }

    
    public function getVideoUploadDate(){
        return $this->sqlData["uploadDate"];
    }

    
    public function getVideoView(){
        return $this->sqlData["views"];
    }

    
    public function getVideoDuration(){
        return $this->sqlData["duration"];
    }
}
?>