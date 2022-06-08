<?php
  class Post {
    private $db;

    public function __construct(){
      $this->db = new Database;
    }

    public function getPosts(){
      $this->db->query("SELECT * FROM currencies");

      return $this->db->resultSet();
      
    }
    public function getValueDevise($devise){
      $this->db->query("SELECT * FROM currencies WHERE title = $devise ");
      // $this->db->bind(':devise',$devise);
      return $this->db->resultSet();
    }
  }