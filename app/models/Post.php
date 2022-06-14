<?php 
    class Post {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        public function getPosts(){
            $this->db->query('SELECT *,
                            posts.id as postId,
                            users.id as userId,
                            posts.created_at as postCreated,
                            users.cretaed_at as userCreated,
                            posts.phone as postPhone,
                            users.phone as userPhone
                            
                            FROM posts
                            INNER JOIN users
                            ON posts.user_id = users.id
                            ORDER BY posts.created_at DESC
                            ');

            $results = $this->db->resultSet();

            return $results; 
        }


        public function addPost($data) {
            $this->db->query('INSERT INTO posts (title, user_id, phone, picture, contry, city, work_place_name, certificate, field, instagram, facebook,whatsapp,work_place_adress,email )
                            VALUES (:title, :user_id, :phone, :picture, :contry, :city, :work_place_name, :certificate, :field, :instagram, :facebook,:whatsapp, :work_place_adress, :email)');
           // Bind Values
            $this->db->bind(':title',$data['title']);
            $this->db->bind(':user_id',$_SESSION['user_id']);
            $this->db->bind(':phone',$data['phone']);
            $this->db->bind(':contry',$data['contry']);
            $this->db->bind(':city',$data['city']);
            $this->db->bind(':work_place_name',$data['work_place_name']);
            $this->db->bind(':certificate',$data['certificate']);
            $this->db->bind(':field',$data['field']);
            $this->db->bind(':instagram',$data['instagram']);
            $this->db->bind(':facebook',$data['facebook']);
            $this->db->bind(':whatsapp',$data['whatsapp']);
            $this->db->bind(':work_place_adress',$data['work_place_adress']);
            $this->db->bind(':email',$data['email']);
            
            if(!file_exists("./uploads/")) {
                mkdir('./uploads/');
            }
            $imageData = $_FILES['img'];
            $imageName = $imageData['name'];
            $tempName = $imageData['tmp_name'];
            $folder = './uploads/' . $imageName;
            move_uploaded_file($tempName, $folder);

            $this->db->bind(':picture',$imageName);
           
            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }
    }