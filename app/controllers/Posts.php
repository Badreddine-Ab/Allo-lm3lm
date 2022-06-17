<?php
class Posts extends Controller
{
    public function __construct()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }

        $this->postModel = $this->model('Post');
        $this->userModel = $this->model('User');
    }



    public function index()
    {
        // Get posts
        $posts = $this->postModel->getPosts();
        $data = [
            'posts' => $posts
        ];

        $this->view('posts/index', $data);
    }

    public function startwork()
    {
        $data = [];

        $this->view('posts/startwork', $data);
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            // Sanitize POST
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => trim($_POST['title']),
                'phone' => trim($_POST['phone']),
                'user_id' => trim($_SESSION['user_id']),
                'contry' => trim($_POST['contry']),
                'city' => trim($_POST['city']),
                'work_place_name' => trim($_POST['work_place_name']),
                'certificate' => trim($_POST['certificate']),
                'field' => trim($_POST['field']),
                'instagram' => trim($_POST['instagram']),
                'facebook' => trim($_POST['facebook']),
                'whatsapp' => trim($_POST['whatsapp']),
                'work_place_adress' => trim($_POST['work_place_adress']),
                'email' => trim($_POST['email']),

                'title_err' => '',
                'phone_err' => '',
                'contry_err' => '',
                'city_err' => '',
                'work_place_name_err' => '',
                'certificate_err' => '',
                'field_err' => '',
                'instagram_err' => '',
                'facebook_err' => '',
                'whatsapp_err' => '',
                'work_place_adress_err' => '',
                'email_err' => '',
            ];

            // Validate data
            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter a title';
            }
            if (empty($data['phone'])) {
                $data['phone_err'] = 'Please enter phone number';
            }

            // Make sure no errors
            if (empty($data['title_err']) && empty($data['phone_err']) && empty($data['contry_err']) && empty($data['city_err']) && empty($data['work_place_name_err']) && empty($data['certificate_err']) && empty($data['field_err']) && empty($data['instagram_err']) && empty($data['facebook_err']) && empty($data['whatsapp_err']) && empty($data['work_place_adress_err']) && empty($data['email_err'])) {
                // Validated
                if ($this->postModel->addPost($data)) {
                    flash('post_message', 'Offer Added');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
            } else {
                // Load view with errors
                $this->view('posts/add', $data);
            }
        } else{
        $data = [
            'title' => '',
            'phone' => '',
            'contry' =>'',
            'city' => '',
            'work_place_name' =>'',
            'certificate' =>'',
            'field' => '',
            'instagram' => '',
            'facebook' => '',
            'whatsapp' =>'',
            'work_place_adress' => '',
            'email' =>''
        ];

        $this->view('posts/add', $data);
    }
}





