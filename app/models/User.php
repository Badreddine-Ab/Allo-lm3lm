<?php 
    class User {
        private $db;

        public function __construct()
        {
            $this->db = new Database;
        }

        // Register User
        public function register($data){
            $this->db->query('INSERT INTO users (name, email, password, adress, phone) VALUES (:name, :email, :password, :adress, :phone)');
           // Bind Values
            $this->db->bind(':name',$data['name']);
            $this->db->bind(':email',$data['email']);
            $this->db->bind(':password',$data['password']);
            $this->db->bind(':adress',$data['adress']);
            $this->db->bind(':phone',$data['phone']);


            // Execute
            if($this->db->execute()){
                return true;
            } else {
                return false;
            }
        }

        // Login User
        public function login($email, $password){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            $this->db->bind(':email', $email);

            $row = $this->db->single();

            $hashed_password = $row->password;
            if(password_verify($password, $hashed_password)){
                return $row;
            } else {
                return false;
            }
        }

        // find user by email
        public function findUserByEmail($email){
            $this->db->query('SELECT * FROM users WHERE email = :email');
            // Bind Values
            $this->db->bind(':email',$email);

            $row = $this->db->single();

            // Check row 
            if($this->db->rowCount() > 0){
                return true;
            } else {
                return false;
            }
        }
    }