public function edit($id)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitize POST
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'id' => $id,
            'title' => trim($_POST['title']),
            'phone' => trim($_POST['phone']),
            'user_id' => trim($_SESSION['user_id']),
            'contry' => trim($_POST['contry']),
            'city' => trim($_POST['city']),
            'work_place_name' => trim($_POST['work_place_name']),
            'certificate' => trim($_POST['certificate']),
            'field' => trim($_POST['field']),
            'instagram' => trim($_POST['instagram']),
            'facebook' => trim($_POST['facebook']),
            'whatsapp' => trim($_POST['whatsapp']),
            'work_place_adress' => trim($_POST['work_place_adress']),
            'email' => trim($_POST['email']),

            'title_err' => '',
            'phone_err' => '',
            'contry_err' => '',
            'city_err' => '',
            'work_place_name_err' => '',
            'certificate_err' => '',
            'field_err' => '',
            'instagram_err' => '',
            'facebook_err' => '',
            'whatsapp_err' => '',
            'work_place_adress_err' => '',
            'email_err' => '',
        ];

        // Validate data
        if (empty($data['title'])) {
            $data['title_err'] = 'Please enter a title';
        }
        if (empty($data['phone'])) {
            $data['phone_err'] = 'Please enter phone number';
        }

        // Make sure no errors
        if (empty($data['title_err']) && empty($data['phone_err']) && empty($data['contry_err']) && empty($data['city_err']) && empty($data['work_place_name_err']) && empty($data['certificate_err']) && empty($data['field_err']) && empty($data['instagram_err']) && empty($data['facebook_err']) && empty($data['whatsapp_err']) && empty($data['work_place_adress_err']) && empty($data['email_err'])) {
            // Validated
            if ($this->postModel->updatePost($data)) {
                flash('post_message', 'Offer updated');
                redirect('posts');
            } else {
                die('Something went wrong');
            }
        } else {
            // Load view with errors
            $this->view('posts/edit', $data);
        }
    } else{
        // Get existing post from model
        $post = $this->postModel->getPostById($id);
        // check for owner
        if($post->user_id != $_SESSION['user_id']){
            redirect('posts');
        }
    $data = [
        'id'=> $id,
        'title' => $post->title,
        'phone' => $post->phone,
        'contry' => $post->contry ,
        'city' =>  $post->city ,
        'work_place_name' => $post->work_place_name ,
        'certificate' => $post->certificate ,
        'field' =>   $post->field ,
        'instagram' =>   $post->instagram ,
        'facebook' =>   $post->facebook ,
        'whatsapp' =>  $post->whatsapp ,
        'work_place_adress' =>   $post->work_place_adress ,
        'email' =>  $post->email 
    ];

    $this->view('posts/edit', $data);
}
}

    

    public function show($id){
        $post = $this->postModel->getPostById($id);

        $user = $this->userModel->getUserById($post->user_id);

        $data = [
          'post' => $post,
          'user' => $user
        ];
  
        $this->view('posts/show', $data);
      }


    public function Profile(){
       
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->postModel->updateUser($_POST);
        }

        $user = $this->userModel->getUserById($_SESSION["user_id"]);
        $posts = $this->postModel->getPostByUserId($_SESSION["user_id"]);


        

        $data = [
          'user' => $user,
          'posts' => $posts
        ];
  
  
        $this->view('posts/profile', $data);
      }


      public function editUser($id)
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Sanitize POST
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'id' => $id,
            'name' => trim($_POST['name']),
            'email' => trim($_POST['email']),
            'adress' => trim($_POST['adress']),
            'phone' => trim($_POST['phone']),
            'password' => trim($_POST['password']),
           

            'name_err' => '',
            'email_err' => '',
            'adress_err' => '',
            'phone_err' => '',
            'password_err' => '',
            
        ];

        // Validate data
        if (empty($data['name'])) {
            $data['name_err'] = 'Please enter a title';
        }
        if (empty($data['email'])) {
            $data['email_err'] = 'Please enter phone number';
        }

        // Make sure no errors
        if (empty($data['name_err']) && empty($data['email_err']) && empty($data['adress_err']) && empty($data['phone_err']) && empty($data['password_err'])) {
            // Validated
            if ($this->userModel->updateUser($data)) {
                flash('post_message', 'Profile updated');
                redirect('posts/profile');
            } else {
                die('Something went wrong');
            }
        } else {
            // Load view with errors
            $this->view('posts/profile', $data);
        }
    } else{
        // Get existing post from model
        $user = $this->userModel->getUserById($id);
        // check for owner
        if($user->id != $_SESSION['id']){
            redirect('posts/profile');
        }
    $data = [
        'id'=> $id,
        'name' => $user->name,
        'email' => $user->email,
        'adress' => $user->adress ,
        'phone' =>  $user->phone ,
        'password' => $user->password 
       
    ];

    $this->view('posts/Profile', $data);
}
}

public function delete($id){
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
         // Get existing post from model
         $post = $this->postModel->getPostById($id);
         // check for owner
         if($post->user_id != $_SESSION['user_id']){
             redirect('profile');
         }
        if($this->postModel->deletePost($id)){
            flash('post_message','post Removed');
            redirect('posts/profile');
        } else {
            die('Something went wrong');
        }
    } else {
        redirect('posts');
    }
}

}
